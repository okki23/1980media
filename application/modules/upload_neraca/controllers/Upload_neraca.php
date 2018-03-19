<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class upload_neraca extends MY_Controller {
    
    var $parsing_form_input = array('id','type_trans','nama_file','last_post','path_upload','date_upload');
    var $tablename = 'm_neraca';
    var $pk = 'id';
    
    public function __construct(){
		parent ::__construct();
		$this->load->model('m_upload_neraca','ma');
	}
	public function index()
	{
        $data['content'] = 'upload_neraca/view_upload_neraca'; 
		$data['title'] = $this->data['meta_title'];
        $data['sum'] = $this->db->query("select sum(last_post) as sumdata from m_neraca")->row();
        //session
        $data['upload_neraca'] = $this->ma->get($this->tablename,$this->pk)->result();
        //var_dump($data['sum']);
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data); 
	}
	
	 public function rekap() {
        $filename = "rekapitulasi_posisi_kas_terkini".date('Y-m-d').".xls";
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=$filename");
        header("Content-Transfer-Encoding: binary ");
  
         $data = $this->db->query("select * from m_neraca")->result();
         echo '<table border="1" cellpadding="3" cellspacing="0">
         <tr>
        <th>Jenis Transaksi</th>
		<th>Transaksi</th>
		<th>Jumlah</th>
		<th>Tanggal Upload </th>   
         </tr> 

         ';
         $tot = 0;
		 
         foreach($data as $key=>$val){
            echo '<tr>';
            echo '<td>'.strtoupper($val->type_trans).'</td>';
			echo '<td>'.$val->nama_file.'</td>';
            echo '<td> Rp. '.number_format(intval($val->last_post),0).'</td>';
            echo '<td>'.tanggalan($val->date_upload).'</td>';
           
            echo '</tr>';
         $tot += $val->last_post;
         }
         echo '<tr>  <td colspan="4"> <b> Jumlah Semua  : Rp. '.number_format($tot,0).' </b> </td></tr>';
         echo '<tr> 
         <td colspan="4"> <b> NB : Data yang ditampilkan dalam list hanya para member yang sudah membayar iuran,apabila belum melakukan pembayaran iuran maka nama member tidak akan di list </td>
         </tr>';
         echo '</table>';
    }

	public function edit($id = NULL) {
        $data['content'] = 'upload_neraca/edit_upload_neraca'; 
		$data['title'] = $this->data['meta_title'];       
        if($id == '' || empty($id) || $id == NULL){
            $data['upload_neraca'] = $this->ma->get_new($this->parsing_form_input);
        }else{
            $data['upload_neraca'] = $this->ma->get($this->tablename,$this->pk,$id)->row();
        }
        //session
        $data['username'] = $this->session->userdata('username');
        $data['user_group'] = strtoupper(level_help($this->session->userdata('user_group')));
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('template_admin',$data);          
	}
	
	public function delete() {
        $id = $this->uri->segment(3);

        $get = $this->db->query("select * from m_neraca where id = '$idpost'")->row();
        if($get->path_upload != '' || $get->path_upload == NULL){
            unlink("uploads/".str_replace(" ","_",$get->path_upload));
        }

        $sql = $this->ma->delete($this->pk,$this->tablename,$id);
        redirect(base_url('upload_neraca'));
    }

    public function save() {    
        $posfile = $this->input->post('path_upload');   
        $data = $this->ma->array_from_post(array('id','type_trans','nama_file','last_post','path_upload','date_upload'));
         
		$id = isset($data['id']) ? $data['id'] : NULL;
        $exe = $this->ma->save($data,$this->tablename,$this->pk, $id);
        
        $config['upload_path'] = "uploads/";
        $config['allowed_types'] = 'gif|bmp|jpg|jpeg|png|xls|xlsx|doc|docx|pdf|rtf';
        $config['max_size'] = 5000;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
		
        if ($posfile != '') {
            $this->upload->do_upload('path_uploadx');
        }

        redirect(base_url('upload_neraca'));
    }
}
