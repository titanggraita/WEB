<?php

class C_login extends CI_Controller
{
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
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "FAQ - BATAN - Login";
            $this->load->view('templates/header', $data);
            $this->load->view('Login');
            $this->load->view('templates/footer');
        } else {
            $cek = $this->User_model->login_check();
            if ($cek) {
                $this->session->set_userdata('user', $cek);
                if ($cek['ID_level'] == '1') { //Akses admin
                    redirect('C_Admin');
                } else if ($cek['ID_level'] == '2') { //akses kontributor
                    redirect('C_kontributor');
                } else { //akses public
                    redirect('user');
                }
            } else {
                redirect('user');
            }
        }
    }

    public function register()
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
            $this->load->view('Register');
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
                "ID_level" => 3,
            ];
            $this->User_model->tambahUser();
            $this->session->set_userdata('user', $login);
            redirect('user');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata("user");
        redirect("user");
    }
}
