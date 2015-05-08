<?php
class Profile extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model("M_user");
	}
	public function view(){
		$this->loginCheck();
		
		$id = $this->session->userdata("user_id");
		
		$userList = $this->M_user->getAllUsers($id);
		
		$data = array(
				"title" => "Home",
				"users" => $userList,
			);
			
			
		$this->load->view("backend/header");
		$this->load->view("backend/v_profile",$data);
		$this->load->view("backend/footer");

	}
	public function setting(){
		$this->loginCheck();
		
		$id = $this->session->userdata("user_id");
		
		$userList = $this->M_user->getAllUsers($id);
		
		$data = array(
				"title" => "Home",
				"users" => $userList,
			);
		$this->load->view("backend/header");
		$this->load->view("backend/v_setting",$data);
		$this->load->view("backend/footer");
	
	}
	public function edit(){
		$this->loginCheck();
		
		$fileError = null;
		$fileName = null;
	    echo $fileError;
	    
	   $id = $this->session->userdata("user_id");
			
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$usename = $this->input->post("username");
		
		$data = array(
			"name" => $name,
			"email" => $email,
			"username" => $usename,
			);
		$this->M_user->edit($data, $id);
		
		redirect(site_url('profile/view'));
			
		$this->session->set_flashdata("successMsg", "Profile Change Successfully!");
		
	}
	

	public function loginCheck(){
		if(!$this->session->userdata("user_id")){
			$this->session->set_flashdata('errorMsg', 'Unauthorized access');
			redirect(site_url(Login));
		}
	}
}