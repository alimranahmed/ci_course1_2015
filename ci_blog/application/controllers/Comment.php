<?php
class Comment extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model("M_comment");
	}
	
				
	public function view(){

		$this->loginCheck();
		
		$id = $this->session->userdata("user_id");
		
		$commentList = $this->M_comment->getAllComment($id);

		$data = array(
				"title" => "Home",
				"comments" => $commentList,

			);
			
		$this->load->view("backend/header");
		$this->load->view("backend/v_comment",$data);
		$this->load->view("backend/footer");

	}
	public function delete($id){
		$this->loginCheck();
		$this->M_comment->delete($id);
		redirect(site_url('comment/view'));
		
	}
	public function edit($id){
		$this->loginCheck();
		
		$fileError = null;
		$fileName = null;
	    
	    echo $fileError;
			
			
			$body = $this->input->post("body");
			$data = array(
				
				"body" => $body,
				);
			$this->M_comment->edit($data, $id);
			
			redirect(site_url('comment/view'));
			
	}
	public function loginCheck(){
		if(!$this->session->userdata("user_id")){
			$this->session->set_flashdata('errorMsg', 'Unauthorized access');
			redirect(site_url(Login));
		}
	}
}