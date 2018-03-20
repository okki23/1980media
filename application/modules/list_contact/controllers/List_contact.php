<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class list_contact extends MY_Controller {
    
    var $parsing_form_input = array('id','nama','no_telp','email','pesan');
    var $tablename = 't_contact';
    var $pk = 'id';
    

    public function __construct(){
		parent ::__construct();
		$this->load->model('m_list_contact','ma');
    }
    

	public function index()
	{
        $data['content'] = 'list_contact/view_list_contact'; 
		$data['title'] = $this->data['meta_title'];
        //session
        $data['list'] = $this->ma->get($this->tablename,$this->pk)->result();
        //var_dump($data['list_contact']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}

	public function edit($id = NULL) {
        $data['content'] = 'list_contact/edit_list_contact'; 
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
             window.location='" . base_url('list_contact') . "';
                 </script>";
          }
    }

    public function save() {      
        $source = $this->input->post('source'); 
        $data = $this->ma->array_from_post(array('id','nama','no_telp','email','pesan'));
        $id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
       
        if($exe){
            echo "<script language=javascript>
             alert('Permintaan Berhasil !');
             window.location='" . base_url($source) . "';
                 </script>";
          }
        
    }
}
