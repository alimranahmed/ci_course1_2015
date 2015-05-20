<?php
class PostComment extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model("M_comment");
	}
	public function add($id){
		if(isset($_POST['submit'])){
			
			$body = $this->input->post("body");
			

			$newComment = array(
				"body" => $body,
				"updated_at" => date("Y:m:d H:i:s"),
				"owner" => $this->session->userdata("user_id"),
				"post" => $id,
					
			);
			$this->M_comment->addComment($newComment);
			$this->session->set_flashdata("successMsg", "Comment created successfully!");
			
		}
		redirect(site_url('front'));
	}
}