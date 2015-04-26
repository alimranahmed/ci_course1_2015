<?php
class Dashboard extends CI_Controller{
	public function index(){
		$this->load->view("backend/header");
		$this->load->view("backend/index");
		$this->load->view("backend/footer");
	}
}