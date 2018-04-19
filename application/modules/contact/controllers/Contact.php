<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {


    var $parsing_form_input = array('id','header_image','title','desc','link_maps');
    var $tablename = 'm_page_contact';
    var $pk = 'id';
	
	
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_contact","mh");
	}
	public function index()
	{	 

		$data['content'] = $this->mh->get_content($this->tablename);
 
		$data['list_footer'] = $this->mh->get_footer();
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('contact/view_contact',$data);
	}
}
