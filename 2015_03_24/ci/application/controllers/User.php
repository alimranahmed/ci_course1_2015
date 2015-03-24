<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_user");
		$this->load->model("M_department");
	}

	public function delete($id){
		$this->M_user->delete($id);
		redirect(base_url());
	}

	public function edit($id){
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$department = $this->input->post("department");

		$data = array(
			"name" => $name,
			"email" => $email,
			"username" => $username,
			"department" => $department,
			);
		$this->M_user->edit($data, $id);
		redirect(base_url());
	}

	public function registration(){

		$errors = null;

		if(isset($_POST['submit'])){

			$this->load->library("form_validation");
			$validationRules = array(
					array(
						'field' => 'name',
		                'label' => 'Name',
		                'rules' => 'required|min_length[3]'
						),
					array(
						'field' => 'email',
		                'label' => 'Email',
		                'rules' => 'required|valid_email|is_unique[user.email]',
		                'errors' => array("is_unique" => "This email is already registered",
		                				  "required" => "The email must be provided"
		                				  ),
						),
					array(
						'field' => 'username',
		                'label' => 'Username',
		                'rules' => 'required|min_length[3]|is_unique[user.username]'
						),
				);
			$this->form_validation->set_rules($validationRules);

			if($this->form_validation->run() != FALSE){
				$newUser = array(
					"name" => $this->input->post("name"),
					"email" => $this->input->post("email"),
					"username" => $this->input->post("username"),
					"department" => $this->input->post("department"),
				);

				$this->M_user->insert($newUser);
				redirect(base_url());
			}else{
				$errors = validation_errors();
			}
		}

		$departmentList = $this->M_department->getAllDepartments();
		$data = array(
			"title" => "User registration",
			"departments" => $departmentList,
			"errors" => $errors,
		);
		$this->load->view("v_header", $data);
		$this->load->view("v_registration",$data);
		$this->load->view("v_footer");
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */