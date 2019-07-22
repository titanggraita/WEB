<?php

class C_kontributor extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('User_model');
		$this->load->model('Faq_model');
		$this->load->library('form_validation');
        $this->load->library('session');
		if ($this->session->userdata("user")["ID_level"] != 2) {
			redirect('user');
		}
    }
    public function index()
	{
		$data['title'] = "FAQ - KONTRIBUTOR";
		$this->load->view('templates/header',$data);
		$this->load->view('halaman_kontributor',$data);
		$this->load->view('templates/footer');
	}
	public function lihat_questionKontributor()
	{
		$data['title'] = "FAQ - KONTRIBUTOR";
		$data['question_kontributor'] = $this->Faq_model->getAllQuestionFromQuestionAssigned();
		$this->load->view('templates/header',$data);
		$this->load->view('question_kontributor',$data);
		$this->load->view('templates/footer');
	}
	public function hapus($id)
	{
		$this->db->delete('question_assigned_to_contributor', array('ID_assigned' => $id));
		redirect('C_kontributor/lihat_questionKontributor');	
	}
	public function tambah()
		{
			$data['title'] = "Form Tambah Data";

			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
        	$this->form_validation->set_rules('jawaban','jawaban', 'required');

			if ($this->form_validation->run()){
				$this->Faq_model->tambahFaqKontributor();
				redirect('C_kontributor/lihat_questionKontributor');
			}
			$this->load->view('templates/header',$data);
			$this->load->view('tambah_faq_kontributor');
			$this->load->view('templates/footer');
		}
		public function ubah($id)
		{
			$data['title'] = 'Form Ubah Data';
			
			if(!isset($id)) redirect('C_kontributor/index');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
        	$this->form_validation->set_rules('jawaban','jawaban', 'required');

			$data['fk'] = $this->Faq_model->getQuestionKontributorById($id);
			if ($this->form_validation->run()){
				$this->Faq_model->ubahDataFaqKontributor($id);
				redirect('C_kontributor/lihat_questionKontributor');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('ubah_faq_kontributor',$data);
				$this->load->view('templates/footer');
			}
		}
		public function Answer_Kontributor($id)
		{
			$data['title'] = 'Form Answer Question';
			
			if(!isset($id)) redirect('C_kontributor/lihat_questionKontributor');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
        	$this->form_validation->set_rules('jawaban','jawaban', 'required');

			$data['AK'] = $this->Faq_model->getQuestionKontributorById($id);
			if ($this->form_validation->run()){
				$this->Faq_model->AnswerQuestionKontributor($id);
				redirect('C_kontributor/lihat_questionKontributor');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('jawab_faq_kontributor',$data);
				$this->load->view('templates/footer');
			}
		}
		public function assignToAdmin($id)
		{
			$data['title'] = 'Form Assigned';
			
			if(!isset($id)) redirect('C_Admin/index');
			$this->form_validation->set_rules('pertanyaan','pertanyaan', 'required');
			$this->form_validation->set_rules('jawaban','jawaban', 'required');

			$data['assigntoAdmin'] = $this->Faq_model->getQuestionKontributorById($id);
			if ($this->form_validation->run()){
				$this->Faq_model->assignQuestionToAdmin($id);
				redirect('C_kontributor/lihat_questionKontributor');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('V_assignedtoadmin',$data);
				$this->load->view('templates/footer');
			}
		}
}
