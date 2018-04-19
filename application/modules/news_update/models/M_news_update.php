<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_news_update extends MY_Model {
    function data($number,$offset){
			$this->db->order_by("pubdate", "desc"); 
		return $query = $this->db->get('articles',$number,$offset)->result();		
	}
	function jumlah_data($tablename){ 
		return $this->db->get($tablename)->num_rows();		
	}


	function get_content($tablename,$limit,$offset){
 
		$this->db->from($tablename); 
		$this->db->limit($limit, $offset);
		return $this->db->get();
	}
}
