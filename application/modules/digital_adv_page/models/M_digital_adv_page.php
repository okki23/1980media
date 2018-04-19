<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_digital_adv_page extends MY_Model {

    function __construct() {
        parent::__construct();
    } 
	
    function get_content($tablename){
		return $this->db->get($tablename)->row();
	}

    
}
