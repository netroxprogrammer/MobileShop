<?php
class  Stud_Model  extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	public  function insert($data){
		if($this->db->insert("student",$data)){
			return  true;
		}
	}
	public function update_std($data,$id){
		$this->db->set($data);
		$this->db->where("id",$id);
		$this->db->update("student",$data);
	}
}

?>