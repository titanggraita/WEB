
<?php
	class C_faq extends CI_Controller{
        public function __construct(){
		    parent::__construct();
		        $this->load->helper('url_helper');
                $this->load->model('Faq_model');
        }   
        
	    public function search(){
			$keyword = $this->input->post('keyword');
			$data['faq']=$this->Faq_model->get_faq_keyword($keyword);
			$this->load->view('templates/header', $data);
			$this->load->view('search_faq',$data);
			$this->load->view('templates/footer');
		}
    }
?>