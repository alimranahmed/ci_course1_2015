<?php
class M_user extends CI_Model{

	public function getAllUsers(){
		$this->db->select("user.*, department.name as departmentName");
		$this->db->from("user");
		$this->db->join("department","user.department = department.id");
		$this->db->order_by("user.name","desc");
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

	public function checkCredintial($username, $password){
		$this->db->select();
		$this->db->from("user");
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		return $this->db->get()->row();
	}
}