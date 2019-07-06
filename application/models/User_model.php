<?php
class User_model extends CI_Model
{
    public function login_check()
    {
        $data = [
            "Username" => $this->input->post('Username',true),
            "Password" => $this->input->post('Password', true)
        ];
        $this->db->where('Username', $data["Username"]);
        $this->db->where('Password', $data["Password"]);
        $que = $this->db->get("user");
        return $que->num_rows();
    }
    public function tambahUser(){
        $data = [
            "Username" => $this->input->post('Username', true),
            "Password" => $this->input->post('Password', true),
            "Email" => $this->input->post('Email', true),
            "Nama" => $this->input->post('Nama', true),
            "Institution" => $this->input->post('Institution', true),
            "Job" => $this->input->post('Job', true),
            "Province" => $this->input->post('Province', true),
            "State" => $this->input->post('State', true)
        ];
        return $this->db->insert('user', $data);
    }
    public function tambahQuestion(){
        $data = [
            "username" => $this->input->post('username', true),
            "pertanyaan" => $this->input->post('pertanyaan', true)
        ];
        return $this->db->insert('open_question', $data);
    }
}
