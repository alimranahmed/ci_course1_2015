<?php
class M_user extends CI_Model{	
	
	public function checkCredintial($username, $password){
		$this->db->select();
		$this->db->from("users");
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		return $this->db->get()->row();
	}
	public function insert($data){
		$this->db->insert('users',$data);
	}
	public function getAllUsers($id){
		$this->db->select();
		$this->db->from("users");
		$this->db->where("id",$id);
		return $this->db->get()->result();
	}
	public function edit($data,$id){
		$this->db->where("id", $id);
		$this->db->update("users", $data);

	}
}	