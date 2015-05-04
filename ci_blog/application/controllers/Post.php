<?php
class Post extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model("M_post");
	}
	public function create(){
		$this->loginCheck();
		
			if(isset($_POST['save'])){
				$heading = $this->input->post("heading");
				$body = $this->input->post("body");
				$tags = $this->input->post("tags");
				$category = $this->input->post("category");
				
				$newPost = array(
					"heading" => $heading,
					"body" => $body,
					"category" => $category,
					"tags" => $tags,
					"updated_at" => date("Y:m:d H:i:s"),
					"owner" => $this->session->userdata("user_id"),
					
				);
				$this->M_post->create($newPost);
				$this->session->set_flashdata("successMsg", "Post created successfully!");
			}

			$this->load->view("backend/header");
			$this->load->view("backend/v_create_post");
			$this->load->view("backend/footer");
		
	}
	public function view_post(){

		$this->loginCheck();
		
		$id = $this->session->userdata("user_id");
		
		$postList = $this->M_post->getAllPost($id);

		$data = array(
				"title" => "Home",
				"posts" => $postList,

			);
			
		$this->load->view("backend/header");
		$this->load->view("backend/v_view_post", $data);
		$this->load->view("backend/footer");

	}
	public function delete($id){
		$this->loginCheck();
		$this->M_post->deletePost($id);
		redirect(site_url('post/view_post'));
		
	}
	public function edit($id){
		$this->loginCheck();
		
		$fileError = null;
		$fileName = null;
	    
	    echo $fileError;
			
			$heading = $this->input->post("heading");
			$body = $this->input->post("body");
			$data = array(
				"heading" => $heading,
				"body" => $body,
				);
			$this->M_post->editPost($data, $id);
			
			redirect(site_url('post/view_post'));
			
	}
	public function loginCheck(){
		if(!$this->session->userdata("user_id")){
			$this->session->set_flashdata('errorMsg', 'Unauthorized access');
			redirect(site_url(Login));
		}
	}
}