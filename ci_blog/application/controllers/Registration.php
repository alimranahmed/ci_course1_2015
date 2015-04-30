<?php 
class Registration extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_user");
		
	}
	public function index (){
		$errors = null;
		$fileError=null;
		$fileName=null;
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
		                'rules' => 'required|valid_email|is_unique[users.email]',
		                'errors' => array("is_unique" => "This email is already registered",
		                				  "required" => "The email must be provided"
		                				  ),
						),
					array(
						'field' => 'username',
		                'label' => 'Username',
		                'rules' => 'required|min_length[3]|is_unique[users.username]',
		                'errors' => array(
		                				'is_unique' => 'This %s already exists.',
		                				'required' => 'You have not provided %s.'
		                			)
						),
					array(
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'required|trim|required',
					),
					array(
		                'field' => 'passconf',
		                'label' => 'Password Confirmation',
		                'rules' => 'trim|required|matches[password]',
			        ),	
			);
			

			$this->form_validation->set_rules($validationRules);
			
			
			if($this->form_validation->run() != FALSE){
				
				
				$newUser = array(
					"name" => $this->input->post("name"),
					"email" => $this->input->post("email"),
					"username" => $this->input->post("username"),
					"password" => md5($this->input->post("password")),
					
				);
				$this->M_user->insert($newUser);
				
			}else{

				
				$errors = validation_errors();
			}
		}
		if(!$errors){
			redirect(site_url('login'));
		}

			
		$data = array(
			"title" => "User registration",
			
			"errors" => $errors,
		);
		

		$this->load->view('v_login',$data);
	}
}