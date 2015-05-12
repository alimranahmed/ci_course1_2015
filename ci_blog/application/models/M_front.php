<?php
class M_front extends CI_Model{
	
	public function getPost(){
		$this->db->select();
		$this->db->from("posts");
		$this->db->order_by('created_at', 'DESC');
		return $this->db->get()->result();
	}
	
}