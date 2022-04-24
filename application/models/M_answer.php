<?php

 
class M_answer extends CI_Model{
	function ambil_answer_by_id($id){
		return $this->db->get_where('answers', array('id' => $id));
	}
	
	function ambil_answer_by_id_question($id_question){
		return $this->db->get_where('answers', array('id_question' => $id_question));
	}
	
	function ambil_answer_all(){
		return $this->db->get('answers');
	}
	
	function count_answers(){
		return $this->db->count_all_results('answers');
	}
}