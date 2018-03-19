<?php
 
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class donatur extends MY_Controller {
    
    var $parsing_form_input = array('id','nama_donatur','jumlah_donasi','tanggal_donasi','path_upload');
    var $tablename = 'm_donatur';
    var $pk = 'id';
    
    public function __construct(){
		parent ::__construct();
		$this->load->model('m_donatur','ma');
	}
	public function index()
	{
        $data['content'] = 'donatur/view_donatur'; 
		$data['title'] = $this->data['meta_title'];
        //session
        $data['donatur'] = $this->ma->get($this->tablename,$this->pk)->result();
        $data['sum'] = $this->db->query("select sum(jumlah_donasi) as sumdata from m_donatur")->row();
        //var_dump($data['donatur']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}

	public function edit($id = NULL) {
        $data['content'] = 'donatur/edit_donatur'; 
		$data['title'] = $this->data['meta_title'];       
        if($id == '' || empty($id) || $id == NULL){
            $data['donatur'] = $this->ma->get_new($this->parsing_form_input);
        }else{
            $data['donatur'] = $this->ma->get($this->tablename,$this->pk,$id)->row();
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
        redirect(base_url('donatur'));
    }

    public function rekap() {
        $filename = "rekapitulasi_donatur_".date('Y-m-d').".xls";
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=$filename");
        header("Content-Transfer-Encoding: binary ");
  
         $data = $this->db->query("select * from m_donatur")->result();
		 $bacod = 0;
         echo '<table border="1" cellpadding="3" cellspacing="0">
         <tr>
         <td> <b>Nama Donatur</b> </td>
         <td> <b>Jumlah Donasi</b> </td>
         <td> <b>Tanggal Donasi</b> </td>
         </tr>
         ';
         foreach($data as $key=>$val){
            echo '<tr>';
            echo '<td>'.$val->nama_donatur.'</td>';
            echo '<td> Rp. '.number_format($val->jumlah_donasi,0).'</td>';
            echo '<td>'.tanggalan($val->tanggal_donasi).'</td>';
			echo '</tr>';
         $bacod += $val->jumlah_donasi;
		 }
		 
		 echo '<tr>
		 <td colspan="3" style="font-weight: 800; text-align: left; "> Total Seluruhnya : Rp. '.number_format($bacod,0).'</td>
</tr>';
         echo '</table>';
    }

    public function save() {       
        $data = $this->ma->array_from_post(array('id','nama_donatur','jumlah_donasi','tanggal_donasi','path_upload'));
       
 $posfile = $this->input->post('path_upload'); 
         $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png|xls|xlsx|doc|docx|pdf|rtf';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if ($posfile != '') {
            $this->upload->do_upload('path_uploadx');
            
        }
        
       $id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
        redirect(base_url('donatur'));
    }
}
