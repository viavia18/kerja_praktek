<?php

 
class M_question extends CI_Model{
	function ambil_question_by_id($id){
		return $this->db->get_where('questions', array('id' => $id));
	}
	
	function ambil_question_by_id_case($id_case){
		return $this->db->get_where('questions', array('id_case' => $id_case));
	}
	
	function ambil_question_all(){
		return $this->db->get('questions');
	}
}