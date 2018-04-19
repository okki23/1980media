<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	var $parsing_form_input = array('id','header_image', 'first_title','service_picture_a','service_title_a','service_desc_a','url_service_a','service_picture_b','service_title_b','service_desc_b','url_service_b','service_picture_c','service_title_c','service_desc_c','url_service_c','service_picture_d','service_title_d','service_desc_d','url_service_d','service_picture_e','service_title_e','service_desc_e','url_service_e','service_picture_f','service_title_f','service_desc_f','url_service_f','second_title','advg_title_a','advg_desc_a','advg_picture_a','advg_title_b','advg_desc_b','advg_picture_b','advg_title_c','advg_desc_c','advg_picture_c','advg_title_d','advg_desc_d','advg_picture_d','advg_title_e','advg_desc_e','advg_picture_e','advg_title_f','advg_desc_f','advg_picture_f','link_video_youtube','link_embed_map');
    var $tablename = 'm_page_home';
	var $pk = 'id';
	
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_home","mh");
		$this->data['list_footer'] = 1;
	}
	public function index()
	{	
		$data['content'] = $this->mh->get_content($this->tablename);
		$data['list_footer'] = $this->mh->get_footer();
		$data['client'] = $this->mh->get_client();
		$data['header'] = 'header';
		$data['footer'] = 'footer';
		
		$this->load->view('home/view_home',$data);


	}
}
