<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Webdev extends MY_Controller {
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_webdev","mh");
	}
	public function index()
	{	 
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('webdev/view_webdev');
	}
}
