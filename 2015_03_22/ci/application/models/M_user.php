<?php
class M_user extends CI_Model{

	public function getAllUsers(){
		$this->db->select()->from("user");
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
}