<?php
class M_user extends CI_Model{

	public function getAllUsers(){
		$this->db->select("user.*, department.name as departmentName");
		$this->db->from("user");
		$this->db->join("department","user.department = department.id");
		return $this->db->get()->result();
	}
	
	public function delete($id){
		$this->db->where("id",$id);
		$this->db->delete('user');
	}

	public function edit($data, $id){
		$this->db->where("id", $id);
		$this->db->update("user", $data);
	}

	public function insert($data){
		$this->db->insert("user",$data);
		//return $this->db->insert_id;
	}
}