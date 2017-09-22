<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class  Stud_controller extends CI_Controller{
	
function __construct(){
	
	parent::__construct();
	$this->load->helper('url');
}
public function index(){
	 $query = $this->db->get('student');
	 $data['record']=$query->result();
	 $this->load->view('Stud_view',$data);
	}
	
	public function  add_student_view(){
	  $this->load->helper('form');
	  $this->load->view('Stud_add');
	}
	public function add_student(){
	 $this->load->model('Stud_Model');
	 $data=array('name'=> $this->input->post('name'),
	             'age'=> $this->input->post('age')
				 );
	 $this->Stud_Model->insert($data);
	  $query = $this->db->get('student');
	 $data['record']=$query->result();
	 $this->load->view('Stud_view',$data);
	}
	public function  update_student_view(){
	 
	 $this->load->helper('form');
	 $id = $this->uri->segment('3');
	 $query=$this->db->get_where("student",array("id"=>$id));
	 $data['record']=$query->result();
	 $data['id']=$id;
	 $this->load->view('Stud_edit',$data);
	}
	public function update_student()
	{
	     $this->load->model('Stud_Model');  
		$data = array(
		        'name'=>$this->input->post('name'),
				'age'=>$this->input->post('age')
				);
		$id=$this->input->post('id');
		
		$this->Stud_Model->update_std($data,$id);
			  $query = $this->db->get('student');
		 $data['record']=$query->result();
	 $data['id']=$id;
	 $this->load->view('Stud_view',$data);
	}
	public function delete_std($id){
		if($this->db->delete("student","id=".$id)){
			return true;
			//echo "delete SuccessFully";
		}
		
	}
}

?>