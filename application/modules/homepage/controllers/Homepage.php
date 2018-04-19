<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MY_Controller { 
    
    var $parsing_form_input = array('id','header_image', 'first_title','service_picture_a','service_title_a','service_desc_a','url_service_a','service_picture_b','service_title_b','service_desc_b','url_service_b','service_picture_c','service_title_c','service_desc_c','url_service_c','service_picture_d','service_title_d','service_desc_d','url_service_d','service_picture_e','service_title_e','service_desc_e','url_service_e','service_picture_f','service_title_f','service_desc_f','url_service_f','second_title','advg_title_a','advg_desc_a','advg_picture_a','advg_title_b','advg_desc_b','advg_picture_b','advg_title_c','advg_desc_c','advg_picture_c','advg_title_d','advg_desc_d','advg_picture_d','advg_title_e','advg_desc_e','advg_picture_e','advg_title_f','advg_desc_f','advg_picture_f','link_video_youtube','link_embed_map');
    var $tablename = 'm_page_home';
    var $pk = 'id';
    

    public function __construct(){
		parent ::__construct();
		$this->load->model('m_homepage','ma');
	}
	public function index()
	{
        $data['content'] = 'homepage/view_homepage'; 
		$data['title'] = $this->data['meta_title'];
        //session
        $data['list'] = $this->ma->get($this->tablename,$this->pk)->result();
        //var_dump($data['homepage']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}

	public function edit($id = NULL) {
        $data['content'] = 'homepage/edit_homepage'; 
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
             window.location='" . base_url('homepage') . "';
                 </script>";
          }
    }

    public function save() {       
        $data = $this->ma->array_from_post(array('id','header_image', 'first_title','service_picture_a','service_title_a','service_desc_a','url_service_a','service_picture_b','service_title_b','service_desc_b','url_service_b','service_picture_c','service_title_c','service_desc_c','url_service_c','service_picture_d','service_title_d','service_desc_d','url_service_d','service_picture_e','service_title_e','service_desc_e','url_service_e','service_picture_f','service_title_f','service_desc_f','url_service_f','second_title','advg_title_a','advg_desc_a','advg_picture_a','advg_title_b','advg_desc_b','advg_picture_b','advg_title_c','advg_desc_c','advg_picture_c','advg_title_d','advg_desc_d','advg_picture_d','advg_title_e','advg_desc_e','advg_picture_e','advg_title_f','advg_desc_f','advg_picture_f','link_video_youtube','link_embed_map'));
        $id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
        $this->load->library('upload');
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;

        $header_image = $this->input->post('header_image');
        
        $service_picture_a = $this->input->post('service_picture_a');
        $service_picture_b = $this->input->post('service_picture_b');
        $service_picture_c = $this->input->post('service_picture_c');
        $service_picture_d = $this->input->post('service_picture_d');
        $service_picture_e = $this->input->post('service_picture_e');
        $service_picture_f = $this->input->post('service_picture_f');


        $advg_picture_a = $this->input->post('advg_picture_a');
        $advg_picture_b = $this->input->post('advg_picture_b');
        $advg_picture_c = $this->input->post('advg_picture_c');
        $advg_picture_d = $this->input->post('advg_picture_d');
        $advg_picture_e = $this->input->post('advg_picture_e');
        $advg_picture_f = $this->input->post('advg_picture_f');

        
       
        $this->upload->initialize($config);
        if ($header_image != '') {
            $this->upload->do_upload('header_imagex');
        } 
       
        $this->upload->initialize($config);
        if ($service_picture_a != '') {
            $this->upload->do_upload('service_picture_ax');
        }
        $this->upload->initialize($config);
        if ($service_picture_b != '') {
            $this->upload->do_upload('service_picture_bx');
        }
        $this->upload->initialize($config);
        if ($service_picture_c != '') {
            $this->upload->do_upload('service_picture_cx');
        }
        $this->upload->initialize($config);
        if ($service_picture_d != '') {
            $this->upload->do_upload('service_picture_dx');
        }
        $this->upload->initialize($config);
        if ($service_picture_e != '') {
            $this->upload->do_upload('service_picture_ex');
        }
        $this->upload->initialize($config);
        if ($service_picture_f != '') {
            $this->upload->do_upload('service_picture_fx');
        }


        $this->upload->initialize($config);
        if ($advg_picture_a != '') {
            $this->upload->do_upload('advg_picture_ax');
        }
        $this->upload->initialize($config);
        if ($advg_picture_b != '') {
            $this->upload->do_upload('advg_picture_bx');
        }
        $this->upload->initialize($config);
        if ($advg_picture_c != '') {
            $this->upload->do_upload('advg_picture_cx');
        }
        $this->upload->initialize($config);
        if ($advg_picture_d != '') {
            $this->upload->do_upload('advg_picture_dx');
        }
        $this->upload->initialize($config);
        if ($advg_picture_e != '') {
            $this->upload->do_upload('advg_picture_ex');
        }
        $this->upload->initialize($config);
        if ($advg_picture_f != '') {
            $this->upload->do_upload('advg_picture_fx');
        }
          
        if($exe){
            echo "<script language=javascript>
             alert('Simpan Data Berhasil');
             window.location='" . base_url('homepage') . "';
                 </script>";
          }
        
    }
}
