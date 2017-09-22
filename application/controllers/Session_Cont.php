<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_Cont extends CI_Controller{
	
	function __Construct(){
		parent::__Construct();
	$this->load->library("session");
	}
	
	public function save_sessoion(){
	
	$this->session->set_userdata('name','abdullah masood');	
		$this->load->view('session_view');
	}
}

?>