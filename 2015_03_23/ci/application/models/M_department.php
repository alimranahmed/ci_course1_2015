<?php
class M_department extends CI_Model{
	public function getAllDepartments(){
		$this->db->select();
		$this->db->from("department");
		$query = $this->db->get();
		return $query->result();
	}
}