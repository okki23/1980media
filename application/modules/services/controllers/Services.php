<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	var $parsing_form_input = array('id','header_image','logo_a','caption_logo_a','url_logo_a','logo_b','caption_logo_b','url_logo_b','logo_c','caption_logo_c','url_logo_c','logo_d','caption_logo_d','url_logo_d','logo_e','caption_logo_e','url_logo_e','logo_f','caption_logo_f','url_logo_f');
    var $tablename = 'm_page_services';
    var $pk = 'id';
	
	
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_services","mh");
	}
	public function index()
	{	 
		$data['list_footer'] = $this->mh->get_footer();
		$data['content'] = $this->mh->get($this->tablename,$this->pk)->row();
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('services/view_services',$data);
	}
}
