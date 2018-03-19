<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class web_development extends MY_Controller {
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_web_development","mh");
	}
	public function index()
	{	 
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('web_development/view_web_development');
	}
}
