
<!--
 /**
  * Validation for Create A Service
  **********************************/-->

<style type="text/css">
.error{  color:#FF0000; }
</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri()."jquery-latest.js";?>"></script>
<script type="text/javascript">		
$(document).ready(function() {
	
 	// Create service validation
    $('#save').click(function() { 
 
        $(".error").hide();
        var hasError = false;
		
        var servicename = $("#servicename").val();
        if(servicename == '') {
            $("#servicename").after('<span class="error"><br>This field required.</span>');
            hasError = true;
        }
		else
		{
			var nam = isNaN(servicename);
			if(nam == false) {
				$("#servicename").after('<span class="error">Invalid field value.</span>');
				hasError = true;
			}
		}
		
	
		var servicedesclength = $("#servicedesc").val();
		var c =servicedesclength.length;
        if(c > 100) {
            $("#servicedesc").after('<span class="error"><br>Maximum 100 charcters allowed.</span>');
            hasError = true;
        }
		
		var durationvalue = $("#durationvalue").val();
        if(durationvalue == '') {
            $("#durationunit").after('<span class="error">This field required.</span>');
            hasError = true;
        }
		else
		{
			var nam = isNaN(durationvalue);
			if(nam == true) {
				$("#durationunit").after('<span class="error">Invalid field value.</span>');
				hasError = true;
			}
		}
		
		if(hasError == true) { return false; <?php $service_flag = "true"; ?> }
    });
 	// Create service validation end
	
	
/**
 * Validation For Add New Event
 ********************************/
	
	    $('#submit_event').click(function() { 
 
        $(".error").hide();
        var hasError = false;
		
		
		 var title = $("#title").val();
        if(title == '') {
            $("#title").after('<span class="error"><br>This field required.</span>');
            hasError = true;
        }
		else
		{
			var nam = isNaN(title);
			if(nam == false) {
				$("#title").after('<span class="error"><br>Invalid field value.</span>');
				hasError = true;
			}
		}
		
		if(!$('#everyday').is(':checked')){
			var enddate = $("#enddate").val();
			if(enddate == '') {
				$("#enddate").after('<span class="error">End date required.</span>');
				hasError = true;
			}
		}
		
		var startdate = $("#startdate").val();
        if(startdate == '') {
            $("#startdate").after('<span class="error">Start date required.</span>');
            hasError = true;
        }
		
		
		
		var desc = $("#desc").val();
		var c =desc.length;
        if(c > 100) {
            $("#desc").after('<span class="error"><br>Maximum 100 charcters allowed.<br></span>');
            hasError = true;
        }
		
		
		
		
		if(hasError == true) { return false; <?php $event_add_flag = "true"; ?> }
    });
	
/**
 * Appointment Booking validation 
 **********************************/
	  
	  
	    $('#book_now').click(function() { 
 
        $(".error").hide();
        var hasError = false;
		
		var radiobutton = $("#radiobutton").val();
		if(radiobutton == '')
		{
			$("#timeslot").after('<span class="error"><br>This field requried.</span>');
			hasError = true;
		}
		

		var name2 = $("#name2").val();
        if(name2 == '') {
            $("#name2").after('<span class="error"><br>This field required.</span>');
            hasError = true;
        }
		else
		{
			var nam = isNaN(name2);
			if(nam == false) {
				$("#name2").after('<span class="error"><br>Invalid field value.</span>');
				hasError = true;
			}
		}
		
		var email = $("#email").val();
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;		
        if(email == '') {
            $("#email").after('<span class="error"><br>This field Required. E.g.: scientech@gmail.com</span>');
            hasError = true;
        }
		else if(regex.test(email) == false) {
			$("#email").after('<span class="error"><br>Invalid field value. E.g.: scientech@gmail.com</span>');
            hasError = true;
		}
		
		var cellno = $("#cellno").val();
        if(cellno == '') {
            $("#cellno").after('<span class="error"><br>This field required.</span>');
            hasError = true;
        }
		else
		{
			var nam = isNaN(cellno);
			if(nam == true) {
				$("#cellno").after('<span class="error"><br>Invalid field value.</span>');
				hasError = true;
			}
		}
		
		var desc1 = $("#desc1").val();
		var c =desc1.length;
        if(c > 100) {
            $("#desc1").after('<span class="error"><br>Maximum 100 charcters allowed.<br></span>');
            hasError = true;
        }
		
		
		if(hasError == true) { return false; <?php $app_add_flag = "true"; ?> }
    });
	  
		
});
</script>


<script type="text/javascript">		
$(document).ready(function() {
	
 	// Create service validation
    $('#getdate').click(function() { 
 		
        $(".error").hide();
        var hasError = false;
		
        var service = $("#service").val();
        if(service == '-1') {
            $("#service").after('<span class="error"><br>This field required.</span>');
            hasError = true;
        }
		
		if(hasError == true) { return false; }
	});
	
});
</script>