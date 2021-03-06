<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Digital_adv_page extends MY_Controller { 
    
    var $parsing_form_input = array('id','header_image','first_title','first_desc_title','list_a','list_b','list_c','list_d');
    var $tablename = 'm_page_digitaladv';
    var $pk = 'id';
    

    public function __construct(){
		parent ::__construct();
		$this->load->model('m_digital_adv_page','ma');
	}
	public function index()
	{
        $data['content'] = 'digital_adv_page/view_digital_adv_page'; 
		$data['title'] = $this->data['meta_title'];
        //session
        $data['list'] = $this->ma->get($this->tablename,$this->pk)->result();
        //var_dump($data['digital_adv_page']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}

	public function edit($id = NULL) {
        $data['content'] = 'digital_adv_page/edit_digital_adv_page'; 
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
             window.location='" . base_url('digital_adv_page') . "';
                 </script>";
          }
    }

    public function save() {       
        $data = $this->ma->array_from_post(array('id','header_image','first_title','first_desc_title','list_a','list_b','list_c','list_d'));
        $id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
        $this->load->library('upload');
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;

        $header_image = $this->input->post('header_image');
        
        $first_image_title = $this->input->post('first_image_title');
        $second_image_title = $this->input->post('second_image_title');
         
    
        $this->upload->initialize($config);
        if ($header_image != '') {
            $this->upload->do_upload('header_imagex');
        } 
       
       
     
         
          
        if($exe){
            echo "<script language=javascript>
             alert('Simpan Data Berhasil');
             window.location='" . base_url('digital_adv_page') . "';
                 </script>";
          }
        
    }
}
