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
}