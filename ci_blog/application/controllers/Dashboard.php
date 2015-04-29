<?php
class Dashboard extends CI_Controller{
	public function index(){
		if($this->session->userdata("user_id")){

			$this->load->view("backend/header");
			$this->load->view("backend/index");
			$this->load->view("backend/footer");
		}
		else{
			redirect(site_url('login'));
		}

		
	}

}