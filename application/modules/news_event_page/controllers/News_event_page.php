<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class News_event_page extends MY_Controller {
 
    
	var $parsing_form_input = array('id','title_news','picture_news','desc_news','update_news','user_update_news');
    var $tablename = 'm_page_news';
	var $pk = 'id';
	

    public function __construct(){
		parent ::__construct();
		$this->load->model('m_news_event_page','ma');
	}
	public function index()
	{
        $data['content'] = 'news_event_page/view_news_event_page'; 
        
		$data['title'] = $this->data['meta_title'];
        //session
        $data['list'] = $this->ma->get($this->tablename,$this->pk)->result();
        $data['list_head'] = $this->db->get('m_page_news_header')->result();
        //var_dump($data['news_event_page']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}

	public function edit($id = NULL) {
        $data['content'] = 'news_event_page/edit_news_event_page'; 
		$data['title'] = $this->data['meta_title'];       
        if($id == '' || empty($id) || $id == NULL){
            $data['list'] = $this->ma->get_new($this->parsing_form_input);
        }else{
            $data['list'] = $this->ma->get($this->tablename,$this->pk,$id)->row();
        }
        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data);          
	}
    
    
    public function edit_header($id = NULL) {
        $data['content'] = 'news_event_page/edit_news_event_page_header'; 
		$data['title'] = $this->data['meta_title'];       
        if($id == '' || empty($id) || $id == NULL){
            $data['list'] = $this->ma->get_new($this->parsing_form_input);
        }else{
            $data['list'] = $this->ma->get($this->tablename,$this->pk,$id)->row();
        }
        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data);          
	}
	
	public function delete() {
        $id = $this->uri->segment(3);
        $sql = $this->ma->delete($this->pk,$this->tablename,$id);
        

        if($sql){
            echo "<script language=javascript>
             alert('Hapus Data Berhasil');
             window.location='" . base_url('news_event_page') . "';
                 </script>";
          }
    }

    public function save() {       
        $data = $this->ma->array_from_post(array('id','title_news','picture_news','desc_news','update_news','user_update_news'));
        $id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
        $this->load->library('upload');
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;

        $header_image = $this->input->post('header_image');
        
        $picture_news = $this->input->post('picture_news');

        $this->upload->initialize($config);
        if ($header_image != '') {
            $this->upload->do_upload('header_imagex');
        } 
       
        $this->upload->initialize($config);
        if ($picture_news != '') {
            $this->upload->do_upload('picture_newsx');
        }
        if($exe){
            echo "<script language=javascript>
             alert('Simpan Data Berhasil');
             window.location='" . base_url('news_event_page') . "';
                 </script>";
          }
        
    }

    public function save_header() { 
         
      
        $id = $this->input->post('id');       
        $header_image = $this->input->post('header_image');
        
        $exe = $this->db->set('header_image',$header_image)->where('id',$id)->update('m_page_news_header');
        $this->load->library('upload');
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;

        $header_image = $this->input->post('header_image');
        
        $picture_news = $this->input->post('picture_news');

        $this->upload->initialize($config);
        if ($header_image != '') {
            $this->upload->do_upload('header_imagex');
        } 
       
       
        if($exe){
            echo "<script language=javascript>
             alert('Simpan Data Berhasil');
             window.location='" . base_url('news_event_page') . "';
                 </script>";
          }
        
    }
}
