<?php
class User_model extends CI_Model
{
    public function login_check()
    {
        $data = [
            "Username" => $this->input->post('Username', true),
            "Password" => $this->input->post('Password', true)
        ];
        $this->db->where('Username', $data["Username"]);
        $this->db->where('Password', $data["Password"]);
        $que = $this->db->get("user");
        return $que->row_array();
    }

    public function getAllUser()
    {
        $que = $this->db->get('User');
        return $que->result_array();
    }
    public function getAllKontributor()
    {
        $que = $this->db->get('kompetensi_kontributor');
        return $que->result_array();
    }

    public function tambahUser()
    {
        $data = [
            "Username" => $this->input->post('Username', true),
            "Password" => $this->input->post('Password', true),
            "Email" => $this->input->post('Email', true),
            "Nama" => $this->input->post('Nama', true),
            "Institution" => $this->input->post('Institution', true),
            "Job" => $this->input->post('Job', true),
            "Province" => $this->input->post('Province', true),
            "ID_level" => 3,
            "Aktivasi" => 'Y'
        ];
        $this->db->insert('user', $data);
    }
    public function tambahContributor()
    {
        $data = [
            "Username" => $this->input->post('Username', true),
            "Password" => $this->input->post('Password', true),
            "Email" => $this->input->post('Email', true),
            "Nama" => $this->input->post('Nama', true),
            "Institution" => $this->input->post('Institution', true),
            "Job" => $this->input->post('Job', true),
            "Province" => $this->input->post('Province', true),
            "State" => $this->input->post('State', true),
            "ID_level" => 2,
            "Aktivasi" => 'Y'
        ];
        $this->db->insert('user', $data);
    }
    public function getUserById($id)
    {

        return $this->db->get_where('user', ['ID_user' => $id])->row();
    }

    public function hapusDataUser($ID_user)
    {

        return $this->db->get($ID_user);
    }

    public function ubahDataUser($ID_user)
    {
        $data = [
            "Username" => $this->input->post('Username', true),
            "Email" => $this->input->post('Esername', true),
            "Password" => $this->input->post('password', true),
            "Nama" => $this->input->post('Nama', true),
            "Institution" => $this->input->post('Institution', true),
            "Job" => $this->input->post('Job', true),
            "Province" => $this->input->post('Province', true),
            "State" => $this->input->post('State', true)
        ];

        $this->db->where('ID_user', $ID_user);
        $this->db->update('user', $data);
    }
}
