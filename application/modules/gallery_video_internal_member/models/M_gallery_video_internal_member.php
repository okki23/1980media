<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gallery_video_internal_member extends MY_Model {

    function __construct() {
        parent::__construct();
    } 
	
    function data($number,$offset){
        $this->db->order_by("id", "desc"); 
    return $query = $this->db->get('page_video_internal',$number,$offset)->result();		
}
function jumlah_data(){
    return $this->db->get('page_video_internal')->num_rows();
}
	
    
    
}
