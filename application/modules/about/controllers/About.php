<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	var $parsing_form_input = array('id','header_image','first_title','first_desc','pict_a','desc_a','pict_b','desc_b','pict_c','desc_c','pict_d','desc_d','second_title','second_desc');
    var $tablename = 'm_page_about';
	var $pk = 'id';
	
 
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_about","mh");
	}
	public function index()
	{	 
		$data['content'] = $this->mh->get_content($this->tablename);
		$data['list_footer'] = $this->mh->get_footer();
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('about/view_about',$data);
	}
}
