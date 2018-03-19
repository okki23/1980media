<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_about","mh");
	}
	public function index()
	{	 
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('about/view_about');
	}
}
