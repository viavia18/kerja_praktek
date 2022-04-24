<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_activity');
        $this->load->library('form_validation');
        // $this->session->set_flashdata('not-login', 'Gagal!');
        // if (!$this->session->userdata('email')) {
        //     redirect('welcome');
    }
	
	public function detailEvent()
    {
		$id = $this->uri->segment(3);
		$data['activity'] = $this->m_activity->ambil_activity_by_id($id)->result();
		
		if ($this->session->userdata('lang')=='id') {
			$this->load->view('kegiatan/detailEvent', $data);
		} else {
			$this->load->view('kegiatan/endetailEvent', $data);
		}
		
        
    }
	

}
