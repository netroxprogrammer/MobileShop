<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Waranty extends CI_Model{
	function  __construct(){
		parent::__construct();
	}
	public function  insert_waranty($data){
		if($this->db->insert("warranties",$data)){
			return true;
			
		}
		else{
			return  false;
		}
		
	}
	
}
?>