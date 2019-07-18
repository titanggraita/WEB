<?php
class Stopword_model extends CI_Model
{
    public function checkStopword()
    {
        $pertanyaan = $this->input->post('pertanyaan', true);
        $que = $this->db->query("SELECT daftar_kata FROM stopword WHERE '$pertanyaan' LIKE CONCAT('%', daftar_kata, '%')");
        return $que->num_rows();
    }
}
