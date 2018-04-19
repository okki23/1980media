<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_seo extends MY_Model {
    function data($number,$offset){
			$this->db->order_by("pubdate", "desc"); 
		return $query = $this->db->get('articles',$number,$offset)->result();		
	}
    function jumlah_data(){
		return $this->db->get('articles')->num_rows();
	}
	function get_content($tablename){
		return $this->db->get($tablename)->row();
	}

}
