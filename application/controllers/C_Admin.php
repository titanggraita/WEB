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
			$data['title'] = "Form Tambah Data";

			$this->form_validation->set_rules('Username','Username', 'required');
        	$this->form_validation->set_rules('Password','Password', 'required');
        	$this->form_validation->set_rules('Email','Email', 'required');
        	$this->form_validation->set_rules('Nama', 'Nama', 'required');
        	$this->form_validation->set_rules('Institution', 'Institution','required');
        	$this->form_validation->set_rules('Job', 'Job', 'required');
        	$this->form_validation->set_rules('Province', 'Province', 'required');
        	$this->form_validation->set_rules('State', 'State', 'required');

			$data['provinsi'] = $this->User_model->getAllProvinsi();
           	$data['negara'] = $this->User_model->getAllNegara();
			if ($this->form_validation->run()){
				$this->User_model->tambahContributor();
				redirect('C_Admin/lihat_user');
			}
			$this->load->view('templates/header',$data);
			$this->load->view('tambah_user');
			$this->load->view('templates/footer');
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
        	$this->form_validation->set_rules('Province', 'Province', 'required');
        	$this->form_validation->set_rules('State', 'State', 'required');

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
        	$this->form_validation->set_rules('keyword','keyword', 'required');
        	$this->form_validation->set_rules('author', 'author', 'required');
        	$this->form_validation->set_rules('status', 'status','required');

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
			$data['title'] = "Form Tambah Data";

			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
        	$this->form_validation->set_rules('jawaban','jawaban', 'required');
        	$this->form_validation->set_rules('keyword','keyword', 'required');
        	$this->form_validation->set_rules('author', 'author', 'required');
        	$this->form_validation->set_rules('status', 'status','required');

			if ($this->form_validation->run()){
				$this->Faq_model->tambahFaq();
				redirect('C_Admin/lihat_question');
			}
			$this->load->view('templates/header',$data);
			$this->load->view('tambah_faq');
			$this->load->view('templates/footer');
		}
		public function publishFaq($id)
		{
			$data['title'] = 'Form Publish';
			
			if(!isset($id)) redirect('C_Admin/index');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
        	$this->form_validation->set_rules('jawaban','jawaban', 'required');
        	$this->form_validation->set_rules('keyword','keyword', 'required');
        	$this->form_validation->set_rules('author', 'author', 'required');
        	$this->form_validation->set_rules('status', 'status','required');

			$data['publish'] = $this->Faq_model->getOPById($id);
			if ($this->form_validation->run()){
				$this->Faq_model->publish($id);
				redirect('C_Admin/lihat_question');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('publish_faq',$data);
				$this->load->view('templates/footer');
			}
		}
		// public function assignToContributor($id)
		// {
		// 	$data['title'] = 'Form Assigned';
			
		// 	if(!isset($id)) redirect('C_Admin/index');
		// 	$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
		// 	$this->form_validation->set_rules('user','user', 'required');
        // 	$this->form_validation->set_rules('kompetensi','kompetensi', 'required');

		// 	$data['assign'] = $this->Faq_model->getOPById($id);
		// 	if ($this->form_validation->run()){
		// 		$this->Faq_model->assignContributor($id);
		// 		redirect('C_Admin/lihat_question');
		// 	}else{
		// 		$this->load->view('templates/header',$data);
		// 		$this->load->view('V_assigned',$data);
		// 		$this->load->view('templates/footer');
		// 	}
		// }
}
