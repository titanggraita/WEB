<?php

class C_Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('User_model');
		$this->load->model('Kategori_model');
		$this->load->library('form_validation');
        $this->load->library('session');

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
		$data['title'] = "FAQ - KONTRIBUTOR";
		$data['kontributor'] = $this->User_model->getAllKontributor();
		$this->load->view('templates/header',$data);
		$this->load->view('admin_kontributor',$data);
		$this->load->view('templates/footer');
	}
	public function tambah()
		{
			$data['title'] = "Form Tambah Data User";

			$this->form_validation->set_rules('Username','Username', 'required');
        	$this->form_validation->set_rules('Password','Password', 'required');
        	$this->form_validation->set_rules('Email','Email', 'required');
        	$this->form_validation->set_rules('Nama', 'Nama', 'required');
        	$this->form_validation->set_rules('Institution', 'Institution','required');
        	$this->form_validation->set_rules('Job', 'Job', 'required');
        	$this->form_validation->set_rules('Province', 'Province', 'required');
        	$this->form_validation->set_rules('State', 'State', 'required');

			if ($this->form_validation->run()){
				$this->User_model->tambahUser();
				redirect('C_Admin/lihat_user');
			}
			$this->load->view('templates/header',$data);
			$this->load->view('tambah_user');
			$this->load->view('templates/footer');
		}

		public function hapus($id)
		{
			$this->db->delete('user', array('ID_user' => $id));
			redirect('C_Admin/lihat_user');	
		}

		public function ubah($id)
		{
			$data['title'] = 'Form Ubah Data User';
			
			if(!isset($id)) redirect('C_Admin/lihat_user');
			$this->form_validation->set_rules('Username','Username', 'required');
        	$this->form_validation->set_rules('Password','Password', 'required');
        	$this->form_validation->set_rules('Email','Email', 'required');
        	$this->form_validation->set_rules('Nama', 'Nama', 'required');
        	$this->form_validation->set_rules('Institution', 'Institution','required');
        	$this->form_validation->set_rules('Job', 'Job', 'required');
        	$this->form_validation->set_rules('Province', 'Province', 'required');
        	$this->form_validation->set_rules('State', 'State', 'required');

			$data['title'] = $this->User_model->getUserById($id);
			if ($this->form_validation->run()){
				$this->User_model->ubahDataUser($id);
				redirect('C_admin/lihat_user');
			}else{
				$this->load->view('templates/header',$data);
				$this->load->view('ubah_user',$data);
				$this->load->view('templates/footer');
			}
		}
}