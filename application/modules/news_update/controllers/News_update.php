<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class News_update extends MY_Controller {

	var $parsing_form_input = array('id','title_news','picture_news','desc_news','update_news','user_update_news');
    var $tablename = 'm_page_news';
	var $pk = 'id';
	
	public function __construct(){
		parent ::__construct();
		$this->load->model("m_news_update","mh");
	}
	
	public function index()
	{	 
		$data['list_footer'] = $this->mh->get_footer();
		$jumlah_data = $this->mh->jumlah_data($this->tablename);

		$this->load->library('pagination');	

		$config['base_url'] = base_url().'news_update/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;

		$config['full_tag_open'] = '<div align="center"><ul class = "pagination" style="font-size: 65%; text-decoration:none;">';
		$config['full_tag_close'] = '</div></ul>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		//$data['list'] = $this->mh->data($config['per_page'],$from);

		$data['content'] = $this->mh->get_content($this->tablename,$config['per_page'],$from)->result();
		$data['count_content'] = $this->mh->get_content($this->tablename,$config['per_page'],$from)->num_rows();
 

		$data['list_recent'] = $this->db->query('select * from m_page_news LIMIT 0,5')->result();
		//$data['content'] = $this->mh->get_content($this->tablename);
		$data['list_head'] = $this->db->get('m_page_news_header')->row();
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('news_update/view_news_update',$data);
	}

	public function detail_news($id){
		$data['list_footer'] = $this->mh->get_footer();
		 

		$data['content'] = $this->db->query("select * from m_page_news where id = '$id' ")->row();
		//var_dump($data['content']);

		$data['list_recent'] = $this->db->query('select * from m_page_news LIMIT 0,5')->result();
		//$data['content'] = $this->mh->get_content($this->tablename);
		$data['list_head'] = $this->db->get('m_page_news_header')->row();
		$data['header'] = 'view/header';
		$data['footer'] = 'view/footer';
		$this->load->view('news_update/view_news_update_detail',$data);
	}
}
