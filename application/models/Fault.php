<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fault extends  CI_Model{
	function  __construct(){
		parent::__construct();
	}
	public function insert_faults($data){
		if($this->db->insert("mobile_fault",$data)){
			return  true;
		}
		else{
			false;
		}
	}
	
}

?>