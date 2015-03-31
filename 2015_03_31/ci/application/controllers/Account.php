<?php
class Account extends CI_Controller{
	public function login(){

		$loginError = null;

		if(isset($_POST["submit"])){
			$username = $this->input->post("username");
			$password = md5($this->input->post("password"));

			$this->load->model("M_user");
			$user = $this->M_user->checkCredintial($username, $password);

			if($user != null){

				$this->session->set_userdata("user_id", $user->id);
				$this->session->set_userdata("name", $user->name);
				$this->session->set_userdata("role", $user->role);
				redirect(base_url());
				//echo "You are a valid user";
			}else{
				$loginError = "Invalid username or password";
			}

			//var_dump($user);
		}

		$data = array(
			"title" => "Login",
			"loginError" => $loginError,
			);
		$this->load->view("v_header",$data);
		$this->load->view("v_login",$data);
		$this->load->view("v_footer");
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}