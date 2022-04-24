<?php

 
class M_visitor extends CI_Model{
	function add_visitors($case, $country_code){
		$query = $this->db->query('SELECT * FROM visitors where id_case='.$case);

		if($query->num_rows()>0){
			
			$row = $query->row(1);
			$count = $row->$country_code;
			if($count!=null){
				$new_count = (int)$count + 1;
			} else {
				$new_count = 1;
			}
			
			$this->db->set($country_code, $new_count);
			
			$this->db->where('id_case', $case);
			$this->db->update('visitors');
		} else {
			
			$data = array(
				'id_case' => $case,
				$country_code => 1
			);
			$this->db->insert('visitors',$data);
		}
	}
}