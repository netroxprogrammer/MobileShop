<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller{
	function __construct(){
	
	parent::__construct();
	$this->load->helper(array('form','url'));
	}
	public function  index(){
		$this->load->view('upload_form',array('error'=>''));
	}
	public function do_upload(){
		$images = $_FILES['userfile']['name'];
		for($i=0;$i< count($images); $i++){
			echo $_FILES['userfile']['name'][$i];
				
		}
				/*
		$config['upload_path']="./uploads/";
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']="10000";
		$config['max_width']="1024";
		$config['max_height']="768";
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('userfile')){
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view("upload_form",$error);
		}
		else{
			$data=array('upload_data'=>$this->upload->data());
			$this->load->view('upload_success',$data);
		}*/
	}
	
}

?>