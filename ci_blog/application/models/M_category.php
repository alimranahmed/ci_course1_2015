<?php
class M_category extends CI_Model{
	
	public function create($data){
		$this->db->insert("categories",$data);
		return $this->db->insert_id();
	}
	public function getAllCategories(){
		$this->db->select();
		$this->db->from('categories');
		return $this->db->get()->result();
	}
	public function deleteCategory($id){
		$this->db->where("id",$id);
		$this->db->delete('categories');	
		
	}
	public function editCategory($data, $id){
		$this->db->where("id", $id);
		$this->db->update("categories", $data);

	}
}