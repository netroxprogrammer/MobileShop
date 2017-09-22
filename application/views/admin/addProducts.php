<?php $this->load->view("others/header"); ?>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/ImagePreviews.js">   </script>
  
  <script type="text/javascript">

    $(document).ready(function(){
    	
    	
         
        $('#no').click(function(){
            if($(this).prop("checked") == true){
            	
                document.getElementById("waranty").disabled= true;
                document.getElementById("faultT").disabled= true;
                document.getElementById("new_panel").style.display = "none";
                document.getElementById("fault_panel").style.display = "none";
                new_panel
            }
            else if($(this).prop("checked") == false){
            	 document.getElementById("waranty").disabled= false;
            	 document.getElementById("faultT").disabled= false;
            	 document.getElementById("new_panel").style.display = "";
            	 document.getElementById("fault_panel").style.display = "";
            	 
            }
        });

        $('#waranty').click(function(){
            if($(this).prop("checked") == true){
            	
                document.getElementById("no").disabled= true;
              
            }
            else if($(this).prop("checked") == false){
            	 document.getElementById("no").disabled= false;
            	
            	 
            }
        });

        $('#faultT').click(function(){
            if($(this).prop("checked") == true){
            	
                document.getElementById("no").disabled= true;
             
            }
            else if($(this).prop("checked") == false){
            	
            	 document.getElementById("no").disabled= false;
            
            	 
            }
        });

       
    });
   
    $(document).ready(function() {
        $("#country").change(function(){
        	  //console.log("sdsd");
            $.ajax({
                url:'get_cityes',
                type: 'POST',
                data:  {keyname:$('#country option:selected').val()},
                 success: function(data){
                  obj = JSON.parse(data);
                  console.log(obj);
                  var  citySelect = document.getElementById("city");
                  $('city').prop('selectedIndex', 0);
                var ln  = document.getElementById("city").length;
                  console.log();
                while(citySelect.length){
                 	  citySelect.removeChild(citySelect.firstChild);
                     }
                  
                  for(var i=0;i<obj.cityData.length;i++){
                      var  option = document.createElement("option");
                      console.log(obj.cityData[i].cityName);
                      option.text  =  obj.cityData[i].cityName;
                      option.value = obj.cityData[i].cityId;
                      citySelect.add(option);
                      }
                 }
            });
        });
    });
  
</script>
   <style>
   hr.style1{
	border-top: 1px solid #8c8b8b;
}

div {
  transition: all linear 0.5s;
  position: relative;
  top: 0;
  left: 0;
}

.ng-hide {
  background-color: transparent;
  top:-200px;
  left: 200px;
}
.card {
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 25%;
    
    border-radius: 5px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}
.btn {
    border: none; /* Remove borders */
    color: white; /* Add a text color */
    padding: 14px 28px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>
   
         <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
           <form if="productForm"> 
            <div id="">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Upload Mobile</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 
				  <div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading">
                           Basic Information
                        </div>
                </div>  
<div class="panel-body">				
				  <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-6">           
		
			<div class="form-group">
			<label>Mobile Name</label>
			<input type="text" name="mobileName"  class="form-control"/>
		
			
		     </div>
			</div>

					 
					 <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>Company Name</label>
			<select name="city" class="form-control">
			<option value=""> Select Company</option>
			<?php if($brand){
			   foreach($brand as $brnd){
			   	?>
			 <option value="<?php echo $brnd->brandName?>"><?php echo $brnd->brandName?></option> 
			  <?php 
			    }
			}?>
			</select>
			</div>         
    </div>
					 <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>Price</label>
			<input  type="number" name="price"  class="form-control" required/>	    
			</div>            
			</div>
			 <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>IMEI Number</label>
			<input  type="imei" name="imei"  class="form-control" required/>	    
			</div>            
			</div>
	 
	<div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>Email</label>
			<input  type="email" name="email"  class="form-control" />
			</div>
                             
                     
    </div>
     <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>Phone Number</label>
			<input  type="text" name="number"  class="form-control" required/>
			<div>
		     </div>
			    
			</div>           
                     
    </div> 
	</div>
	<hr width="100%" />
	<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>Country</label>
			<select name="country" id="country" class="form-control">
			<option value=""> Select Country</option>
			<?php 
			     if($countries){
				foreach ($countries as $country){
					?>
			<option value="<?php echo $country->countryId; ?>"><?php echo $country->countryName;?></option>
			<?php 	}
			}
			?>
			</select>
			</div>         
    </div>
	 <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>City</label>
			<select name="city" id="city" class="form-control">
			<option>Sialkot</option>
			<option>Lahore</option>
			</select>
			</div>         
    </div>
	 <div class="col-md-6 col-sm-6 col-xs-6">           
			
			<div class="form-group">
			<label for="comment">Address</label>
			<textarea class="form-control" rows="2" id="comment"></textarea>

			</div>         
    </div> 
	<hr width="100%" />
	
	<div class="panel panel-default">
                        <div class="panel-heading">
                           Upload Mobile Pictures
                        </div>
                </div>  
<div class="panel-body">	
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-6 card" style="background-color:white;" > 
<div class="">       
		<center>	<div id="img1">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="image1" type="file"  class="hidden"  />
			 <label for="image1" class="btn info">Choose</label>
			</div>         
			 </center>
			
</div>
    </div> 
	<div class="col-md-3 col-sm-6 col-xs-6 card col-md-offset-1" style="background-color:white;" > 
<div class="">       
		<center>	<div id="img2">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="image2" type="file"  class="hidden"  />
			 <label for="image2" class="btn info">Choose</label>
			</div>         
			 </center>
			
</div>
    </div> 
	<div class="col-md-3 col-sm-6 col-xs-6 card col-md-offset-1" style="background-color:white;" > 
<div class="">       
		<center>	<div id="img3">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="image3" type="file"  class="hidden"  />
			 <label for="image3" class="btn info">Choose</label>
			</div>         
			 </center>
			
</div>
    </div>  
	<div class="col-md-3 col-sm-6 col-xs-6 card " style="background-color:white;     margin-top: 10;" > 
<div class="">       
		<center>	<div id="img4">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="image4" type="file"  class="hidden"  />
			 <label for="image4" class="btn info">Choose</label>
			</div>         
			 </center>
			
</div>
    </div> 
	<div class="col-md-3 col-sm-6 col-xs-6 card col-md-offset-1" style="background-color:white;     margin-top: 10;" > 
<div class="">       
		<center>	<div id="img5">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="image5" type="file"  class="hidden"  />
			 <label for="image5" class="btn info">Choose</label>
			</div>         
			 </center>
			
</div>
    </div> 
	<div class="col-md-3 col-sm-6 col-xs-6 card col-md-offset-1" style="background-color:white;     margin-top: 10;" > 
<div class="">       
		<center>	<div id="img6">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="image6" type="file"  class="hidden"  />
			 <label for="image6" class="btn info">Choose</label>
			</div>         
			 </center>
			
</div>
    </div> 

	<div class="col-md-3 col-sm-6 col-xs-6 card " style="background-color:white;     margin-top: 10;" > 
<div class="">       
		<center>	<div id="img7">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="image7" type="file"  class="hidden"  />
			 <label for="image7" class="btn info">Choose</label>
			</div>         
			 </center>
			
</div>
    </div> 
   </div>
</div>	
</div>
 <div class="panel-footer">
 </div>


<div class="panel panel-default">
                        <div class="panel-heading">
                           Mobile Type
                        </div>
                </div>  
<div class="panel-body">	
	<div class="col-md-6 col-sm-6 col-xs-6">
	<label for="comment"></label>   <br>        
			<label class="checkbox-inline"><input type="checkbox"   ng-model="new_panel" id="waranty" >Waranty</label>
			<label class="checkbox-inline"><input type="checkbox"   id="faultT"  ng-model="fault_panel" > fault</label>   
			<label class="checkbox-inline"><input type="checkbox"   id="no"  ng-model="no_want_fault"> no waranty/fault</label>   
    </div> 
	
</div>
</div>
<div class="panel-footer"></div>


</div>
</div>
<!-- New Mobile -->
 
<div class="row" id="new_panel" style=" background-color: white;"  ng-show="new_panel">
				  <div class="panel panel-default">
                        <div class="panel-heading">
                          Waranty Mobile:
                        </div>
                </div>  

				   

	<div class="col-md-6 col-sm-6 col-xs-6">           
			<div class="form-group">
			<label>Waranty</label><br>
		Start Date:<input  type="date" name="new_start_warn" />
			End Date:<input  type="date" name="new_end_warn" />
			</div>         
    </div>
	 
		<div class="col-md-3 col-sm-6 col-xs-6 card col-md-offset-1" style="background-color:white;     margin-top: 10;" > 
<div class="">       
		<center>	<div id="wanty_image1">	<img  id="img" src="<?php echo base_url();?>assets/img/choos.png" /> </div>
			<br><div class="form-group">
			<input id="wanty_image" type="file"  class="hidden"  />
			 <label for="wanty_image" class="btn info">Warranty Card Picture</label>
			</div>         
			 </center>
			
</div>
    </div> 
	

</div>

<!-- Fault Panel -->
<div id="fault_panel" class="row" style=" background-color: Lavender;" ng-show="fault_panel" >
  <div class="row">
                    <div class="col-md-12">
                     <h4>&nbsp;&nbsp;&nbsp;Fault Mobile:</h4><br>
                    </div>
                </div>    
<div class="col-md-12 col-sm-6 col-xs-6">
	<label for="comment"></label>   <br>        
			&nbsp;&nbsp;&nbsp;
			<?php if($faults){
			      foreach($faults as $flt){   
			?>
			<label class="checkbox-inline"><input type="checkbox"   name="fault" value="<?php echo $flt->faultName; ?>"><?php echo $flt->faultName; ?></label>
		<?php 
			      }
			      }
			      ?>
			
    </div> 
         </div>    
</form>
</div>
<!-- no fault/waranty mobile-->

<!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   
<?php $this->load->view("others/footer"); ?>