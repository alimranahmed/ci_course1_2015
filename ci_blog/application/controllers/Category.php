<?php
class Category extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model("M_category");
	}
	
	public function create(){
		$this->loginCheck();
		
			if(isset($_POST['add'])){
				$cat_name = $this->input->post("cat_name");
				
				$newCat = array(
					"name" => $cat_name,
					
				);
				$this->M_category->create($newCat);
				$this->session->set_flashdata("successMsg", "Category created successfully!");
			}
			
		redirect(site_url('category/view_category'));
	}
	
	public function view_category(){
		
		$this->loginCheck();
		
		$categoriesList = $this->M_category->getAllCategories();

		$data = array(
				"title" => "Home",
				"categories" => $categoriesList,
			);
			
		$this->load->view("backend/header");
		$this->load->view("backend/v_category", $data);
		$this->load->view("backend/footer");
		
	}
		
	public function edit($id){
		$this->loginCheck();
			$fileError = null;
			$fileName = null;
		    
		    echo $fileError;
				
				$cat_name = $this->input->post("cat_name");
				$data = array(
					"name" => $cat_name,
					
					);
				$this->M_category->editCategory($data, $id);
				
				redirect(site_url('category/view_category'));
		
		
		
	}
	public function delete($id){
		$this->loginCheck();
		
		$this->M_category->deleteCategory($id);
		
		redirect(site_url('category/view_category'));
		
	}
	public function loginCheck(){
		if(!$this->session->userdata("user_id")){
			$this->session->set_flashdata('errorMsg', 'Unauthorized access');
			redirect(site_url(Login));
		}
	}
}