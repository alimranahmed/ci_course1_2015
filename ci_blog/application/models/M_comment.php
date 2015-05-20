<?php
/**
* 
*/
class M_comment extends CI_Model
{
	
	public function getAllComment($id){
		$this->db->select();
		$this->db->from(" comments");
		$this->db->where("owner",$id);
		return $this->db->get()->result();
	}


	public function delete($id){
		$this->db->where("id",$id);
		$this->db->delete('comments');	
		
	}
	public function edit($data, $id){
		$this->db->where("id", $id);
		$this->db->update("comments", $data);

	}
	public function addComment($newComment){
		$this->db->select();
		$this->db->insert("comments",$newComment);
}