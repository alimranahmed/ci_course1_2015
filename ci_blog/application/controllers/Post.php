<?php
class Post extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model("M_post");
	}
	public function create(){
		if(isset($_POST['save'])){
			$heading = $this->input->post("heading");
			$body = $this->input->post("body");
			$tags = $this->input->post("tags");
			$category = $this->input->post("category");
			$newPost = [
				"heading" => $heading,
				"body" => $body,
				"category" => $category,
				"tags" => $tags,
				"updated_at" => date("Y:m:d H:i:s"),
			];
			$this->M_post->create($newPost);
			$this->session->set_flashdata("successMsg", "Post created successfully!");
		}
		$this->load->view("backend/header");
		$this->load->view("backend/v_create_post");
		$this->load->view("backend/footer");
	}
}