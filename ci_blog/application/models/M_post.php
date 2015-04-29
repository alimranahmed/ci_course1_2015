<?php
/**
* 
*/
class M_post extends CI_Model
{
	public function create($data){
		$this->db->insert("posts",$data);
		return $this->db->insert_id();
	}
	public function getAllPost(){
		$this->db->select();
		$this->db->from("posts");
		return $this->db->get()->result();
	}
	public function deletePost($id){
		$this->db->where("id",$id);
		$this->db->delete('posts');	
		
	}
	public function editPost($data, $id){
		$this->db->where("id", $id);
		$this->db->update("posts", $data);

	}
}