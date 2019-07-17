<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('User_model');
		$this->load->model('Faq_model');
		$this->load->model('Kategori_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['title'] = "FAQ - BATAN";
		$data['kategori'] = $this->Kategori_model->getAllKategori();
		$this->load->view('templates/header', $data);
		$this->load->view('halaman_utama', $data);
		$this->load->view('templates/footer');
	}
	public function public()
	{
		$data['title'] = "FAQ - BATAN";
		$data['kategori'] = $this->Kategori_model->getAllKategori();
		$this->load->view('templates/header', $data);
		$this->load->view('public', $data);
		$this->load->view('templates/footer');
	}
	public function about()
	{
		$data['title'] = "FAQ - BATAN - About";
		$this->load->view('templates/header', $data);
		$this->load->view('About', $data);
		$this->load->view('templates/footer');
	}
	public function policies()
	{
		$data['title'] = "FAQ - BATAN - Policies";
		$this->load->view('templates/header', $data);
		$this->load->view('Policies', $data);
		$this->load->view('templates/footer');
	}
	public function contact()
	{
		$data['title'] = "FAQ - BATAN - Contact Us";
		$this->load->view('templates/header', $data);
		$this->load->view('Contact', $data);
		$this->load->view('templates/footer');
	}
	public function forgot_password()
	{
		$data['title'] = "FAQ - BATAN - Forgot Password";
		$this->load->view('templates/header', $data);
		$this->load->view('Forgot_password', $data);
		$this->load->view('templates/footer');
	}
	
	public function Open_question()
	{
		// if (condition) {
		// 	# code...
		// } else {
		// 	# code...
		// }
		
		$this->form_validation->set_rules('username','username', 'required');
        $this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = "FAQ - BATAN - Open question";
            $this->load->view('templates/header',$data);
            $this->load->view('Open_question');
            $this->load->view('templates/footer');
        }else{
            $open = [
                "username" => $this->input->post('username', true),
                "pertanyaan" => $this->input->post('pertanyaan', true),
            ];
            $this->session->set_userdata('open', $open);
            $this->Faq_model->tambahQuestion();
            redirect('user/index');
        }
	}	
}
