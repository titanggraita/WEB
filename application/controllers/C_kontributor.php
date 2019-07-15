<?php

class C_kontributor extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('User_model');
		$this->load->library('form_validation');
        $this->load->library('session');

    }
    public function index()
	{
		$data['title'] = "FAQ - KONTRIBUTOR";
		$this->load->view('templates/header',$data);
		$this->load->view('halaman_kontributor',$data);
		$this->load->view('templates/footer');
    }
}
?>