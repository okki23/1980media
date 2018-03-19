<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('m_login');
      
    }

    public function index() {
    
        $data['judul'] = $this->data['meta_title'];
        $this->load->view('login/login_view', $data);
    }

    public function auth(){
      //echo 1;
 
      $datapos = array('username'=>$this->input->post('username'),
                      'password'=>md5($this->input->post('password')));
      // var_dump($datapos);
      $avail = $this->m_login->auth($datapos)->num_rows();
      $usersess = $this->m_login->auth($datapos)->row();

      if($avail > 0){
  			$list = array('username'=>$usersess->username,'user_group'=>$usersess->level,'user_id'=>$usersess->id_pegawai);
  			$this->session->set_userdata($list);
         
          redirect(base_url('dashboard'));
        
  		 
  		}else{

  			redirect(base_url('login'));
  		}
    }

    public function logout(){
		//mematikan seluruh session yang sudah terdaftar dan kembali ke halaman login
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


}
