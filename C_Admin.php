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
		$this->load->view('admin_public',$data);
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
}