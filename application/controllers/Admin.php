<?php  defined("BASEPATH") or  exit("Sorry you can't access diretly");

class Admin extends  CI_Controller{
	
	 function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
	}
	public function  index(){
		
		$this->load->view("admin/index");
	}
	public function  addproduct_view()
	{  
	   $data=array();
	    if($this->session->userdata('userData')!=null  || !empty($this->session->userdata('userData'))){
		$userData = $this->session->userdata('userData');
        //print_r($userData);
	   // echo  $userData['oauth_uid'];
		
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
	else{
		redirect("/User_Authentication","refresh");
	}
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
		
		public function add_product(){
			$this->load->Model("Mobiles");
			$this->load->Model("Waranty");
			$this->load->Model("Fault");
			$this->load->Model("Images");
			$new_start_warn;
			$new_end_warn;
			$wantyImage;
			if($this->session->userdata('userData')!=null  || !empty($this->session->userdata('userData'))){
				$userData = $this->session->userdata('userData');
			//	print_r($userData);
			
					
			if($this->input->post('submit')!=null){
				$mobileName =  $this->input->post("mobileName");
				$brand = $this->input->post("brand");
				$price = $this->input->post("price");
				$imei = $this->input->post("imei");
				$email = $this->input->post("email");
				$number = $this->input->post("number");
				$country = $this->input->post("country");
				$city = $this->input->post("city");
				$address = $this->input->post("address");
				$description = $this->input->post("description");
				$waranty = $this->input->post("waranty");
				$fault = $this->input->post("fault");
				echo $waranty;
				$no_w_f = $this->input->post("no_w_f");
				$userId=$userData['oauth_uid'];
				
				$mobileData = array(
						'mobileName'=>$mobileName,
						'brandId'=>$brand,
						'mobileImei'=>$imei,
						'countryId'=>$country,
						'cityId'=>$city,
						'userId'=>$userId,
						'phoneNumber'=>$number,
						'address'=>$address,
						'uploadDate'=>date('Y-m-d'),
						'mobileViews'=>'0',
						'mobilePrice'=>$price,
						'description'=>$description
						
				);
				/***
				 *  Upload Mobile Data
				 */
				$mobileId= $this->Mobiles->insert_mobile($mobileData);
		
				// get images and and time and change name
				/* $img1 =time().$_FILES['img1']['name'];
				 $img2 =time().$_FILES['image2']['name'];
				 $img3 =time().$_FILES['img33']['name'];
				 $img4 =time().$_FILES['image4']['name'];
				 $img5 =time().$_FILES['img5']['name'];
				 $img6 =time().$_FILES['img6']['name'];
				 $img7 =time().$_FILES['img7']['name'];
				 $image1 = $this->upload_picture($img1,'img1');
				 $image2 = $this->upload_picture($img2,'image2');
				 $image3 = $this->upload_picture($img3,'img33');
				 $image4 = $this->upload_picture($img4,'image4');
				 echo $img4;
				 echo  $img1."<br>". $img2."<br>". $img3."<br>". $img4."<br>". $img5."<br>". $img6."<br>". $img7."<br>";
			*/	 //   get image name if uplaod
				/* $image1 = $this->upload_picture($img1,'img1');
				 $image2 = $this->upload_picture($img2,'img2');
				 $image3 = $this->upload_picture($img3,'img33');
				 $image4 = $this->upload_picture($img4,'img44');
				 $image5 = $this->upload_picture($img5,'img5');
				 $image6 = $this->upload_picture($img6,'img6');
				 $image7 = $this->upload_picture($img7,'img7');*/
						 
				if(!empty($mobileId)){
					
					$img2 =time().$_FILES['image2']['name'];
					$img3 =time().$_FILES['img33']['name'];
					$img4 =time().$_FILES['image4']['name'];
					$img5 =time().$_FILES['img5']['name'];
					$img6 =time().$_FILES['img6']['name'];
					$img7 =time().$_FILES['img7']['name'];
					$image1 = $_FILES['img1']['name'];
					$image2 = $_FILES['image2']['name'];
					$image3 = $_FILES['img33']['name'];
					$image4 = $_FILES['image4']['name'];
					$image5 = $_FILES['img5']['name'];
					$image6 = $_FILES['img6']['name'];
					$image7 = $_FILES['img7']['name'];
					//echo "Image1 ".$image1;
					// Image 1 uplaod and Save In Database
					//echo 'image .'.$image1;
					
						// Image 2 uplaod and Save In Database
						if(isset($image1) && !empty($image1) && $image1!=null ){
							$img1 =time().$_FILES['img1']['name'];
							$imagedetail = $this->upload_picture($img1,'img1');
							$imageData = array(
									'mobileId'=>$mobileId,
									'image'=>$imagedetail
							);
							if($this->Images->insert_images($imageData)){
									
							}
							else{
								echo "sorry  Image not Uploaded";
							}  //  End Image1 uplaod
						
						}		
						// Image 2 uplaod and Save In Database
						if(isset($image2) && !empty($image2) && $image2!=null){
						
							$imagedetai2 = $this->upload_picture($img2,'image2');
							$imagedetail = array(
									'mobileId'=>$mobileId,
									'image'=>$imagedetai2
							);
							if($this->Images->insert_images($imagedetail)){
									
							}
							else{
								echo "sorry  Image not Uploaded";
							}  //  End Image1 uplaod
						
						}
						if(isset($image3) && !empty($image3) && $image3!=null ){
							
							$img3 =time().$_FILES['img33']['name'];
							$imagedetai3 = $this->upload_picture($img3,'img33');
							$imageD = array(
									'mobileId'=>$mobileId,
									'image'=>$imagedetai3
							);
							if($this->Images->insert_images($imageD)){
									
							}
							else{
								echo "sorry  Image not Uploaded";
							}  //  End Image1 uplaod
						
						}
						if(isset($image3) && !empty($image4) && $image4!=null ){
								
						//	$img4 =time().$_FILES['image4']['name'];
							$imagedetai4 = $this->upload_picture($img4,'image4');
							$imageD4 = array(
									'mobileId'=>$mobileId,
									'image'=>$imagedetai4
							);
							if($this->Images->insert_images($imageD4)){
									
							}
							else{
								echo "sorry  Image not Uploaded";
							}  //  End Image1 uplaod
						
						}
						if(isset($image5) && !empty($image5) && $image5!=null ){
						
							//	$img4 =time().$_FILES['image4']['name'];
							$imagedetai4 = $this->upload_picture($img5,'img5');
							$imageD4 = array(
									'mobileId'=>$mobileId,
									'image'=>$imagedetai4
							);
							if($this->Images->insert_images($imageD4)){
									
							}
							else{
								echo "sorry  Image not Uploaded";
							}  //  End Image1 uplaod
						
						}
						if(isset($image6) && !empty($image6) && $image6!=null ){
						
							//	$img4 =time().$_FILES['image4']['name'];
							$imagedetai4 = $this->upload_picture($img6,'img6');
							$imageD4 = array(
									'mobileId'=>$mobileId,
									'image'=>$imagedetai4
							);
							if($this->Images->insert_images($imageD4)){
									
							}
							else{
								echo "sorry  Image not Uploaded";
							}  //  End Image1 uplaod
						
						}
						if(isset($image7) && !empty($image7) && $image7!=null ){
						
							//	$img4 =time().$_FILES['image4']['name'];
							$imagedetai4 = $this->upload_picture($img7,'img7');
							$imageD4 = array(
									'mobileId'=>$mobileId,
									'image'=>$imagedetai4
							);
							if($this->Images->insert_images($imageD4)){
									
							}
							else{
								echo "sorry  Image not Uploaded";
							}  //  End Image1 uplaod
						
						}
					//echo "data  save mobile Data ".$mobileId ;
				  // uplaod  waranty infotmation
					if($waranty=="waranty"){
						echo "dsdds";
						$new_start_warn =$this->input->post('new_start_warn');
						$new_end_warn =$this->input->post('new_end_warn');
						$wantyImage =time().$_FILES['wanty_image']['name'];
						$wImg =time().$_FILES['wanty_image']['name'];
					    $wantyImage = $this->upload_picture($wImg,'wanty_image');
						echo "this  is image ".$wantyImage;
						 $warantyDate = array(
						 		'startDate'=>$new_start_warn,
						 		'endDate'=>$new_end_warn,
						 		'waranty_pic'=>$wantyImage,
						 		'mobileId'=>$mobileId
						 );
					    if($this->Waranty->insert_waranty($warantyDate)){
					
					    }
					    else{
					    	
					    	echo "sorrry";
					}
					
					}
					// upload  fault information
					if($fault=="on"){
						$fname = $this->input->post('fault_check');
						
						for($i = 0; $i<count($this->input->post('fault_check')); $i++){
							$fData=array(
									'mobileId'=>$mobileId,
									'faultId'=>$fname[$i]
							);
							//print_r($fData);
							//echo  $fname[$i];
							if($this->Fault->insert_faults($fData)){
							 echo "fault save";
							 }else{
							 echo "sorry fault";
							 }
						}
				}
		
			
				// get images and and time and change name
				/*$img1 =time().$_FILES['img1']['name'];
				$img2 =time().$_FILES['img2']['name'];
				$img3 =time().$_FILES['img3']['name'];
				$img4 =time().$_FILES['img4']['name'];
				$img5 =time().$_FILES['img5']['name'];
				$img6 =time().$_FILES['img6']['name'];
				$img7 =time().$_FILES['img7']['name'];
				
				//   get image name if uplaod 
				$image1 = $this->upload_picture($img1,'img1');
				$image2 = $this->upload_picture($img1,'img2');
				$image3 = $this->upload_picture($img1,'img3');
				$image4 = $this->upload_picture($img1,'img4');
				$image5 = $this->upload_picture($img1,'img5');
				$image6 = $this->upload_picture($img1,'img6');
				$image7 = $this->upload_picture($img1,'img7');*/
		   
				//echo $mobileName. $brand.$price.$imei.$email.$number.$country.$country.$city.$address
				//."<br>".$image1."<br>".$image2."<br>".$image3."<br>".$image4."<br>".$image5."<br>".$image6;
				redirect("/admin/addproduct_view","refresh");
			}else{
				redirect("/admin/addproduct_view","refresh");
			}
					
					
				}
			}
			else{
				echo "Please Login ";
				redirect("/User_Authentication","refresh");
			}
		}
		public function  upload_picture($filename,$picname){
			$newFileName;
			//$new_name = time().$_FILES["userfile"]['name'];
			$config['upload_path']="./uploads/";
			$config['allowed_types']='gif|jpg|png|jpeg';
			
			$config['max_size']="10000000";
			$config['max_width']="20000";
			$config['max_height']="20000";
			$config['file_name'] = $filename;
			$this->load->library('upload',$config);
		
			if(!$this->upload->do_upload($picname)){
			    $error=array('error'=>$this->upload->display_errors());
			    echo $error;
				//$this->load->view("upload_form",$error);
			    $newFileName="";
			}
			else{
				$data=$this->upload->data();
			   $newFileName=$data['file_name'];
				//$this->load->view('upload_success',$data);
			}
			return $newFileName;
			
		}
	}


?>