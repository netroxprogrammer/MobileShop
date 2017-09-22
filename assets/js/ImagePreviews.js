
 $(document).ready(function(){
   var newCheck = $("#waranty");
   var faultCheck = $("#faultT");
   var noCheck = $("#no");
   
   });
   //var noCheck = $("#no");
    // new check Box
   /*newCheck.change(function(){
	  
	   if(newCheck.is(":checked")){
		
		  faultCheck.attr('checked', false); 
		  noCheck.attr('checked',false);
		  flt.hide();
	   }
	    
	   else{
	   }

   });
  });*/
  
  $(function () {
	    $("#wanty_image").change(function () {
	        $("#wanty_image1").html("");
	        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
	        if (regex.test($(this).val().toLowerCase())) {
	            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
	                $("#wanty_image1").show();
	                $("#wanty_image1")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
	            }
	            else {
	                if (typeof (FileReader) != "undefined") {
	                    $("#wanty_image1").show();
	                    $("#wanty_image1").append("<img  width='170' height='210' name='warnty_img'  />");
	                    var reader = new FileReader();
	                    reader.onload = function (e) {
	                        $("#wanty_image1 img").attr("src", e.target.result);
							console.log(e.target.result);
	                    }
	                    reader.readAsDataURL($(this)[0].files[0]);
	                } else {
	                    alert("This browser does not support FileReader.");
	                }
	            }
	        } else {
	            alert("Please upload a valid image file.");
	        }
	    });
	});
  
$(function () {
    $("#f_w_image").change(function () {
        $("#f_w_image1").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#f_w_image1").show();
                $("#f_w_image1")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#f_w_image1").show();
                    $("#f_w_image1").append("<img  width='170' height='210' name='f_w_img'  />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#f_w_image1 img").attr("src", e.target.result);
						console.log(e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});


// Show Image One
$(function () {
    $("#image1").change(function () {
        $("#img1").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#img1").show();
                $("#img1")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#img1").show();
                    $("#img1").append("<img width='170' height='210' name='image1' />");
                    var reader = new FileReader();
                    reader.addEventListener("load", function () {
                        $("#img1 img").attr("src", reader.result);
						console.log(reader.result);
                    },false);
                   
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
//Show Image 2
$(function () {
    $("#image2").change(function () {
        $("#img2").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#img2").show();
                $("#img2")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#img2").show();
                    $("#img2").append("<img width='170' height='210' name='image2' />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#img2 img").attr("src", e.target.result);
						console.log(e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});

//Show Image 3
$(function () {
    $("#image3").change(function () {
        $("#img3").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#img3").show();
                $("#img3")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#img3").show();
                    $("#img3").append("<img  width='170' height='210' name='image3' />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#img3 img").attr("src", e.target.result);
						console.log(e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
//Show Image 4
$(function () {
    $("#image4").change(function () {
        $("#img4").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#img4").show();
                $("#img4")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#img4").show();
                    $("#img4").append("<img  width='170' height='210' name='image4' />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#img4 img").attr("src", e.target.result);
						console.log(e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
//Show Image 5
$(function () {
    $("#image5").change(function () {
        $("#img5").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#img5").show();
                $("#img5")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#img5").show();
                    $("#img5").append("<img  width='170' height='210' name='image5'   />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#img5 img").attr("src", e.target.result);
						console.log(e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
//Show Image 6
$(function () {
    $("#image6").change(function () {
        $("#img6").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#img6").show();
                $("#img6")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#img6").show();
                    $("#img6").append("<img width='170' height='210' name='image6'  />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#img6 img").attr("src", e.target.result);
						console.log(e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
//Show Image 7
$(function () {
    $("#image7").change(function () {
        $("#img7").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#img7").show();
                $("#img7")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#img7").show();
                    $("#img7").append("<img width='170' height='210' name='image7' />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#img7 img").attr("src", e.target.result);
						console.log(e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
