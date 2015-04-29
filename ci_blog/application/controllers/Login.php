<?php
class Login extends CI_Controller{
	public function index(){
		$loginError = null;
		if(isset($_POST["submit"])){
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$this->load->model("M_user");
			$user = $this->M_user->checkCredintial($username, $password);
			if($user != null){
				$this->session->set_userdata("user_id", $user->id);
				$this->session->set_userdata("name", $user->name);
				redirect(site_url('dashboard'));
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
		
		$this->load->view("v_login", $data);
		
	}

}