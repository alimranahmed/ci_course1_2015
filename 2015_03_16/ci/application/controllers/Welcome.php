<?php

class Welcome extends CI_Controller {

	public function index()
	{
		//echo "hello world";
		$this->load->view('welcome_message');
	}

	public function about(){
		// echo "This is about";
		$this->load->view("about");
	}
}
