<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us_page extends MY_Controller {
    
    var $parsing_form_input = array('id','header_image','title','desc','link_maps');
    var $tablename = 'm_page_contact';
    var $pk = 'id';
    

    public function __construct(){
		parent ::__construct();
		$this->load->model('m_contact_us_page','ma');
	}
	public function index()
	{
        $data['content'] = 'contact_us_page/view_contact_us_page'; 
		$data['title'] = $this->data['meta_title'];
        //session
        $data['list'] = $this->ma->get($this->tablename,$this->pk)->result();
        //var_dump($data['contact_us_page']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}

	public function edit($id = NULL) {
        $data['content'] = 'contact_us_page/edit_contact_us_page'; 
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
             window.location='" . base_url('contact_us_page') . "';
                 </script>";
          }
    }

    public function save() {       
        $data = $this->ma->array_from_post( array('id','header_image','title','desc','link_maps'));
        $id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
        $this->load->library('upload');
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;
        $header_image = $this->input->post('header_image');
        
        $pict_a = $this->input->post('pict_a');
        $pict_b = $this->input->post('pict_b');
        $pict_c = $this->input->post('pict_c');
        $pict_d = $this->input->post('pict_d');
        

        
       
        $this->upload->initialize($config);
        if ($header_image != '') {
            $this->upload->do_upload('header_imagex');
        } 
       
        $this->upload->initialize($config);
        if ($pict_a != '') {
            $this->upload->do_upload('pict_ax');
        }
        $this->upload->initialize($config);
        if ($pict_b != '') {
            $this->upload->do_upload('pict_bx');
        }
        $this->upload->initialize($config);
        if ($pict_c != '') {
            $this->upload->do_upload('pict_cx');
        }
        $this->upload->initialize($config);
        if ($pict_d != '') {
            $this->upload->do_upload('pict_dx');
        }
        

        if($exe){
            echo "<script language=javascript>
             alert('Simpan Data Berhasil');
             window.location='" . base_url('contact_us_page') . "';
                 </script>";
          }
        
    }
}
