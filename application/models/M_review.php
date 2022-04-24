<?php

 
class M_review extends CI_Model{
	function ambil_review_by_case($id_case){
		return $this->db->get_where('reviews', array('id' => $id_case));
	}
}