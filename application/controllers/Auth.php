<?php  use Facebook\FacebookResponse;
use Facebook\Exceptions\FacebookResponseException;
defined('BASEPATH') or exit('No direct script access allowed');



class Auth extends CI_Controller{
	public function __construct(){
		parent::__construct();
	 
	}
	public function index(){
	$userData = array();
	$this->load->library('facebook');
		/*if($this->facebook->getTokken()!==null)
		{			
			echo $this->facebook->getTokken();		
		}*/
		//$this->load->view("user_authentication/index",$userData);
	}
}
?>