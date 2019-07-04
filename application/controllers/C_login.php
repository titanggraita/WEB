<?php

class C_login extends CI_Controller {
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
        $data['title'] = "FAQ - BATAN - Login";
        $this->load->view('templates/header',$data);
        $this->load->view('Login');
        $this->load->view('templates/footer');
    }

	// public function log_in()
	// {
    //     $cek = $this->User_model->login_check();
    //     if ($cek>0) {
    //         $login = [
    //             "Username"=>$this->input->post("Username",true)
    //         ];
    //         $this->session->set_userdata("login", $login);
    //         redirect("user");
    //     } else {
    //         redirect("user");
    //     }
        
    // }
    
    public function register()
    {
        $this->form_validation->set_rules('Username','Username', 'required');
        $this->form_validation->set_rules('Password','Password', 'required');
        $this->form_validation->set_rules('Email','Email', 'required');
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('Institution', 'Institution','required');
        $this->form_validation->set_rules('Job', 'Job', 'required');
        $this->form_validation->set_rules('Province', 'Province', 'required');
        $this->form_validation->set_rules('State', 'State', 'required');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = "FAQ - BATAN - Register";
            $this->load->view('templates/header',$data);
            $this->load->view('Register');
            $this->load->view('templates/footer');
        }else{
            $login = [
                "Username" => $this->input->post('Username', true),
                "Password" => $this->input->post('Password', true)
            ];
            $this->session->set_userdata('login', $login);
            $this->User_model->tambahUser();
            redirect('user/Open_question');
        }
    }
}
