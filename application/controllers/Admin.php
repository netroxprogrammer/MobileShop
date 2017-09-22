<?php  defined("BASEPATH") or  exit("Sorry you can't access diretly");

class Admin extends  CI_Controller{
	
	 function __construct(){
		parent::__construct();
	}
	public function  index(){
		
		$this->load->view("admin/index");
	}
	public function  addproduct()
	{    $data=array();
	
		$f_query = $this->db->get("faults");
		$brand_query = $this->db->get("brand");
		$country_query = $this->db->get("countries");
		if($f_query->result() ){
		$data['faults']=$f_query->result();
		}
		else{
			$data['faults'] ="";
		}
		if($brand_query->result()){
			$data['brand'] = $brand_query->result();
		}
		else{
			
			$data['brand'] ="";
		}
		if($country_query->result()){
		  $data['countries'] =$country_query->result();
		}
		else{
			$data['countries']="";
		}
		$this->load->view("admin/addProducts",$data);
	}
		public function get_cityes(){
		    $cityData = array();
			$cityId = $this->input->post('keyname');
			$this->db->select('*');
			$this->db->from('cities');
			$this->db->where('countryId',$cityId);
		    $findCity= $this->db->get();
		    $cityData['cityData'] = $findCity->result();
		   
		    echo json_encode($cityData);
		/*foreach($findCity->result() as $d){
             echo $d->cityName;
         }*/
		}
	}


?>