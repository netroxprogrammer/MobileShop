<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test(){
		$data = array(
		   'name'=>'abdullah',
		   'age'=>'24'
		   );
		   
		   $this->db->set($data);
		   $this->db->where("id",'1');
		   $this->db->update('student',$data);
  		   //$this->db->insert('student',$data);
		$this->load->view('test');
		//echo "abdullah masood";
	}
	public function my(){
		$this->load->view("admin/addProducts");
		
	}
	public function user(){
		$this->load->view("users/index");
	
	}
}
