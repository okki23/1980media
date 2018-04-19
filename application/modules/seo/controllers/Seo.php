<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class seo extends MY_Controller {
	var $parsing_form_input = array('id','header_image','first_title','first_desc_title','first_image_title','second_title','second_desc_title','second_image_title');
    var $tablename = 'm_page_seo';
    var $pk = 'id';
	
	
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_seo","mh");
	}
	public function index()
	{	 
		$data['content'] = $this->mh->get_content($this->tablename);
		$data['list_footer'] = $this->mh->get_footer();
	 
		$data['header'] = 'header';
		$data['footer'] = 'footer';
		
		$this->load->view('seo/view_seo',$data);

	 
	}
}
