<?php

class User extends CI_Controller {
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
		$this->load->view('templates/header',$data);
		$this->load->view('admin',$data);
		$this->load->view('templates/footer');
	}
}