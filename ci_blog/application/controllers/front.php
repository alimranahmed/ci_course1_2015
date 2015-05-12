<?php
class front extends CI_Controller{

	public function index(){

		$this->load->view("frontend/v_header");
		$this->load->view("frontend/v_home");
		$this->load->view("frontend/v_footer"); 
	} 
}