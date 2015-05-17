<?php
class M_front extends CI_Model{
	
	public function getPost(){
		$this->db->select();
		$this->db->from("posts");
		$this->db->order_by('created_at', 'DESC');
		return $this->db->get()->result();
	}

	public function frontPost($id){

		$this->db->select();
		$this->db->from("posts");
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}
	public function getComment($id){

		$this->db->select();
		$this->db->from("comments");
		$this->db->where('post', $id);
		return $this->db->get()->result();
	}
	
}