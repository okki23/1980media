<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class List_client extends MY_Controller {

  var $parsing_form_input = array('id','nama_client','logo');
  var $tablename = 't_client';
  var $pk = 'id';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_list_client','ma');
       
        if ($this->session->userdata('username') == '') {
            redirect(base_url('login'));
        }
    }

    public function index() {
   

        $data['title'] = $this->data['meta_title'];
        $data['content'] = 'list_client/list_client_view';
    
        $data['listing'] = $this->ma->get($this->tablename,$this->pk)->result();
        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');

        $this->load->view('template_admin', $data);
    }



    public function store(){

     $id = $this->uri->segment(3);

          if($id == '' || empty($id) || $id == NULL){
            $data['parseform'] = $this->ma->get_new($this->parsing_form_input);
          }else{
            $data['parseform'] = $this->ma->get_all($id,$this->tablename)->row();

            //var_dump($data['parseform']);

          }
          $data['title'] = $this->data['meta_title'];
          $data['opt_pegawai'] = $this->ma->opt_pegawai();
          $data['content'] = 'list_client/list_client_store';
          
        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');

          $this->load->view('template_admin', $data);
    }


    public function save(){

      $datapos = $this->ma->array_from_post($this->parsing_form_input);
   
	  $id = isset($datapos['id']) ? $datapos['id'] : '';
      $save = $this->ma->save($datapos,$this->tablename,$this->pk, $id);
       



      $this->load->library('upload');

	 
	  	$logo = $this->input->post('logo');
        
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;
        
        $this->upload->initialize($config);
        if ($logo != '') {
            $this->upload->do_upload('logox');
		  }
 


	  //echo $save;
      if($save){
        echo "<script language=javascript>
         alert('Simpan Data Berhasil');
         window.location='" . base_url('list_client') . "';
             </script>";
      }

    }

    public function delete(){
      $idpost = $this->uri->segment(3);

      $get = $this->db->query("select * from ".$this->tablename." where id = '$idpost'")->row();
      if($get->logo != '' || $get->logo == NULL){
        unlink("uploads/".str_replace(" ","_",$get->logo));
      }
      
     


  
      $del = $this->ma->delete($this->pk,$this->tablename,$idpost);

      if($del){
        echo "<script language=javascript>
         alert('Hapus Data Berhasil');
         window.location='" . base_url('list_client') . "';
             </script>";
      }
    }

 


}
