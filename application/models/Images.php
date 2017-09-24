<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Model{
	function  __construct(){
		parent::__construct();
	}
	public function  insert_images($data){
		if($this->db->insert("images",$data)){
			return true;
			
		}
		else{
			return  false;
		}
		
	}
}
	
	?>