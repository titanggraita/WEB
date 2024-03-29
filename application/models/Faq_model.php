
<?php
class Faq_model extends CI_Model
{

	public function get_faq_keyword($keyword)
	{
		$this->db->like('pertanyaan', $keyword);
		$this->db->or_like('jawaban', $keyword);
		$this->db->or_like('keyword', $keyword);
		$this->db->or_like('kategori', $keyword);
		return $this->db->get('faq')->result_array();;
	}
	public function getAllQuestionFromFAQ()
	{
		$que = $this->db->get('faq');
		return $que->result_array();
	}
	public function getAllStatus()
	{
		$que = $this->db->get('status');
		return $que->result_array();
	}
	public function get_faq_bykategori($id_kategori)
	{
		$que = $this->db->query("SELECT faq.* FROM faq JOIN kategori_faq ON faq.kategori = kategori_faq.Nama_kategori WHERE kategori_faq.ID_kategori = $id_kategori");
		return $que->result_array();
	}
	public function getAllQuestionFromQuestionAssigned()
	{
		$que = $this->db->get('question_assigned_to_contributor');
		return $que->result_array();
	}
	public function getAllQuestionFromOP()
	{
		$que = $this->db->get('open_question');
		return $que->result_array();
	}
	public function getFaqById($id)
	{

		return $this->db->get_where('faq', ['ID_faq' => $id])->row();
	}
	public function getQuestionKontributorById($id)
	{

		return $this->db->get_where('question_assigned_to_contributor', ['ID_assigned' => $id])->row();
	}
	public function getOPById($id)
	{

		return $this->db->get_where('open_question', ['ID_question' => $id])->row();
	}
	public function AnswerOpenQuestion($ID_question)
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true)
		];

		$this->db->where('ID_question', $ID_question);
		$this->db->update('open_question', $data);
	}
	public function AnswerQuestionKontributor($id)
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true)
		];

		$this->db->where('ID_assigned', $id);
		$this->db->update('question_assigned_to_contributor', $data);
	}
	public function answerKontributor($id)
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true)
		];

		$this->db->where('ID_assigned', $id);
		$this->db->update('question_assigned_to_contributor', $data);
	}
	public function hapusOpenQuestion($ID_question)
	{
		return $this->db->get($ID_question);
	}
	public function getQuestionById($id)
	{
		return $this->db->get_where('open_question', ['ID_question' => $id])->row();
	}
	public function tambahQuestion()
	{
		$data = [
			"username" => $this->session->userdata('user')['Username'],
			"pertanyaan" => $this->input->post('pertanyaan', true)
		];
		$this->db->insert('open_question', $data);
	}
	public function ubahDataFaq($ID_faq)
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true),
			"kategori" => $this->input->post('kategori', true),
			"keyword" => $this->input->post('keyword', true),
			"author" => $this->input->post('author', true),
			"status" => $this->input->post('status', true)
		];
		$this->db->where('ID_faq', $ID_faq);
		$this->db->update('faq', $data);
	}
	public function tambahFaq()
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true),
			"kategori" => $this->input->post('kategori', true),
			"keyword" => $this->input->post('keyword', true),
			"author" => $this->input->post('author', true),
			"status" => $this->input->post('status', true),
		];
		$this->db->insert('faq', $data);
	}
	public function publish($ID_question)
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true),
			"kategori" => $this->input->post('kategori', true),
			"keyword" => $this->input->post('keyword', true),
			"author" => $this->input->post('author', true),
			"status" => $this->input->post('status', true)
		];
		$this->db->where('ID_question', $ID_question);
		$this->db->insert('faq', $data);
	}
	public function assignQuestionToContributor($id) //for admin
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true)
		];
		$this->db->where('ID_question',$id);
		$this->db->insert('question_assigned_to_contributor',$data);
	}

	public function assignQuestionToAdmin($id) //for contributor
	{
		$data = [
			"jawaban" => $this->input->post('jawaban', true)
		];
		$this->db->where('ID_assigned',$id);
		$this->db->insert('open_question',$data);
	}

	public function tambahFaqKontributor()
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true)
		];
		$this->db->insert('question_assigned_to_contributor', $data);
	}
	public function ubahDataFaqKontributor($id)
	{
		$data = [
			"pertanyaan" => $this->input->post('pertanyaan', true),
			"jawaban" => $this->input->post('jawaban', true)
		];
		$this->db->where('ID_assigned', $id);
		$this->db->update('question_assigned_to_contributor', $data);
	}
}
?>