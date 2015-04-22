<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_user");
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

	public function insert(){
		$data = array(
			"name" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"username" => $this->input->post("username"),
			);

		$this->M_user->insert($data);
		redirect(base_url());
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */