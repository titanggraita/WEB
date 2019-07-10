
<?php 
	class Faq_model extends CI_Model{
		
		public function get_faq_keyword($keyword){
			$this->db->select('*');
			$this->db->from('faq');
			$this->db->like('pertanyaan',$keyword);
			$this->db->or_like('jawaban',$keyword);
			$this->db->or_like('keyword',$keyword);
			return $this->db->get()->result();
		}
    }
?>