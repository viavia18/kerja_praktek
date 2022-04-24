<?php

 
class M_case extends CI_Model{
	function ambil_case_by_id($id){
		return $this->db->get_where('cases', array('id' => $id));
	}
	
	function ambil_case_title($title){
		$this->db->like('title_ind', $title);
		$this->db->or_like('title_en', $title);
		return $this->db->get('cases');
	}
	
	function ambil_case_all(){
		return $this->db->get_where('cases', array('status' => '1'));
	}
}