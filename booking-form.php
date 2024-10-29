
<script>
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 1000;
	$(function() {
		$( "#dialog" ).dialog({
			autoOpen: false,
			//show: "blind",
			hide: "blind",
			width:'auto',
		 	modal: true,
			resizable: true,
			draggable: true,
		});

		$( "#opener" ).click(function() {
			$( "#dialog" ).dialog( "open" );
			return false;
		});
	});
</script>

<!--1st modal form start -->
	<div id="dialog"  title="Book An Appointment" style="width:500px; overflow:hidden;"> 
		<div id="tellfriend" style="margin-left: 20px; width: 550px; float:left;">
			<!--<a class="close" href="#close" >Close</a>-->
				<form name="myform"id='tellafriend_form' method="post" action=""  >
				<div id="calshow" style="border:0px solid #000000; width:auto;float:left;">

					  <div id="dateform" style="float:left;">
						<?php include('j-cal/jquery-ui-1.8.17.custom.php');?>
						<?php include('j-cal/jquery-ui-1.8.17.custom.min.php');?>
						<script type="text/javascript">
							function noWeekendsOrHolidays(date) {
											var noWeekend = $.datepicker.noWeekends(date);
											if (noWeekend[0]) {
													return nationalDays(date);
											} else {
													return noWeekend;
											}
									}
									$(function() { 
											$("#datepicker").datepicker({
													inline: true,
													altField: '#alternate',
													onSelect: function(dateText, inst) { 
														var dateAsString = dateText; 
														var a = $.datepicker.formatDate('yy-mm-dd', new Date(dateAsString));
														document.myform.bookdate.value = a;
													}
									}); 
							});
				
						</script>
						<div id="datepicker" style="height:auto;">	</div>
						<style type="text/css">
							/*demo page css*/
							#dateform{ font: 85% "Trebuchet MS", sans-serif; }
							.demoHeaders { margin-top: 2em; }
							#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
							#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
							ul#icons {margin: 0; padding: 0;}
							ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
							ul#icons span.ui-icon {float: left; margin: 0 4px;}
						</style>
						</div><!-- date div end-->
				
			<div style="float:right; height:auto; width:auto; margin-left:20px;">
							<label for="from">Available Service:</label><br>
							<select name="service" id="service">
							<option value="-1" selected="selected">Select Service</option>
								<?php 
								global $wpdb;
									$table_name = $wpdb->prefix . "services";
									$res=$wpdb->get_results("select * From $table_name");
									if($res == NULL)
									{
									echo '<option>No services, Create service first !!!</option>';
									}
								else 
								  {
									foreach($res as $r)
									{
										echo '<option value='.$r->service_name.'>'.$r->service_name.'</option>';
									}
								  }
								?>
								</select><br><br>
								<label for="from">Booking Date:</label><br>
								<input name="bookdate" type="text" id="bookdate" readonly="" class="" size="10">
								<br><br>
								<input name="getdate" type="submit" id="getdate" value="Go"/>
								<br>
							</form>
							 </div>
				
				</div><!-------------- button avilable time end ----------->
			</div><!-- Tellfriend div end-->
		</div> <!--1st modal form end -->
	
	<?php
	if(isset($_POST['getdate']))
	{
	?>
	<script>
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 1000;
	$(function() {
		$( "#dialog2" ).dialog({
			autoOpen: false,
			//show: "blind",
			hide: "explode",
			width:'auto',
		 	modal: true,
			resizable: false,
			draggable: true,
		});

		$( "#dialog2" ).dialog( "open" );
			return false;
	});
	</script>
	<!--2nd modal form start -->
	<div id="dialog2"  title="Book An Appointment" style="width:500px; overflow:hidden;"> 
		<div id="tellfriend" style="margin-left: 20px; width: 550px; float:left;">
			<!--<a class="close" href="#close" >Close</a>-->
			<form name="myform"id='tellafriend_form' method="post" action=""  >
				<div id="bkform" style="float:left;">
					<div id="timeslot" >
							<font color="#000000">
							<lable for="from"> Available Time For <?php echo $_POST['service']; ?> On:
							 <?php echo $bkdate = date('Y-m-d', strtotime($_POST['bookdate'])); ?></label>
							<?php 
							global $wpdb;
							$service_name = $_POST['service'];
							$table_name = $wpdb->prefix . "services";
							$ser=$wpdb->get_row("select * From $table_name where service_name = '$service_name'");
							$slots  = $ser->service_durationvalue;
						 	$table_name = $wpdb->prefix . "calendar_setting";
							$res=$wpdb->get_row("select * From $table_name where cs_id  = '1'");
							$st = $res->day_start_time;
							$st = $st.":00:00";
							$et = $res->day_end_time;
							$et = $et.":00:00";
							$slots = $slots." minute";
							$t1 = strtotime($st);
							$t2 = strtotime($et);
							$timeslots = array();
							$secondslot = "-".$slots;
							$t1 = strtotime($secondslot, $t1);
							while ($t1 < $t2) {
							   $t1 = strtotime($slots, $t1);
							   $timeslots[] = date('H:iA', $t1);
							}
						?>
						<hr size=1>
						<?php
							//fatch booking to block time slots if already booked
							global $wpdb;
							$today = $bkdate;
							$table_name = $wpdb->prefix . "booked_appointments";
							$block =  $wpdb->get_results("SELECT * FROM $table_name WHERE `bk_ap_stdate` LIKE '$today'");
							$today_time_slots = array();
							foreach($block as $blk)
							{
								$today_time_slots[] = $blk->bk_ap_sttime;
							}
							 $t = count($timeslots);
							 $t=$t-1;
							 $i=1;
								foreach ( $timeslots as $slot )
								{  
									if($i<=$t)
									{
										$flag = 'false';
										foreach($today_time_slots as $tts)
										{
											if($tts == $slot)  
											{
												$flag = 'ture';
											}
										}	
											
											if($flag == 'ture')  
											{
								 ?>
								  	<div id="timeleft" style="border:0px solid #000000;height:auto;width:50%; float:left;">
									 <input name="radiobutton"   id="radiobutton" disabled="disabled" type="radio" value="<?php  echo $slot; ?>" />
									 <?php  echo $slot."<br>"; ?>
						   			 </div>
								<?php   	}
											else if($flag == 'false')
											{
									?>
								  	<div id="timeleft" style="border:0px solid #000000;height:auto;width:50%; float:left;">
									 <input name="radiobutton"   id="radiobutton"  type="radio" value="<?php  echo $slot; ?>" />
									 <?php  echo $slot."<br>"; ?>
						   			 </div>
									<?php }		
										
									}
									$i++;
								}
							?>

						</div>	<br>
						<input name="service" id="service" type="hidden" value="<?php echo $_POST['service']; ?>" />
						<input class="std_input" type="hidden" id="bookdate" name="bookdate" value="<?php echo $bkdate; ?>" />
						
						<label for="from">Name:</label>
						<input class="std_input" type="text" id="name2" name="name2" size="40" maxlength="35" value="" />
						<br>
						
						<label for="from">E-mail:</label>
						<input class="std_input" type="text" id="email" name="email" size="40" maxlength="35" value="" />
						<br>
						
						<label for="from">Cell Number:</label>
						<input class="std_input" type="text" id="cellno" name="cellno" size="40" maxlength="35" value="" />
						<br>
						
						<label for="message">Description:</label>
						<textarea id="desc1" name="desc"  rows="18" cols="40"></textarea>
						
						<input name="book_now" type="submit" class="form_but" id="book_now" value="Book Now"/>
						<input type="submit" name="cancel" id="cancel" class="form_but" value="Cancel"/>
						</form>
				</div>
			</div>
		</div>
	<?php 
	}
	?>
