<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MDl_home extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function get($order_by){
     $this->db->order_by($order_by);
     $query=$this->db->get('tasks');
     return $query;
	}
}