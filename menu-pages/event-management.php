<?php
?>
<hr size=2>
	<h2>Event Management
	<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="Manage/Delet events like lunch , holidays , meetings etc."/>
	</h2>
		<div class="social_links" >
			<input class="email" href="#emailpopup" type="button" value="Add An Event" id="book-event-button"  
			style="margin-left:5px; margin-top:0px; width:130px;
			height:30px;
					background-color: #93ba31;
					border: 3px solid #afdd39;
					color: #fff;
					font: bold 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;"  >
			<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="Admin can add new Events like Lunch, Holiday, Meeting etc." />
		</div>
	<hr size=2>

<script type='text/javascript'>
	jQuery.fn.fadeToggle = function(speed, easing, callback) {
		  return this.animate({opacity: 'toggle'}, speed, easing, callback);  
	};
						
	$(document).ready(function() {

		$('#tellfriend').hide();
						
		$('#book-event-button').click(function() {
			    $("#tellfriend").fadeToggle('slow');
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
	});
</script>
		
	 <!-- --------------------------------Event Form Start---------------------------------------------->
			
		<div id="tellfriend" class="contact_form">
			<a class="close" href="#close" >Close</a>
			<form id='tellafriend_form' method="post" action="#" name="tellafriend_form" >
				
				<label for="from">Title:</label><br />
				<input class="std_input" type="text" id="title" name="title" size="28" maxlength="50" value=""  />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Give an event title here"/>
				<br><br>
				
				<label for="to">Start Time :</label>
				<!-- <input class="std_input" type="text" id="st" name="st" size="40" maxlength="35" /> -->
				<select class="std_input" name="st" id="st" style="margin-left:1px;">
						  <option value="-1" >-Day Closed-</option>
						  <option value="0, 00">12:00 am</option>
						  <option value="0, 30">12:30 am</option>
						  <option value="1, 00">1:00 am</option>
						  <option value="1, 30">1:30 am</option>
						  <option value="2, 00">2:00 am</option>
						  <option value="2, 30">2:30 am</option>
						  <option value="3, 00">3:00 am</option>
						  <option value="3, 30">3:30 am</option>
						  <option value="4, 00">4:00 am</option> 
						  <option value="4, 30">4:30 am</option>
						  <option value="5, 00">5:00 am</option>
						  <option value="5, 30">5:30 am</option>
						  <option value="6, 00" selected="selected">6:00 am</option>
						  <option value="6, 30">6:30 am</option>
						  <option value="7, 00" >7:00 am</option>
						  <option value="7, 30">7:30 am</option>
						  <option value="8, 00">8:00 am</option>
						  <option value="8, 30">8:30 am</option>
						  <option value="9, 00">9:00 am</option>
						  <option value="9, 30">9:30 am</option>
						  <option value="10, 00">10:00 am</option>
						  <option value="10, 30">10:30 am</option>
						  <option value="11, 00">11:00 am</option>
						  <option value="11, 30">11:30 am</option>
						  <option value="12, 00">12:00 pm</option>
						  <option value="12, 30">12:30 pm</option>
						  <option value="13, 00">1:00 pm</option>
						  <option value="13, 30">1:30 pm</option>
						  <option value="14, 00">2:00 pm</option>
						  <option value="14, 30">2:30 pm</option>
						  <option value="15, 00">3:00 pm</option>
						  <option value="15, 30">3:30 pm</option>
						  <option value="16, 00">4:00 pm</option>
						  <option value="16, 30">4:30 pm</option>
						  <option value="17, 00">5:00 pm</option>
						  <option value="17, 30">5:30 pm</option>
						  <option value="18, 00">6:00 pm</option>
						  <option value="18, 30">6:30 pm</option>
						  <option value="19, 00">7:00 pm</option>
						  <option value="19, 30">7:30 pm</option>
						  <option value="20, 00">8:00 pm</option>
						  <option value="20, 30">8:30 pm</option>
						  <option value="21, 00">9:00 pm</option>
						  <option value="21, 30">9:30 pm</option>
						  <option value="22, 00">10:00 pm</option>
						  <option value="22, 30">10:30 pm</option>
						  <option value="23, 00">11:00 pm</option>
						  <option value="23, 30">11:30 pm</option>
			  </select><img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Select start time"/>
		    <br />
			
				<label for="subject" style="margin-left:4px;">End Time : </label>
				<select class="std_input" name="et" id="et" >
						  <option value="-1" >-Day Closed-</option>
						  <option value="0, 00">12:00 am</option>
						  <option value="0, 30">12:30 am</option>
						  <option value="1, 00">1:00 am</option>
						  <option value="1, 30">1:30 am</option>
						  <option value="2, 00">2:00 am</option>
						  <option value="2, 30">2:30 am</option>
						  <option value="3, 00">3:00 am</option>
						  <option value="3, 30">3:30 am</option>
						  <option value="4, 00">4:00 am</option> 
						  <option value="4, 30">4:30 am</option>
						  <option value="5, 00">5:00 am</option>
						  <option value="5, 30">5:30 am</option>
						  <option value="6, 00" selected="selected">6:00 am</option>
						  <option value="6, 30">6:30 am</option>
						  <option value="7, 00" >7:00 am</option>
						  <option value="7, 30">7:30 am</option>
						  <option value="8, 00">8:00 am</option>
						  <option value="8, 30">8:30 am</option>
						  <option value="9, 00">9:00 am</option>
						  <option value="9, 30">9:30 am</option>
						  <option value="10, 00">10:00 am</option>
						  <option value="10, 30">10:30 am</option>
						  <option value="11, 00">11:00 am</option>
						  <option value="11, 30">11:30 am</option>
						  <option value="12, 00">12:00 pm</option>
						  <option value="12, 30">12:30 pm</option>
						  <option value="13, 00">1:00 pm</option>
						  <option value="13, 30">1:30 pm</option>
						  <option value="14, 00">2:00 pm</option>
						  <option value="14, 30">2:30 pm</option>
						  <option value="15, 00">3:00 pm</option>
						  <option value="15, 30">3:30 pm</option>
						  <option value="16, 00">4:00 pm</option>
						  <option value="16, 30">4:30 pm</option>
						  <option value="17, 00">5:00 pm</option>
						  <option value="17, 30">5:30 pm</option>
						  <option value="18, 00">6:00 pm</option>
						  <option value="18, 30">6:30 pm</option>
						  <option value="19, 00">7:00 pm</option>
						  <option value="19, 30">7:30 pm</option>
						  <option value="20, 00">8:00 pm</option>
						  <option value="20, 30">8:30 pm</option>
						  <option value="21, 00">9:00 pm</option>
						  <option value="21, 30">9:30 pm</option>
						  <option value="22, 00">10:00 pm</option>
						  <option value="22, 30">10:30 pm</option>
						  <option value="23, 00">11:00 pm</option>
						  <option value="23, 30">11:30 pm</option>
			  </select>
			  <img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Select end time"/>
				<br>
		        
				<label for="from">Start Date:</label>
				<input type="text" name="startdate" id="startdate" class="tcal" size="12" value="" style="height:28px; margin-left:5px;" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Pick start date through calendar ican"/>
				<br />

				<div id="hidedate"><br />
					<label for="from" >End Date:</label>
					<input type="text" name="enddate" id="enddate" class="tcal" size="12" value="" style="height:28px; margin-left:10px;" />
					<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "Pick end date through calendar ican"/>
				</div>
				<br>
			
				<label for="from">Every Day :</label>
				<input  type="checkbox" name="everyday" id="everyday"  size="1" value="everyday" />
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip" title= "Check to create everyday event forever on calendar"/>
				<br /><br/>
				
				<label for="message">Descritpion</label>
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title= "You can describe event here "/>
				<textarea id="desc" name="desc"  rows="18" cols="40"></textarea>
				<input type="submit" id="submit_event" name="submit_event" class="form_but" value="Submit"/>
				<input type="submit" name="cancel" class="form_but" value="Cancel"/>
			</form>	
		</div>
		<!-- --------------------------------Event Form end---------------------------------------------->
		 
		    <form action="" method="POST">
				<table width="100%" border="0">
				  <tr>
				  	<th width="31" align="left"><strong>No.</strong></th>
					<th width="201" align="left"><strong>Evant-Title</strong></th>
					<th width="181" align="left"><strong>Description</strong></th>
					<th width="147" align="left"><strong>Start-Time</strong></th>
					<th width="131" align="left"><strong>End-Time</strong></th>
					<th width="131" align="left"><strong>Start-Date</strong></th>
					<th width="131" align="left"><strong>End-Date</strong></th>
					<th width="113" align="left"><strong>Total-Days</strong></th>
					<th width="110">&nbsp;</th>
				  </tr>
				  <?php
				  	// Fatching Event List
				  	global $wpdb;
					$table_name = $wpdb->prefix . "calendar_event";
					$res=$wpdb->get_results("select * From $table_name");
					if($res == NULL)
					{
						?><br>No Event Created Yet.<?php
					}
					else 
					{
					$sn = 1;
					foreach($res as $r)
					{
					
					// every day event calculation
						/*$date1 = new DateTime($r->ev_start_date);
						$date2 = new DateTime($r->ev_end_date);
											
						$interval = $date1->diff($date2);
						

						$y = $interval->y;
						$m = $interval->m;
						$d = $interval->d;*/
						
						$date1 = "$r->ev_start_date";
						$date2 = "$r->ev_end_date";
						
						$diff = abs(strtotime($date2) - strtotime($date1));
						
						$y = floor($diff / (365*60*60*24));
						$m = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
						$d = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
						$td = ($y*360) + ($m*30) + ($d) + 1;
				  ?>
				  
				  <tr>
				  	<td><?php echo $sn."."; ?></td>
				    <td><?php echo $r->ev_title; ?></td>
					<td><?php echo $r->ev_desc; ?></td>
				    <td>
						<?php $est = $r->ev_start_time; 
							  
							  $est = str_ireplace(", ",":",$est);
							  $cp = strrpos($est,":",0);
							  $sh = substr($est,0,$cp);
							  if($sh<10)
							  { $sh = "0".$sh; }
							  $sm = substr($est,$cp+1);
							  $stm = $sh.":".$sm;
							  if($sh<12)
							  { echo $stm."AM"; }
							  else
							  { echo $stm."PM"; }
						?>
					</td>
				    <td><?php $est = $r->ev_end_time; 
							  $est = str_ireplace(", ",":",$est);
							  $cp = strrpos($est,":",0);
							  $sh = substr($est,0,$cp);
							  if($sh<10)
							  { $sh = "0".$sh; }
							  $sm = substr($est,$cp+1);
							  $stm = $sh.":".$sm;
							  if($sh<12)
							  { echo $stm."AM"; }
							  else
							  { echo $stm."PM"; }
						?>
					</td>
					<td><?php if($td>700) {echo "Everyday";} else {echo $r->ev_start_date;} ?></td>
					
					<td><?php if($td>700) {echo "Everyday";} else {echo $r->ev_end_date;} ?></td>
					
				    <td><?php if($td>700) {echo "Everyday";} else {echo $td." Days";}	 ?></td>
				    <td>
				      <input type="checkbox" name="event[]" value="<?php echo $r->ev_id; ?>" />
				    </td>
			      </tr>
				  <?php 
				  $sn++;
				  } // end foreach
				  } // end else
				  
				  // Deleting Event List
				  if($_POST['delete_event'])
					{
						global $wpdb;
						$table_name = $wpdb->prefix . "calendar_event";
						$count = count($_POST['event']);
						
						for($i=0;$i<$count;$i++)
						{
							$del_id = $_POST['event'][$i];
							$delete_query = "DELETE FROM $table_name WHERE ev_id='$del_id'";
							$wpdb->query($delete_query);
						}
						$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
						echo '<script>location.href="'.$c_url.'";</script>';
					}
				  
				  ?>
				  <tr>
				  	<td>&nbsp;</td>
				    <td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><label>
					  <input name="delete_event" type="submit" id="delete_event" value="Delete" />
					</label></td>
				  </tr>
			  </table>
			  <hr size=2>
			</form>



<?php 
			// Insert Event in database
			if(isset($_POST['submit_event']))
			{  
				$ev_title=$_POST['title'];
				$ev_st=$_POST['st'];
				$ev_et=$_POST['et'];
				$ev_start_date=$_POST['startdate'];
				$ev_end_date=$_POST['enddate'];
				
				if($_POST['everyday'] == 'everyday')
				{
					
					$yr = substr($ev_start_date,0,4)+2;		//add 2 year in everyday event
					$mn = substr($ev_start_date,5,2);
					$dt = substr($ev_start_date,8,2);
					$ev_end_date = $yr."-".$mn."-".$dt;
				}
				
				$ev_desc=$_POST['desc'];
				
				global $wpdb;
			  	$table_name = $wpdb->prefix . "calendar_event";
				if($event_add_flag =="true")
				{
				$insert_event = "INSERT INTO $table_name (
									`ev_id` ,
									`ev_title` ,
									`ev_start_time` ,
									`ev_end_time` ,
									`ev_start_date` ,
									`ev_end_date` ,
									`ev_desc`
									)
									VALUES (
									'', '$ev_title', '$ev_st', '$ev_et', '$ev_start_date', '$ev_end_date', '$ev_desc'
									);
									
									";
								
				$wpdb->query($insert_event);
				}
				$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
					?> <script>location.href="<?php echo $c_url;?>"</script> <?php
			}
		?>