<?php

 
class M_activity extends CI_Model{
	function ambil_activity_by_id($id){
		return $this->db->get_where('activities', array('id' => $id));
	}
	
	function ambil_activity_all(){
		$this->db->order_by('timestamp', 'desc');
		return $this->db->get('activities');;
	}
	
	function ambil_activity_tiga(){
		$this->db->order_by('timestamp', 'desc');
		$this->db->limit(3);
		return $this->db->get('activities');;
	}
	
	function data($number,$offset){
		$this->db->order_by('timestamp', 'desc');
		return $query = $this->db->get('activities',$number,$offset)->result();		
	}
	
	function jumlah_data(){
		return $this->db->get('activities')->num_rows();
	}
}