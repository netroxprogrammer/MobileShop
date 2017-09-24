<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobiles extends CI_Model{
	function  __construct(){
		parent::__construct();
	}
	public function insert_mobile($data){
		if($this->db->insert("mobiles",$data)){
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}
		else{
			return $insert_id;
		}
	}
}
?>