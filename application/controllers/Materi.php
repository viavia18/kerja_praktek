<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_case');
		$this->load->model('m_question');
		$this->load->model('m_answer');
		$this->load->model('m_review');
		$this->load->model('m_visitor');
        $this->load->library('form_validation');
		$this->load->helper(array('cookie','url'));
        // $this->session->set_flashdata('not-login', 'Gagal!');
        // if (!$this->session->userdata('email')) {
        //     redirect('welcome');
    }

    public function index()
    {
		$this->load->view('materi/index');
		$this->load->view('template/footer');
    }
	
	public function elearning()
    {
		$search = $this->input->get('search');
		if($search == ''){
			$data['cases'] = $this->m_case->ambil_case_all()->result();
		} else {
			$data['cases'] = $this->m_case->ambil_case_title($search)->result();
		}
		
		if ($this->session->userdata('lang')=='id') {
			$this->load->view('materi/elearning', $data);
		} else {
			$this->load->view('materi/enelearning', $data);
		}
        
    }
	public function case()
    {
		$data = array('id_case' => $this->input->get('id_case'));
		$data['case'] = $this->m_case->ambil_case_by_id($data['id_case'])->result();
		$data['questions'] = $this->m_question->ambil_question_by_id_case($data['id_case'])->result();
		
		$ip = $this->input->ip_address();
		$page_name = 'visit_case_'.$data['id_case'];
		
		$case = $data['id_case'];
		
		if (get_cookie($page_name)!=$ip) {	
			set_cookie($page_name, $ip, '21600');
			$location = file_get_contents('http://ip-api.com/json/'.$ip);
			$ip_data = json_decode($location);
    
			if($ip_data->status == 'success') {
				$country_code = $ip_data->countryCode;
			} else {
				$country_code = "OTHER";
			}
			
			$this->m_visitor->add_visitors($case, $country_code);
		}
		
		if ($this->session->userdata('lang')=='id') {
			$this->load->view('materi/case', $data);
		} else {
			$this->load->view('materi/encase', $data);
		}
    }
	
	public function question()
    {
		$data = array('id_question' => $this->input->get('id_question'), 'id_case' => $this->input->get('id_case'));
		$data['case'] = $this->m_case->ambil_case_by_id($data['id_case'])->result();
		$data['question'] = $this->m_question->ambil_question_by_id($data['id_question'])->result();
		$data['answers'] = $this->m_answer->ambil_answer_by_id_question($data['id_question'])->result();
		
		if ($this->session->userdata('lang')=='id') {
			$this->load->view('materi/question', $data);
		} else {
			$this->load->view('materi/enquestion', $data);
		}
    }
	
	public function answer()
    {
		$data = array('id_question' => $this->input->get('id_question'), 'id_case' => $this->input->get('id_case'), 'id_answer' => $this->input->get('id_answer'));
		$data['case'] = $this->m_case->ambil_case_by_id($data['id_case'])->result();
		$data['question'] = $this->m_question->ambil_question_by_id($data['id_question'])->result();
		$data['answer'] = $this->m_answer->ambil_answer_by_id($data['id_answer'])->result();
		
		if ($this->session->userdata('lang')=='id') {
			$this->load->view('materi/answer', $data);
		} else {
			$this->load->view('materi/enanswer', $data);
		}
    }
	
	public function review()
    {
		$data = array('id_case' => $this->input->get('id_case'));
		$data['case'] = $this->m_case->ambil_case_by_id($data['id_case'])->result();
		$data['review'] = $this->m_review->ambil_review_by_case($data['id_case'])->result();
		
		if ($this->session->userdata('lang')=='id') {
			$this->load->view('materi/review', $data);
		} else {
			$this->load->view('materi/enreview', $data);
		}
    }
	
	public function video()
    {
        $data['materi'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('materi/video');
    }
	

    public function materi()
    {
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('user/materi');
        $this->load->view('template/footer');

    }

    public function registration()
    {
        $this->load->view('user/registration');
        $this->load->view('template/footer');
    }

    public function registration_act()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom username.',
            'min_length' => 'Nama terlalu pendek.',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[siswa.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[retype_password]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('retype_password', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak sama!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/nav');
            $this->load->view('user/registration');
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'date_created' => time(),
            ];

            //siapkan token

            // $token = base64_encode(random_bytes(32));
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time(),
            // ];

            $this->db->insert('siswa', $data);
            // $this->db->insert('token', $user_token);

            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('welcome'));
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'ini email disini',
            'smtp_pass' => 'Isi Password gmail disini',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->email->initialize($config);

        $data = array(
            'name' => 'syauqi',
            'link' => ' ' . base_url() . 'welcome/verify?email=' . $this->input->post('email') . '& token' . urlencode($token) . '"',
        );

        $this->email->from('LearnifyEducations@gmail.com', 'Learnify');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $link =
            $this->email->subject('Verifikasi Akun');
            $body = $this->load->view('template/email-template.php', $data, true);
            $this->email->message($body);
        } else {
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

}
