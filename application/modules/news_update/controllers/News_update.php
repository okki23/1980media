<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class News_update extends MY_Controller {
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_news_update","mh");
	}
	public function index()
	{	 
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('news_update/view_news_update');
	}
}
