<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_page extends MY_Controller { 
    
    var $parsing_form_input = array('id','header_image','logo_a','caption_logo_a','url_logo_a','logo_b','caption_logo_b','url_logo_b','logo_c','caption_logo_c','url_logo_c','logo_d','caption_logo_d','url_logo_d','logo_e','caption_logo_e','url_logo_e','logo_f','caption_logo_f','url_logo_f','logo_g');
    var $tablename = 'm_page_services';
    var $pk = 'id';
    

    public function __construct(){
		parent ::__construct();
		$this->load->model('m_services_page','ma');
	}
	public function index()
	{
        $data['content'] = 'services_page/view_services_page'; 
		$data['title'] = $this->data['meta_title'];
        //session
        $data['list'] = $this->ma->get($this->tablename,$this->pk)->result();
        //var_dump($data['services_page']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}

	public function edit($id = NULL) {
        $data['content'] = 'services_page/edit_services_page'; 
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
             window.location='" . base_url('services_page') . "';
                 </script>";
          }
    }

    public function save() {       
        $data = $this->ma->array_from_post(array('id','header_image','logo_a','caption_logo_a','url_logo_a','logo_b','caption_logo_b','url_logo_b','logo_c','caption_logo_c','url_logo_c','logo_d','caption_logo_d','url_logo_d','logo_e','caption_logo_e','url_logo_e','logo_f','caption_logo_f','url_logo_f','logo_g'));
        $id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
        $this->load->library('upload');
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;

        $header_image = $this->input->post('header_image');
        
        $logo_a = $this->input->post('logo_a');
        $logo_b = $this->input->post('logo_b');
        $logo_c = $this->input->post('logo_c');
        $logo_d = $this->input->post('logo_d');
        $logo_e = $this->input->post('logo_e');
        $logo_f = $this->input->post('logo_f');
        $logo_g = $this->input->post('logo_g');
 

        
       
        $this->upload->initialize($config);
        if ($logo_g != '') {
            $this->upload->do_upload('logo_gx');
        } 
         
        $this->upload->initialize($config);
        if ($header_image != '') {
            $this->upload->do_upload('header_imagex');
        } 
       
        $this->upload->initialize($config);
        if ($logo_a != '') {
            $this->upload->do_upload('logo_ax');
        }
        $this->upload->initialize($config);
        if ($logo_b != '') {
            $this->upload->do_upload('logo_bx');
        }
        $this->upload->initialize($config);
        if ($logo_c != '') {
            $this->upload->do_upload('logo_cx');
        }
        $this->upload->initialize($config);
        if ($logo_d != '') {
            $this->upload->do_upload('logo_dx');
        }
        $this->upload->initialize($config);
        if ($logo_e != '') {
            $this->upload->do_upload('logo_ex');
        }
        $this->upload->initialize($config);
        if ($logo_f != '') {
            $this->upload->do_upload('logo_fx');
        }


         
          
        if($exe){
            echo "<script language=javascript>
             alert('Simpan Data Berhasil');
             window.location='" . base_url('services_page') . "';
                 </script>";
          }
        
    }
}
