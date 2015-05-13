<?php
class front extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model("M_front");
		$this->load->helper('text');
	}

	public function index(){
		$postList = $this->M_front->getPost();

		$data = array(
				"title" => "Home",
				"posts" => $postList,

			);
		
		
		$this->load->view("frontend/v_header");
		$this->load->view("frontend/v_home",$data);
		$this->load->view("frontend/v_footer"); 
	} 
}