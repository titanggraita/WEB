<?php

class C_Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('User_model');
		$this->load->model('Kategori_model');
		$this->load->model('Faq_model');
		$this->load->library('form_validation');
        $this->load->library('session');
		if ($this->session->userdata("user")["ID_level"] != 1) {
			redirect('user');
		}
    }
    public function index()
	{
		$data['title'] = "FAQ - ADMIN";
		$data['kategori'] = $this->Kategori_model->getAllKategori();
		$data['public'] = $this->User_model->getAllUser();
		$data['kontributor'] = $this->User_model->getAllKontributor();
		$this->load->view('templates/header',$data);
		$this->load->view('admin',$data);
		$this->load->view('templates/footer');
	}
	public function lihat_category()
	{
		$data['title'] = "FAQ - ADMIN";
		$data['kategori'] = $this->Kategori_model->getAllKategori();
		$this->load->view('templates/header',$data);
		$this->load->view('admin_category',$data);
		$this->load->view('templates/footer');
	}
	public function lihat_user()
	{
		$data['title'] = "FAQ - ADMIN";
		$data['public'] = $this->User_model->getAllUser();
		$this->load->view('templates/header',$data);
		$this->load->view('admin_user',$data);
		$this->load->view('templates/footer');
	}
	public function lihat_kontributor()
	{
		$data['title'] = "FAQ - ADMIN";
		$data['kontributor'] = $this->User_model->getAllKontributor();
		$this->load->view('templates/header',$data);
		$this->load->view('admin_kontributor',$data);
		$this->load->view('templates/footer');
	}
	public function lihat_question()
	{
		$data['title'] = "FAQ - ADMIN";
		$data['question'] = $this->Faq_model->getAllQuestionFromOP();
		$data['faq'] = $this->Faq_model->getAllQuestionFromFAQ();
		$this->load->view('templates/header',$data);
		$this->load->view('admin_question',$data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
			$this->form_validation->set_rules('Username', 'Username', 'required');
			$this->form_validation->set_rules('Password', 'Password', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('Nama', 'Nama', 'required');
			$this->form_validation->set_rules('Institution', 'Institution', 'required');
			$this->form_validation->set_rules('Job', 'Job', 'required');
			
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FAQ - BATAN - Register";
            $data['provinsi'] = $this->User_model->getAllProvinsi();
            $data['negara'] = $this->User_model->getAllNegara();
            $this->load->view('templates/header', $data);
            $this->load->view('tambah_user');
            $this->load->view('templates/footer');
        } else {
            $login = [
                "Username" => $this->input->post('Username', true),
                "Password" => $this->input->post('Password', true),
                "Email" => $this->input->post('Email', true),
                "Nama" => $this->input->post('Nama', true),
                "Institution" => $this->input->post('Institution', true),
                "Job" => $this->input->post('Job', true),
                "Province" => $this->input->post('Province', true),
                "State" => $this->input->post('State', true),
                "ID_level" => 2,
            ];
            $this->User_model->tambahContributor();
            $this->session->set_userdata('C_Admin', $login);
            redirect('C_Admin/lihat_user');
        }
	}
		public function ubah($id)
		{
			$data['title'] = 'Form Ubah Data';
			
			if(!isset($id)) redirect('C_Admin/index');
			$this->form_validation->set_rules('Username','Username', 'required');
        	$this->form_validation->set_rules('Password','Password', 'required');
        	$this->form_validation->set_rules('Email','Email', 'required');
        	$this->form_validation->set_rules('Nama', 'Nama', 'required');
        	$this->form_validation->set_rules('Institution', 'Institution','required');
			$this->form_validation->set_rules('Job', 'Job', 'required');
			$this->form_validation->set_rules('State', 'State', 'required');
        	$this->form_validation->set_rules('Province', 'Province', 'required');

			$data['provinsi'] = $this->User_model->getAllProvinsi();
           	$data['negara'] = $this->User_model->getAllNegara();
			$data['user'] = $this->User_model->getUserById($id);
			if ($this->form_validation->run()){
				$this->User_model->ubahDataUser($id);
				redirect('C_Admin/lihat_user');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('ubah_user',$data);
				$this->load->view('templates/footer');
			}
		}

		public function hapus($id)
		{
			$this->db->delete('user', array('ID_user' => $id));
			redirect('C_Admin/lihat_user');	
		}

		public function AnswerOP($id)
		{
			$data['OP'] = 'Form Answer Question';
			
			if(!isset($id)) redirect('C_Admin/lihat_question');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
        	$this->form_validation->set_rules('jawaban','jawaban', 'required');

			$data['OP'] = $this->Faq_model->getQuestionById($id);
			if ($this->form_validation->run()){
				$this->Faq_model->AnswerOpenQuestion($id);
				redirect('C_admin/lihat_question');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('answer_question',$data);
				$this->load->view('templates/footer');
			}
		}
		public function hapus_Question($ID_question)
		{
			$this->db->delete('open_question', array('ID_question' => $ID_question));
			redirect('C_Admin/lihat_question');
		}
		public function hapus_Faq($ID_faq)
		{
			$this->db->delete('faq', array('ID_faq' => $ID_faq));
			redirect('C_Admin/lihat_question');
		}
		public function ubahFaq($id)
		{
			$data['title'] = 'Form Ubah Data';
			
			if(!isset($id)) redirect('C_Admin/index');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
			$this->form_validation->set_rules('jawaban','jawaban', 'required');
			$this->form_validation->set_rules('kategori','kategori', 'required');
        	$this->form_validation->set_rules('keyword','keyword', 'required');
        	$this->form_validation->set_rules('author', 'author', 'required');
        	$this->form_validation->set_rules('status', 'status','required');

			$data['kategori'] = $this->Kategori_model->getAllKategori();
			$data['status'] = $this->Faq_model->getAllStatus();
			$data['faq'] = $this->Faq_model->getFaqById($id);
			if ($this->form_validation->run()){
				$this->Faq_model->ubahDataFaq($id);
				redirect('C_Admin/lihat_question');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('ubah_faq',$data);
				$this->load->view('templates/footer');
			}
		}
		public function tambah_Faq()
		{
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
			$this->form_validation->set_rules('jawaban','jawaban', 'required');
        	$this->form_validation->set_rules('keyword','keyword', 'required');
        	$this->form_validation->set_rules('author', 'author', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Form Tambah Data";
				$data['kategori'] = $this->Kategori_model->getAllKategori();
				$data['status'] = $this->Faq_model->getAllStatus();
				$this->load->view('templates/header', $data);
				$this->load->view('tambah_faq');
				$this->load->view('templates/footer');
			} else {
				$login = [
					"pertanyaan" => $this->input->post('pertanyaan', true),
					"jawaban" => $this->input->post('jawaban', true),
					"kategori" => $this->input->post('kategori', true),
					"keyword" => $this->input->post('keyword', true),
					"author" => $this->input->post('author', true),
					"status" => $this->input->post('status', true),
				];
				$this->Faq_model->tambahFaq();
				$this->session->set_userdata('C_Admin', $login);
				redirect('C_Admin/lihat_question');
			}
		}
		public function publishFaq($id)
		{
			$data['title'] = 'Form Publish';
			
			if(!isset($id)) redirect('C_Admin/index');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
        	$this->form_validation->set_rules('jawaban','jawaban', 'required');
        	$this->form_validation->set_rules('keyword','keyword', 'required');
        	$this->form_validation->set_rules('author', 'author', 'required');
        	
			$data['publish'] = $this->Faq_model->getOPById($id);
			$data['kategori'] = $this->Kategori_model->getAllkategori();
			$data['status'] = $this->Faq_model->getAllStatus();
			if ($this->form_validation->run()){
				$this->Faq_model->publish($id);
				redirect('C_Admin/lihat_question');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('publish_faq',$data);
				$this->load->view('templates/footer');
			}
		}
		public function assignToContributor($id)
		{
			$data['title'] = 'Form Assigned';
			
			if(!isset($id)) redirect('C_Admin/index');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');

			$data['assign'] = $this->Faq_model->getOPById($id);
			if ($this->form_validation->run()){
				$this->Faq_model->assignQuestionToContributor($id);
				redirect('C_Admin/lihat_question');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('V_assigned',$data);
				$this->load->view('templates/footer');
			}
		}
}
?>
