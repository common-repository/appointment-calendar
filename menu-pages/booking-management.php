<?php

?>
<h2>Booking Managment
	<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="This page allows admin to manage all bookings. Admin can filter booking by its status (All, Pending, Approved, Cancelled)."/>
</h2>
	
	<form action="" method="post">
	<div style="float:right; margin-top:-30px;">
		<select name="status_fillter" size="1">
		<option value="none">All</option>
		 <option value="pending">Pending</option>
		 <option value="approved">Approved</option>
		 <option value="cancelled">Cancelled</option>
		</select>
		<input class="button-secondary" name="fillter_ap" type="submit" value="Filter" />
	</div>
	</form>
	<?php
	echo  "<hr size=2>";
 					global $wpdb;
					$table_name = $wpdb->prefix . "booked_appointments";
					$event = $wpdb->get_results("select * from $table_name");
					$row=1;
					
					?>
					<form action="" method="post">
					

					  <table width="100%" border="0">
                        <tr>
                          <th width="20" align="left"><strong>No.</strong></th>
                          <th width="85" align="left"><strong>Name</strong></th>
						  <th width="245" align="left"><strong>Description</strong></th>
                          <th width="46" align="left"><strong>Email</strong></th>
                          <th width="74" align="left"><strong>Cell-Phone</strong></th>
                          <th width="80" align="left"><strong>Service</strong></th>
                          <th width="136" align="left"><strong>Start-Time</strong></th>
                          <th width="135" align="left"><strong>End-Time</strong></th>
                          <th width="130" align="left"><strong>Date</strong></th>
                          <th width="40" align="left"><strong>Status</strong></th>
                          <th width="177" align="left"><strong>Edit</strong></th>
                          <th width="177" align="left">&nbsp;</th>
                        </tr>
                        <?php 
						foreach($event as $eve)
						{
							if(isset($_POST['fillter_ap']))	
							{
								$status = $_POST['status_fillter'];
								if($status != "none")
								{
									if($eve->bk_ap_status == $status )
									{
									?>
									<tr>
									  <td><?php echo $row."."; ?></td>
									  <td><?php echo $eve->bk_ap_name; ?></td>
									  <td><?php echo $eve->bk_ap_desc; ?></td>
									  <td><?php echo $eve->bk_ap_email; ?></td>
									  <td><?php echo $eve->bk_ap_cellno; ?></td>
									  <td><?php echo $eve->bk_ap_service; ?></td>
									  <td><?php echo $eve->bk_ap_sttime; ?></td>
									  <td><?php echo $eve->bk_ap_edtime; ?></td>
									  <td><?php echo $eve->bk_ap_stdate; ?></td>
									  <td><?php echo $eve->bk_ap_status; ?></td>
									  <td><?php 
 					$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."&edit_appointment=".$eve->bk_ap_id;;?>
						  <a href="<?php echo $c_url; ?>">Edit</a></td>
									  <td><input name="ap_id[]" type="checkbox" value="<?php echo $eve->bk_ap_id; ?>"/></td>
									</tr>
									<?php
									}
								}
								else	// is status is none
								{
									 ?>
									<tr>
									  <td><?php  echo $row."."; ?></td>
									  <td><?php echo $eve->bk_ap_name; ?></td>
									  <td><?php echo $eve->bk_ap_desc; ?></td>
									  <td><?php echo $eve->bk_ap_email; ?></td>
									  <td><?php echo $eve->bk_ap_cellno; ?></td>
									  <td><?php echo $eve->bk_ap_service; ?></td>
									  <td><?php echo $eve->bk_ap_sttime; ?></td>
									  <td><?php echo $eve->bk_ap_edtime; ?></td>
									  <td><?php echo $eve->bk_ap_stdate; ?></td>
									  <td><?php echo $eve->bk_ap_status; ?></td>
									  <td></td>
									  <td></td>
									</tr>
									<?php
								}
							}
							else
							{
				          ?>
                        <tr>
                          <td><?php  echo $row."."; ?></td>
                          <td><?php echo $eve->bk_ap_name; ?></td>
						  <td><?php echo $eve->bk_ap_desc; ?></td>
                          <td><?php echo $eve->bk_ap_email; ?></td>
                          <td><?php echo $eve->bk_ap_cellno; ?></td>
                          <td><?php echo $eve->bk_ap_service; ?></td>
                          <td><?php echo $eve->bk_ap_sttime; ?></td>
                          <td><?php echo $eve->bk_ap_edtime; ?></td>
                          <td><?php echo $eve->bk_ap_stdate; ?></td>
                          <td><?php echo $eve->bk_ap_status; ?></td>
                          <td>
						  <?php 
 					$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."&edit_appointment=".$eve->bk_ap_id;;?>
						  <a href="<?php echo $c_url; ?>">Edit</a></td>
                          <td></td>
                        </tr>
                        <?php
							} //end else
							$row++;
						} // end foreach
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
                          <td>&nbsp;</td>
                          <td colspan="3" align="right">
						  <?php
						  if(isset($_POST['fillter_ap']))
						  {
						  	$set_fillter = $_POST['status_fillter'];
							if($set_fillter == 'pending')
							{
						  	?>
                            <input name="approve_app" type="submit" id="approve_app" value="Approve" />
							<input name="cancel_app" type="submit" id="cancel_app" value="Cancel" />
							<?php
							}
							if($set_fillter == 'approved')
							{
						  	?>
						  	<input name="cancel_app" type="submit" id="cancel_app" value="Cancel" />
							<?php
							}
							if($set_fillter == 'cancelled')
							{
						  	?>
						  	<input name="delete_app" type="submit" id="delete_app" value="Delete" />
							<?php
							}
						  }
						  ?>
						  </td>
                        </tr>
                      </table>
					  <hr size=2>
					  <?php
					  
					  // Show Appointment Edit Form
						if(isset($_GET['edit_appointment']))
						{
							if($_GET['edit_appointment']!= "NULL")
							{
							$grab_id = $_GET['edit_appointment'];
							global $wpdb;
							$table_name = $wpdb->prefix . "booked_appointments";
							$data = $wpdb->get_row("select * from $table_name where bk_ap_id = '$grab_id'");
							?>
							<table width="500" border="0">
							  <tr>
								<th width="67">Fields</th>
								<th width="10">&nbsp;</th>
								<th width="401">Values</th>
							  </tr>
							  <tr>
								<td>Name</td>
								<td>:</td>
								<td><input name="pname" type="text" id="pname" value="<?php echo $data->bk_ap_name; ?>" /></td>
							  </tr>
							  <tr>
								<td>Email</td>
								<td>:</td>
								<td><input name="pemail" type="text" id="pemail" value="<?php echo $data->bk_ap_email; ?>" /></td>
							  </tr>
							  <tr>
								<td>Sevice</td>
								<td>:</td>
								<?php
								// fetching service
								global $wpdb;
								$table_name = $wpdb->prefix . "services";
								$ser = $wpdb->get_results("select * from $table_name");
								?>
								<td>
									<select name="pservice">
										<?php
											foreach($ser as $aser)
											{
												$bkser = $data->bk_ap_service;
												?><option value="<?php echo $aser->service_name?>" <?php if($bkser == $aser->service_name) echo "selected"; ?> > <?php echo $aser->service_name?></option><?php
											}
										?>
									 </select>								</td>
							  </tr>
							  <tr>
								<td>Cell Number </td>
								<td>:</td>
								<td><input name="pcellno" type="text" id="pcellno" value="<?php echo $data->bk_ap_cellno; ?>" /></td>
							  </tr>
							  <tr>
								<td>Start Time </td>
								<td>:</td>
								<td><?php $st = $data->bk_ap_sttime; ?>
									<select name="pst" id="pst" >
									  <!--<option value="-1" >-Day Closed-</option>-->
									  <option value="12:00AM" <?php if($st == "12:00AM") echo "selected"; ?> >12:00 am</option>
									  <option value="12:30AM" <?php if($st == "12:30AM") echo "selected"; ?> >12:00 am</option>
									  <option value="01:00AM" <?php if($st == "1:00AM") echo "selected"; ?> >1:00 am</option>
									  <option value="01:30AM" <?php if($st == "1:30AM") echo "selected"; ?> >1:30 am</option>
									  <option value="02:00AM" <?php if($st == "2:00AM") echo "selected"; ?> >2:00 am</option>
									  <option value="02:30AM" <?php if($st == "2:30AM") echo "selected"; ?> >2:30 am</option>
									  <option value="03:00AM" <?php if($st == "3:00AM") echo "selected"; ?> >3:00 am</option>
									  <option value="03:30AM" <?php if($st == "3:30AM") echo "selected"; ?> >3:30 am</option>
									  <option value="04:00AM" <?php if($st == "4:00AM") echo "selected"; ?> >4:00 am</option> 
									  <option value="04:30AM" <?php if($st == "4:30AM") echo "selected"; ?> >4:30 am</option>
									  <option value="05:00AM" <?php if($st == "5:00AM") echo "selected"; ?> >5:00 am</option>
									  <option value="05:30AM" <?php if($st == "5:30AM") echo "selected"; ?> >5:30 am</option>
									  <option value="06:00AM" <?php if($st == "6:00AM") echo "selected"; ?> >6:00 am</option>
									  <option value="06:30AM" <?php if($st == "6:30AM") echo "selected"; ?> >6:30 am</option>
									  <option value="07:00AM" <?php if($st == "7:00AM") echo "selected"; ?> >7:00 am</option>
									  <option value="07:30AM" <?php if($st == "7:30AM") echo "selected"; ?> >7:30 am</option>
									  <option value="08:00AM" <?php if($st == "8:00AM") echo "selected"; ?> >8:00 am</option>
									  <option value="08:30AM" <?php if($st == "8:30AM") echo "selected"; ?> >8:30 am</option>
									  <option value="09:00AM" <?php if($st == "9:00AM") echo "selected"; ?> >9:00 am</option>
									  <option value="09:30AM" <?php if($st == "9:30AM") echo "selected"; ?> >9:30 am</option>
									  <option value="10:00AM" <?php if($st == "10:00AM") echo "selected"; ?> >10:00 am</option>
									  <option value="10:30AM" <?php if($st == "10:30AM") echo "selected"; ?> >10:30 am</option>
									  <option value="11:00AM" <?php if($st == "11:00AM") echo "selected"; ?> >11:00 am</option>
									  <option value="11:30AM" <?php if($st == "11:30AM") echo "selected"; ?> >11:30 am</option>
									  <option value="12:00AM" <?php if($st == "12:00AM") echo "selected"; ?> >12:00 pm</option>
									  <option value="12:30AM" <?php if($st == "12:30AM") echo "selected"; ?> >12:30 pm</option>
									  <option value="13:00AM" <?php if($st == "13:00AM") echo "selected"; ?> >1:00 pm</option>
									  <option value="13:30AM" <?php if($st == "13:30AM") echo "selected"; ?> >1:30 pm</option>
									  <option value="14:00AM" <?php if($st == "14:00AM") echo "selected"; ?> >2:00 pm</option>
									  <option value="14:30AM" <?php if($st == "14:30AM") echo "selected"; ?> >2:30 pm</option>
									  <option value="15:00AM" <?php if($st == "15:00AM") echo "selected"; ?> >3:00 pm</option>
									  <option value="15:30AM" <?php if($st == "15:30AM") echo "selected"; ?> >3:30 pm</option>
									  <option value="16:00AM" <?php if($st == "16:00AM") echo "selected"; ?> >4:00 pm</option>
									  <option value="16:30AM" <?php if($st == "16:30AM") echo "selected"; ?> >4:30 pm</option>
									  <option value="17:00AM" <?php if($st == "17:00AM") echo "selected"; ?> >5:00 pm</option>
									  <option value="17:30AM" <?php if($st == "17:30AM") echo "selected"; ?> >5:30 pm</option>
									  <option value="18:00AM" <?php if($st == "18:00AM") echo "selected"; ?> >6:00 pm</option>
									  <option value="18:30AM" <?php if($st == "18:30AM") echo "selected"; ?> >6:30 pm</option>
									  <option value="19:00AM" <?php if($st == "19:00AM") echo "selected"; ?> >7:00 pm</option>
									  <option value="19:30AM" <?php if($st == "19:30AM") echo "selected"; ?> >7:30 pm</option>
									  <option value="20:00AM" <?php if($st == "20:00AM") echo "selected"; ?> >8:00 pm</option>
									  <option value="20:30AM" <?php if($st == "20:30AM") echo "selected"; ?> >8:30 pm</option>
									  <option value="21:00AM" <?php if($st == "21:00AM") echo "selected"; ?> >9:00 pm</option>
									  <option value="21:30AM" <?php if($st == "21:30AM") echo "selected"; ?> >9:30 pm</option>
									  <option value="22:00AM" <?php if($st == "22:00AM") echo "selected"; ?> >10:00 pm</option>
									  <option value="22:30AM" <?php if($st == "22:30AM") echo "selected"; ?> >10:30 pm</option>
									  <option value="23:00AM" <?php if($st == "23:00AM") echo "selected"; ?> >11:00 pm</option>
									  <option value="23:30AM" <?php if($st == "23:30AM") echo "selected"; ?> >11:30 pm</option>
							  </select>
							  </td></tr>
							  <tr>
								<td>End Time</td>
								<td>:</td>
								<td><?php $st = $data->bk_ap_edtime; ?>
								  <select name="pet" id="pet">
                                    <!--<option value="-1" >-Day Closed-</option>-->
                                    <option value="00:00PM" <?php if($st == "12:00pM") echo "selected"; ?> >12:00 am</option>
                                    <option value="00:30PM" <?php if($st == "12:00PM") echo "selected"; ?> >12:00 am</option>
                                    <option value="01:00PM" <?php if($st == "1:00PM") echo "selected"; ?> >1:00 am</option>
                                    <option value="01:30PM" <?php if($st == "1:30PM") echo "selected"; ?> >1:30 am</option>
                                    <option value="02:00PM" <?php if($st == "2:00PM") echo "selected"; ?> >2:00 am</option>
                                    <option value="02:30PM" <?php if($st == "2:30PM") echo "selected"; ?> >2:30 am</option>
                                    <option value="03:00PM" <?php if($st == "3:00PM") echo "selected"; ?> >3:00 am</option>
                                    <option value="03:30PM" <?php if($st == "3:30PM") echo "selected"; ?> >3:30 am</option>
                                    <option value="04:00PM" <?php if($st == "4:00PM") echo "selected"; ?> >4:00 am</option>
                                    <option value="04:30PM" <?php if($st == "4:30PM") echo "selected"; ?> >4:30 am</option>
                                    <option value="05:00PM" <?php if($st == "5:00PM") echo "selected"; ?> >5:00 am</option>
                                    <option value="05:30PM" <?php if($st == "5:30PM") echo "selected"; ?> >5:30 am</option>
                                    <option value="06:00PM" <?php if($st == "6:00PM") echo "selected"; ?> >6:00 am</option>
                                    <option value="06:30PM" <?php if($st == "6:30PM") echo "selected"; ?> >6:30 am</option>
                                    <option value="07:00PM" <?php if($st == "7:00PM") echo "selected"; ?> >7:00 am</option>
                                    <option value="07:30PM" <?php if($st == "7:30PM") echo "selected"; ?> >7:30 am</option>
                                    <option value="08:00PM" <?php if($st == "8:00PM") echo "selected"; ?> >8:00 am</option>
                                    <option value="08:30PM" <?php if($st == "8:30PM") echo "selected"; ?> >8:30 am</option>
                                    <option value="09:00PM" <?php if($st == "9:00PM") echo "selected"; ?> >9:00 am</option>
                                    <option value="09:30PM" <?php if($st == "9:30PM") echo "selected"; ?> >9:30 am</option>
                                    <option value="10:00PM" <?php if($st == "10:00PM") echo "selected"; ?> >10:00 am</option>
                                    <option value="10:30PM" <?php if($st == "10:30PM") echo "selected"; ?> >10:30 am</option>
                                    <option value="11:00PM" <?php if($st == "11:00PM") echo "selected"; ?> >11:00 am</option>
                                    <option value="11:30PM" <?php if($st == "11:30PM") echo "selected"; ?> >11:30 am</option>
                                    <option value="12:00PM" <?php if($st == "12:00PM") echo "selected"; ?> >12:00 pm</option>
                                    <option value="12:30PM" <?php if($st == "12:30PM") echo "selected"; ?> >12:30 pm</option>
                                    <option value="13:00PM" <?php if($st == "13:00PM") echo "selected"; ?> >1:00 pm</option>
                                    <option value="13:30PM" <?php if($st == "13:30PM") echo "selected"; ?> >1:30 pm</option>
                                    <option value="14:00PM" <?php if($st == "14:00PM") echo "selected"; ?> >2:00 pm</option>
                                    <option value="14:30PM" <?php if($st == "14:30PM") echo "selected"; ?> >2:30 pm</option>
                                    <option value="15:00PM" <?php if($st == "15:00PM") echo "selected"; ?> >3:00 pm</option>
                                    <option value="15:30PM" <?php if($st == "15:30PM") echo "selected"; ?> >3:30 pm</option>
                                    <option value="16:00PM" <?php if($st == "16:00PM") echo "selected"; ?> >4:00 pm</option>
                                    <option value="16:30PM" <?php if($st == "16:30PM") echo "selected"; ?> >4:30 pm</option>
                                    <option value="17:00PM" <?php if($st == "17:00PM") echo "selected"; ?> >5:00 pm</option>
                                    <option value="17:30PM" <?php if($st == "17:30PM") echo "selected"; ?> >5:30 pm</option>
                                    <option value="18:00PM" <?php if($st == "18:00PM") echo "selected"; ?> >6:00 pm</option>
                                    <option value="18:30PM" <?php if($st == "18:30PM") echo "selected"; ?> >6:30 pm</option>
                                    <option value="19:00PM" <?php if($st == "19:00PM") echo "selected"; ?> >7:00 pm</option>
                                    <option value="19:30PM" <?php if($st == "19:30PM") echo "selected"; ?> >7:30 pm</option>
                                    <option value="20:00PM" <?php if($st == "20:00PM") echo "selected"; ?> >8:00 pm</option>
                                    <option value="20:30PM" <?php if($st == "20:30PM") echo "selected"; ?> >8:30 pm</option>
                                    <option value="21:00PM" <?php if($st == "21:00PM") echo "selected"; ?> >9:00 pm</option>
                                    <option value="21:30PM" <?php if($st == "21:30PM") echo "selected"; ?> >9:30 pm</option>
                                    <option value="22:00PM" <?php if($st == "22:00PM") echo "selected"; ?> >10:00 pm</option>
                                    <option value="22:30PM" <?php if($st == "22:30PM") echo "selected"; ?> >10:30 pm</option>
                                    <option value="23:00PM" <?php if($st == "23:00PM") echo "selected"; ?> >11:00 pm</option>
                                    <option value="23:30PM" <?php if($st == "23:30PM") echo "selected"; ?> >11:30 pm</option>
                                  </select></td>
							  </tr>
							  
							  <tr>
							    <td>Date</td>
							    <td>:</td>
							    <td><input name="pdate" type="text" id="pdate" value="<?php echo $data->bk_ap_stdate; ?>" class="tcal" /></td>
						      </tr>
							  <tr>
							    <td>Descritpion</td>
							    <td>:</td>
							    <td><textarea name="pdesc" id="pdesc"><?php echo $data->bk_ap_desc; ?></textarea></td>
						      </tr>
							  <tr>
							    <td>Status</td>
							    <td>:</td>
							    <td>
							      <select name="pstatus">
							        <option value="pending" <?php if($data->bk_ap_status == "pending") echo "SELECTED"; ?>>pending</option>
							        <option value="approved" <?php if($data->bk_ap_status == "approved") echo "SELECTED"; ?>>approved</option>
							        <option value="cancelled" <?php if($data->bk_ap_status == "cancelled") echo "SELECTED"; ?>>cancelled</option>
						          </select>						        </td>
						      </tr>
							  <tr>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
							    <td>
								<input name="up_id" type="hidden" value="<?php echo $data->bk_ap_id; ?>" />
								<input name="update_booking" type="submit" id="update_booking" value="Update" />
						        <input name="Cancel_app" type="submit" id="Cancel_app" value="Cancel" /></td>
						      </tr>
					  </table>
							<?php
							}
						}

					  ?>
					</form>
					
					<?php 
					
					// Cancel Booking  List
				  if($_POST['cancel_app'])
					{
						global $wpdb;
						$table_name = $wpdb->prefix . "booked_appointments";
						$count = count($_POST['ap_id']);
						
						for($i=0;$i<$count;$i++)
						{
							$update_id = $_POST['ap_id'][$i];
							//$delete_query = "Update FROM $table_name WHERE bk_ap_id='$dele_id'";
							$update_app_query = "UPDATE $table_name SET `bk_ap_status` = 'cancelled' WHERE `bk_ap_id` ='$update_id';";
							$wpdb->query($update_app_query);
							
							// send cancel notifications
							include('gmail/user-booking-canceled-notification.php');
							
						}
						$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
						echo '<script>alert("Appointment canceled notification sent."); location.href="'.$c_url.'";</script>';
					}
					
					
				 // Approved Booking List
				 if($_POST['approve_app'])
					{
						global $wpdb;
						$table_name = $wpdb->prefix . "booked_appointments";
						$count = count($_POST['ap_id']);
						
						for($i=0;$i<$count;$i++)
						{
							$update_id = $_POST['ap_id'][$i];
							//$delete_query = "Update FROM $table_name WHERE bk_ap_id='$dele_id'";
							$update_app_query = "UPDATE $table_name SET `bk_ap_status` = 'approved' WHERE `bk_ap_id` ='$update_id';";
							$wpdb->query($update_app_query);
							
							// send approve notifications
							include('gmail/user-booking-approve-notification.php');
						}
						$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
						echo '<script>alert("Appointment approved notification sent."); location.href="'.$c_url.'";</script>';
					}
					
				
				
				// Delete Cancel Appointment
				if($_POST['delete_app'])
				{
					global $wpdb;
						$table_name = $wpdb->prefix . "booked_appointments";
						$count = count($_POST['ap_id']);
						
						for($i=0;$i<$count;$i++)
						{
							$delete_id = $_POST['ap_id'][$i];
							//$delete_query = "Update FROM $table_name WHERE bk_ap_id='$dele_id'";
							$delete_app_query = "DELETE FROM $table_name WHERE `bk_ap_id` = '$delete_id'";
							$wpdb->query($delete_app_query);
						}
						$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
						echo '<script>location.href="'.$c_url.'";</script>';
				}
				
				
				
				// Update Booking List
				 if(isset($_POST['update_booking']))
					{
						$up_id = $_POST['up_id'];
						$bk_ap_name = $_POST['pname'];
						$bk_ap_email = $_POST['pemail'];
						$bk_ap_service = $_POST['pservice'];
						$bk_ap_cellno = $_POST['pcellno'];
						$bk_ap_sttime = $_POST['pst'];
						$bk_ap_edtime = $_POST['pet'];
						$bk_ap_stdate = $_POST['pdate'];
						$bk_ap_eddate = $_POST['pdate'];
						$bk_ap_desc = $_POST['pdesc'];
						$bk_ap_status = $_POST['pstatus'];
						
						global $wpdb;
						$table_name = $wpdb->prefix . "booked_appointments";

						$update_app_query = "UPDATE $table_name SET `bk_ap_name` = '$bk_ap_name',
											`bk_ap_email`   = '$bk_ap_email',
											`bk_ap_cellno`  = '$bk_ap_cellno',
											`bk_ap_service` = '$bk_ap_service',
											`bk_ap_sttime`  = '$bk_ap_sttime',
											`bk_ap_edtime`  = '$bk_ap_edtime',
											`bk_ap_stdate`  = '$bk_ap_stdate',
											`bk_ap_eddate`  = '$bk_ap_eddate',
											`bk_ap_desc`    = '$bk_ap_desc',
											`bk_ap_status`  = '$bk_ap_status' WHERE `bk_ap_id` ='$up_id'";
						$wpdb->query($update_app_query);

						$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."&edit_appointment=NULL";
						echo '<script>location.href="'.$c_url.'";</script>';
					}
					
				if($_POST['Cancel_app'])
				{
					$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."&edit_appointment=NULL";
						echo '<script>location.href="'.$c_url.'";</script>';
				}

?>
