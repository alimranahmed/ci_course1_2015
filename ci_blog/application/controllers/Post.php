<?php
class Post extends CI_Controller{
	public function create(){
		$this->load->view("backend/header");
		$this->load->view("backend/v_create_post");
		$this->load->view("backend/footer");

	}
}