<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
		$this->load->view('templates/navbar');
		$this->load->model('m_artikel');
		$this->load->model('m_visitor');
        $this->load->library('form_validation');
		$this->load->helper(array('cookie','url'));
        // $this->session->set_flashdata('not-login', 'Gagal!');
        // if (!$this->session->userdata('email')) {
        //     redirect('welcome');
    }
	
    public function index()
    {
		$data['activity'] = $this->m_artikel->ambil_artikel_tiga()->result();
			$this->load->view('index', $data);
		$this->load->view('templates/footer');
    }
	public function beranda(){
		
       $this->load->view('index');
       $this->load->view('templates/footer');
	}
	public function profil(){
		$this->load->view('about');
		$this->load->view('templates/footer');
	}
	public function program(){
		$this->load->view('class');
		$this->load->view('templates/footer');
	}
	public function galeri(){
		
		$this->load->view('gallery');
		$this->load->view('templates/footer');
	}
	public function event(){
		$this->load->database();
		$jumlah_data = $this->m_artikel->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'welcome/event/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;
		$from = $this->uri->segment(3);
		
		$config['use_page_numbers'] = FALSE;
		$config['display_pages'] = TRUE;
		$config['first_link'] = 'First';
		
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</a></span></li>';
		
		$config['last_link'] = 'Last';
		
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</a></span></li>';
		
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</a></span></li>';
		
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</a></span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</a></span></li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only"></span></span></li>';
		
		$this->pagination->initialize($config);
		$data['activity'] = $this->m_artikel->data($config['per_page'],$from);
		
		$this->load->view('artikel');
		$this->load->view('templates/footer');
	}
	public function kontak(){
		$this->load->view('contact');
		$this->load->view('templates/footer');
	}
	public function ppdb(){
		$this->load->view('testimonial');
		//$this->load->view('templates/footer');
	}
	public function id()
    {
		$this->session->set_userdata('lang', 'id');
		$this->index();
	}
	
	public function en()
    {
		$this->session->set_userdata('lang', 'en');
		$this->index();
	}
	
    public function profile()
    {
		if ($this->session->userdata('lang')=='id') {
			$this->load->view('template/nav');
			$this->load->view('profile');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/ennav');
			$this->load->view('enprofile');
			$this->load->view('template/footer');
		}
    }
	
	public function team()
    {
        $this->load->view('template/nav');
        $this->load->view('team');
        $this->load->view('template/footer');
    }

   	public function aboutus()
    {
		echo "koko";
	}
}
