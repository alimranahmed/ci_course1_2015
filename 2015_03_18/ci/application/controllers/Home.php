<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('calendar');
	}

	public function index(){

		$userList = array(
				array("id"=>"1", "name"=>"Al- Imran Ahmed", "email"=>"al.imran.cse@gmail.com", "username"=>"imran"),
				array("id"=>"2", "name"=>"Shoikot", "email"=>"shaikot@gmail.com", "username"=>"shoikot"),
				array("id"=>"3", "name"=>"Rokib", "email"=>"rokib@gmail.com", "username"=>"rokib"),
			);

		$data = array(
				"title" => "Home",
				"users" => $userList,
			);

		$this->load->view("v_header", $data);
		$this->load->view("v_home", $data);
		$this->load->view("v_footer");
	}

	public function delete($id){

		$data = array(
				'title' => "Delete user",
			);
		echo "User deleted! id: ".$id;
	}

	public function about(){

		$name = "Al- imran Ahmed";

		$data = array(
				'name' => $name,
				'email' => "al.imran.cse@gmail.com",
				'title' => "About",
				'calendar' => $this->calendar->generate(),
			);

		$this->load->view("v_header", $data);
		$this->load->view("v_about", $data);
		$this->load->view("v_footer");
	}
}
