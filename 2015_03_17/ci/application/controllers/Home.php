<?php

class Home extends CI_Controller{

	public function index(){
		$data = array(
				"title" => "Home"
			);

		$this->load->view("v_header", $data);
		$this->load->view("v_home");
		$this->load->view("v_footer");
	}

	public function about(){
		$name = "Al- imran Ahmed";

		$data = array(
				'name' => $name,
				'email' => "al.imran.cse@gmail.com",
				'title' => "About",
			);

		$this->load->view("v_header", $data);
		$this->load->view("v_about", $data);
		$this->load->view("v_footer");
	}
}
