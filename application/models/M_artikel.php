<?php

 
class M_artikel extends CI_Model{
	function ambil_artikel_by_id($id){
		return $this->db->get_where('artikel', array('id' => $id));
	}
	
	function ambil_artikel_all(){
		$this->db->order_by('timestamp', 'desc');
		return $this->db->get('artikel');;
	}
	
	function ambil_artikel_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->limit(3);
		return $this->db->get('artikel');;
	}
	
	function data($number,$offset){
		$this->db->order_by('tanggal', 'desc');
		return $query = $this->db->get('artikel',$number,$offset)->result();		
	}
	
	function jumlah_data(){
		return $this->db->get('artikel')->num_rows();
	}
}