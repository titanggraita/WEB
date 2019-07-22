
<?php
class C_faq extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('Faq_model');
		$this->load->library('pagination');
	}
	public function index()
    {
        //konfigurasi pagination
        $config['base_url'] = base_url('C_faq/search'); //site url
        $config['total_rows'] = $this->db->count_all('faq'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);		

        $data['title'] = base_url();
        $data['faq'] = $this->Faq_model->getAllQuestionFromFAQ($config['per_page'],$from);
        $this->load->view('templates/header',$data);
        $this->load->view('search_faq',$data);
        $this->load->view('templates/footer');
    }

	public function search()
	{
		$data['title'] = "search FAQ";
		$keyword = $this->input->post('keyword');
		$data['faq'] = $this->Faq_model->get_faq_keyword($keyword);
		$this->load->view('templates/header', $data);
		$this->load->view('search_faq', $data);
		$this->load->view('templates/footer');
	}
	public function question($id_kategori)
	{
		$data['title'] = "FAQ";
		$data['faq'] = $this->Faq_model->get_faq_bykategori($id_kategori);
		$this->load->view('templates/header', $data);
		$this->load->view('search_faq', $data);
		$this->load->view('templates/footer');
	}
       
}
?>