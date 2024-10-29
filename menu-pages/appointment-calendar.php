<?php
	
?>

<hr size=2>
		<h2>Appointment Calendar 
		<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" 
		class="vtip"  title= "View and Create booking. Drag over calendar to create booking." />
		</h2>
		<hr size=2>
		<!--<div class="social_links" >
			<li><input class="email" href="#emailpopup" type="button" value="Add An Event" id="book-event-button"  
			style="margin-left:5px; margin-top:0px; width:130px;
			height:30px;
					background-color: #93ba31;
					border: 3px solid #afdd39;
					color: #fff;
					font: bold 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;"  >
			<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="Admin can add new Events like Lunch, Holiday, Meeting etc." />
			</li>
		</div>-->
		

			
		<div id="tellfriend" class="contact_form">
			<a class="close" href="#close" >Close</a>
		</div>

		
		   <?php 
			// Insert Booking in database
			if(isset($_POST['book_now']))
			{
				$name=$_POST['name2'];
				$email=$_POST['email'];
				$service=$_POST['service'];
				$cellno = $_POST['cellno'];
				$sttm = $_POST['st'];
				$edtm = $_POST['edt'];
				
				$stdt = $_POST['bookdate'];
				
				$dt = $stdt;
				$p1 = stripos($dt, "-");
				$p2 = strripos($dt, "-");
				
				$y = substr($dt, 0, $p1);
			
				$m = substr($dt, 0, $p2);
				$m = substr($m, $p1+1);
				if($m < 10){ $m = "0".$m; }
				
				$d = substr($dt, $p2+1);
				if($d < 10){ $d = "0".$d; }
				
				$stdt = $y."-".$m."-".$d;

				$eddt = $stdt;
				
				$desc=$_POST['desc'];

				global $wpdb;
			  	$table_name = $wpdb->prefix . "booked_appointments";
				if($app_add_flag == "true")
				{
				$insert_booking = "INSERT INTO  $table_name (
					`bk_ap_id` ,
					`bk_ap_name` ,
					`bk_ap_email` ,
					`bk_ap_service` ,
					`bk_ap_cellno` ,
					`bk_ap_sttime` ,
					`bk_ap_edtime` ,
					`bk_ap_stdate` ,
					`bk_ap_eddate` ,
					`bk_ap_desc`
					)
					VALUES (
					NULL ,  '$name',  '$email',  '$service',  '$cellno',  '$sttm',  '$edtm',  '$stdt',  '$eddt',  '$desc'
					);";
				$wpdb->query($insert_booking);
				}
			}
		?>


		<!-- --------------------------------Booking Form Start---------------------------------------------->
		<div id="forbooking">
		<div id="tellfriend" class="contact_form">
			<a class="close" href="#close" >Close</a>
			<form name="myform"id='tellafriend_form' method="post" action=""  >
		
				<label for="from">Name:</label>
				<input class="std_input" type="text" id="name2" name="name2" size="30" maxlength="30" value="" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Provide booking person name"/>
				<br>
				
				<label for="from">E-mail:</label>
				<input class="std_input" type="text" id="email" name="email" size="30" maxlength="30" value="" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Provide booking person's email "/>
				<br>
				
				<label for="from">Service:</label><br>
				<select name="service">
					<?php 
					global $wpdb;
					 	$table_name = $wpdb->prefix . "services";
						$res=$wpdb->get_results("select * From $table_name");
						if($res == NULL)
					    {
						echo '<option>No services</option>';
					    }
					else 
					  {
					  	foreach($res as $r)
					    {
							echo '<option>'.$r->service_name.'</option>';
						}
					  }
					?>
				</select><img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Select service for booking"/>
				<br>
				
				<label for="from">Cell Number:</label>
				<input class="std_input" type="text" id="cellno" name="cellno" size="30" maxlength="30" value="" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Provide booking person cellphone number"/>
				<br>
				
				
				<label for="to">Start Time:</label>
				<input class="std_input" readonly="" type="text" id="st" name="st" size="30" maxlength="30" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Your booking service start time"/>
				<br />
		
				<label for="subject" >End Time:</label>
				<input class="std_input" readonly="" type="text" id="edt" name="edt" size="40" maxlength="35" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Your booking service end time"/>
				<br />			
				<label for="subject" >Date:</label><br />
				<input type="text" readonly="" class="std_input" name="bookdate" id="bookdate" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Your booking date"/>
				<br />
				
				<label for="message">Descritpion:</label>
				<textarea id="desc1" name="desc"  rows="18" cols="40"></textarea>
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Here you can describe your booking"/>
				<input name="book_now" type="submit" class="form_but" id="book_now" value="BooK Now"/>
				<input type="submit" name="cancel" class="form_but" value="Cancel"/>
			</form>	
		</div>
	 </div>	
		   
		<!-- --------------------------------Booking Form end---------------------------------------------->
								<?php
								
										global $wpdb;
										$table_name = $wpdb->prefix . "calendar_event";	
										$x = $wpdb->get_results("select * from $table_name");
										foreach( $x as $xx)
										{
											$xtitle[] = $xx->ev_title;
											$xst[] =  $xx->ev_start_time;
											$xet[] = $xx->ev_end_time;
										}
								?>	
								
			<script type='text/javascript'>
						jQuery.fn.fadeToggle = function(speed, easing, callback) {
						  return this.animate({opacity: 'toggle'}, speed, easing, callback);  
						};
						
					$(document).ready(function() {
							
							//.fullCalendar( 'changeView', viewName );
							
							$('#tellfriend').hide();
							$('#forbooking').hide();
							
							$('li input.email, #tellfriend a.close').click(function() {
							    $("#tellfriend").fadeToggle('slow');
								$('#forbooking').hide();
							});
								
							$('#everyday').click(function()
							{
							 var $divToHide = $('div#hidedate');
							 if (this.checked){
								$divToHide.hide(); 
							  	if($('#startdate').uncheck){
									$("#startdate").after('<span class="error">Select date First.</span>');
									$("#desc").val() = "everyday";
								}
							}	
              				else
							{
							   $divToHide.show();
							}
							});	
							
							
							$('#tellfriend').hide();
							$('li input.email, #tellfriend a.close').click(function() { });
							
							var date = new Date("Y-m-d");
							var d = date.getDate();
							var m = date.getMonth();
							var y = date.getFullYear();

							
							var calendar = $('#calendar').fullCalendar({
								header: {
											left: 'prev,next today',
											center: 'title',
											right: 'agendaDay,agendaWeek',
										},
								
								<?php 
									global $wpdb;
									$table_name = $wpdb->prefix . "calendar_setting";
									$setting_data = $wpdb->get_row("select * from $table_name");
								?>
								defaultView: '<?php echo $setting_data->cal_view; ?>',
								
								selectable: true,
								selectHelper: true,
								select: function(start, end, allDay) 
								{
									$("#forbooking").fadeToggle('slow');	// showing booking form
									$('#tellfriend').hide();
									
									
									var start_time_hours = start.getHours();
									
									if(start_time_hours < 10) { start_time_hours = "0" + start_time_hours; }
									var start_time_minutes = start.getMinutes();
									if(start_time_minutes < 10) { start_time_minutes = start_time_minutes + "0"; }
									
									// adding AM-PM in Start Time
									var bk_st_time = start_time_hours + ':' + start_time_minutes;
									if(start_time_hours < 12){ bk_st_time = bk_st_time + "AM";} else { bk_st_time = bk_st_time + "PM";}
									document.myform.st.value = bk_st_time;

									var end_time_hours = end.getHours();
									var end_time_minutes = end.getMinutes();
									if(end_time_hours < 10) { end_time_hours = "0" + end_time_hours; }
									if(end_time_minutes < 10) { end_time_minutes = "0" + end_time_minutes; }
									
									// adding AM-PM in End Time
									var bk_end_time = end_time_hours + ':' + end_time_minutes;
									if(end_time_hours < 12){ bk_end_time = bk_end_time + "AM";} else { bk_end_time = bk_end_time + "PM";}
									document.myform.edt.value = bk_end_time;
									
									var mm = start.getMonth()+1;
									
									var booking_date = start.getFullYear() + '-'+ mm + '-' + start.getDate();
									document.myform.bookdate.value = booking_date;
									
									if (title)
									{
										calendar.fullCalendar('renderEvent',
											{
												title: title,
												start: start,
												end: end,
												allDay: allDay
											},
											true // make the event "sticky"
										);
									}
									calendar.fullCalendar('Unselect');
								},
								
								editable: false,

								events: [
									<?php  /*********************************Booked Appointment Showing************************/
										   global $wpdb;
										   $table_name = $wpdb->prefix . "booked_appointments";
											$event = $wpdb->get_results("select * from $table_name");
											foreach($event as $eve)
											{
												// show only pending and approved appointments
												if($eve->bk_ap_status == 'pending' || $eve->bk_ap_status == 'approved')	
												{
													$app_name=$eve->bk_ap_name;
													$app_sttime=$eve->bk_ap_sttime;
													$app_edtime=$eve->bk_ap_edtime;
													$app_stdate=$eve->bk_ap_stdate;
													
													$bookeddate = $eve->bk_ap_stdate;
													$y = substr($bookeddate,0,4);
													$m = substr($bookeddate,5,2);
													$d = substr($bookeddate,8,2);
													?>
													{
													<?php 
															$app_sttime = substr($app_sttime,0,5);
															$app_sttime = substr_replace($app_sttime,", ",2,1);
															
															$app_edtime = substr($app_edtime,0,5);
															$app_edtime = substr_replace($app_edtime,", ",2,1);
													?>
														title: '<?php echo "Booked By: ".$app_name; ?>',
															
														start: new Date(<?php echo $y; ?>, <?php echo $m-1; ?>, <?php echo $d; ?>, <?php echo $app_sttime; ?>),
																
														end: new Date(<?php echo $y; ?>, <?php echo $m-1; ?>, <?php echo $d; ?>, <?php echo $app_edtime; ?>),
													
														allDay: false
													},
												<?php
												} // end if
											} // end of foreach
												?>
										],
										
					 eventSources: [
								 	{
								events: [
										<?php

										 /**********************************Event Showing************************/
										global $wpdb;
										$table_name = $wpdb->prefix . "calendar_event";
										$x = $wpdb->get_results("select * from $table_name");

									if($x) // if any event data
									{
										// fetch rows
										$cnt = 0;
										foreach( $x as $xx)
										{
										
											$xtitle =  $xx->ev_title;
											//time
											$xst =  $xx->ev_start_time;
											$xet = $xx->ev_end_time;
											
											// spliting date into y , m , d
											$xstartdate = $xx->ev_start_date;
											
											$sy = substr($xstartdate,0,4);
											$sm = substr($xstartdate,5,2);
											$sd = substr($xstartdate,8,2);
											
											$xenddate = $xx->ev_end_date;
											$ey = substr($xenddate,0,4);
											$em = substr($xenddate,5,2);
											$ed = substr($xenddate,8,2);	
											
											/*$date1 = new DateTime($xstartdate);
											$date2 = new DateTime($xenddate);
											
											$interval = $date1->diff($date2);
											//$diff =  "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
											
											$y = $interval->y;
											$m = $interval->m;
											$d = $interval->d;
											$d = ($y*365) + ($m*30) + $d;*/
											
											$date1 = $xstartdate;
											$date2 = $xenddate;
											
											$diff = abs(strtotime($date2) - strtotime($date1));
											
											$y = floor($diff / (365*60*60*24));
											$m = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											$d = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
											
											$d = ($y*365) + ($m*30) + $d;
																						
											/*echo "<script>alert(".$sm.")</script>";*/

											for($j=0; $j<=$d; $j++)
											{
											?>
												{
													title: '<?php echo "Event: ".$xtitle; ?>',
															
													start: new Date(<?php echo $sy; ?>, <?php echo $sm-1; ?>, <?php echo $sd+$j; ?>, <?php echo $xst; ?>),
						
													end: new Date(<?php echo $sy; ?>, <?php echo $sm-1; ?>, <?php echo $sd+$j; ?>, <?php echo $xet; ?>),
													
													allDay: false
												},
											<?php
											} // end for
											
										} // foreach end
										
									} //if any event data value
								?>
								],
					            textColor: 'yellow',
								backgroundColor: 'black',
							}
						]
					});
			});
			</script>
			<div id='calendar'></div>
