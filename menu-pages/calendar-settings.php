
<hr size=2><h2>Calendar Settings
		<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" style="" class="vtip"  title= "Calendar Settings like time slots, views etc."/>
		</h2><hr size=2>
	
		<?php
			/*inserting calendar settings*/
		if(isset($_POST['save_settings']))
		{
			global $wpdb;
			$table_name = $wpdb->prefix . "calendar_setting";
			$time_slot=$_POST['timeslot'];
			$time_dst=$_POST['dst'];
			$time_det = $_POST['det'];
			$cal_view = $_POST['calview'];
			$insert_setting="INSERT INTO $table_name (`cs_id`, `time_slot`, `day_start_time`, `day_end_time`, `cal_view`)
			 VALUES ('1', '$time_slot', '$time_dst', '$time_det', '$cal_view');";	
			$wpdb->query($insert_setting);
		}
		
		?>
		<?php
		// Updating Calender Settings
		
		if(isset($_POST['update_settings']))
		{
			global $wpdb;
			$table_name = $wpdb->prefix . "calendar_setting";
			
			$up_time_slot=$_POST['timeslot'];
			$up_time_dst=$_POST['dst'];
			$up_time_det = $_POST['det'];
			$up_cal_view = $_POST['calview'];
			
			$update_setting="UPDATE  $table_name SET 
							`time_slot` =  '$up_time_slot',
							`day_start_time` =  '$up_time_dst',
							`day_end_time` =  '$up_time_det',
							`cal_view` = '$up_cal_view' WHERE `cs_id` =1;";	
			$wpdb->query($update_setting);
    	}
		?>
		
		<?php 
			//Saved Settings Selected
			
			global $wpdb;
			$table_name = $wpdb->prefix . "calendar_setting";
			$select_data = $wpdb->get_row("select * from $table_name");
		?>
			<form action="" method="post" name="calset">
				<table width="500" border="0">
				  <tr>
					<th width="104" align="left"><strong>Fields</strong></th>
					<th width="12" align="left">&nbsp;</th>
					<th width="370" align="left"><strong>Values</strong></th>
				  </tr>
				  <tr>
					<td>Time Slots </td>
					<td><label>:</label></td>
					<td><select name="timeslot" id="timeslot">
					  <option value="5" <?php if($select_data->time_slot == '10') echo "selected"; ?> >5 minute</option>
					  <option value="10" <?php if($select_data->time_slot == '10') echo "selected"; ?> >10 minute</option>
                      <option value="15" <?php if($select_data->time_slot == '15') echo "selected"; ?> >15 minute</option>
                      <option value="30" <?php if($select_data->time_slot == '30') echo "selected"; ?> >30 minute</option>
                      <option value="60" <?php if($select_data->time_slot == '60') echo "selected"; ?> >60 minute</option>
                    </select></td>
				  </tr>
				  <tr>
					<td>Day Start Time </td>
					<td>:</td>
					<td>
					<select name="dst" id="dst">
						  <option value="0" <?php if($select_data->day_start_time == '0') echo "selected"; ?> >12:00 am</option>
						  <option value="1" <?php if($select_data->day_start_time == '1') echo "selected"; ?> >1:00 am</option>
						  <option value="2" <?php if($select_data->day_start_time == '2') echo "selected"; ?> >2:00 am</option>
						  <option value="3" <?php if($select_data->day_start_time == '3') echo "selected"; ?> >3:00 am</option>
						  <option value="4" <?php if($select_data->day_start_time == '4') echo "selected"; ?> >4:00 am</option>
						  <option value="5" <?php if($select_data->day_start_time == '5') echo "selected"; ?> >5:00 am</option>
						  <option value="6" <?php if($select_data->day_start_time == '6') echo "selected"; ?> >6:00 am</option>
						  <option value="7" <?php if($select_data->day_start_time == '7') echo "selected"; ?> >7:00 am</option>
						  <option value="8" <?php if($select_data->day_start_time == '8') echo "selected"; ?> >8:00 am</option>
						  <option value="9" <?php if($select_data->day_start_time == '9') echo "selected"; ?> >9:00 am</option>
						  <option value="10" <?php if($select_data->day_start_time == '10') echo "selected"; ?> >10:00 am</option>
						  <option value="11" <?php if($select_data->day_start_time == '11') echo "selected"; ?> >11:00 am</option>
						  <option value="12" <?php if($select_data->day_start_time == '12') echo "selected"; ?> >12:00 pm</option>
						  <option value="13" <?php if($select_data->day_start_time == '13') echo "selected"; ?> >1:00 pm</option>
						  <option value="14" <?php if($select_data->day_start_time == '14') echo "selected"; ?> >2:00 pm</option>
						  <option value="15" <?php if($select_data->day_start_time == '15') echo "selected"; ?> >3:00 pm</option>
						  <option value="16" <?php if($select_data->day_start_time == '16') echo "selected"; ?> >4:00 pm</option>
						  <option value="17" <?php if($select_data->day_start_time == '17') echo "selected"; ?> >5:00 pm</option>
						  <option value="18" <?php if($select_data->day_start_time == '18') echo "selected"; ?> >6:00 pm</option>
						  <option value="19" <?php if($select_data->day_start_time == '19') echo "selected"; ?> >7:00 pm</option>
						  <option value="20" <?php if($select_data->day_start_time == '20') echo "selected"; ?> >8:00 pm</option>
						  <option value="21" <?php if($select_data->day_start_time == '21') echo "selected"; ?> >9:00 pm</option>
						  <option value="22" <?php if($select_data->day_start_time == '22') echo "selected"; ?> >10:00 pm</option>
						  <option value="23" <?php if($select_data->day_start_time == '23') echo "selected"; ?> >11:00 pm</option>
					  </select>					</td>
				  </tr>
				  <tr>
				    <td>Day End Time </td>
				    <td>:</td>
				    <td><select name="det" id="det">
                       <!--<option value="0" <?php if($select_data->day_end_time == '0') echo "selected"; ?> >12:00 am</option>-->
						  <option value="1" <?php if($select_data->day_end_time == '1') echo "selected"; ?> >1:00 am</option>
						  <option value="2" <?php if($select_data->day_end_time == '2') echo "selected"; ?> >2:00 am</option>
						  <option value="3" <?php if($select_data->day_end_time == '3') echo "selected"; ?> >3:00 am</option>
						  <option value="4" <?php if($select_data->day_end_time == '4') echo "selected"; ?> >4:00 am</option>
						  <option value="5" <?php if($select_data->day_end_time == '5') echo "selected"; ?> >5:00 am</option>
						  <option value="6" <?php if($select_data->day_end_time == '6') echo "selected"; ?> >6:00 am</option>
						  <option value="7" <?php if($select_data->day_end_time == '7') echo "selected"; ?> >7:00 am</option>
						  <option value="8" <?php if($select_data->day_end_time == '8') echo "selected"; ?> >8:00 am</option>
						  <option value="9" <?php if($select_data->day_end_time == '9') echo "selected"; ?> >9:00 am</option>
						  <option value="10" <?php if($select_data->day_end_time == '10') echo "selected"; ?> >10:00 am</option>
						  <option value="11" <?php if($select_data->day_end_time == '11') echo "selected"; ?> >11:00 am</option>
						  <option value="12" <?php if($select_data->day_end_time == '12') echo "selected"; ?> >12:00 pm</option>
						  <option value="13" <?php if($select_data->day_end_time == '13') echo "selected"; ?> >1:00 pm</option>
						  <option value="14" <?php if($select_data->day_end_time == '14') echo "selected"; ?> >2:00 pm</option>
						  <option value="15" <?php if($select_data->day_end_time == '15') echo "selected"; ?> >3:00 pm</option>
						  <option value="16" <?php if($select_data->day_end_time == '16') echo "selected"; ?> >4:00 pm</option>
						  <option value="17" <?php if($select_data->day_end_time == '17') echo "selected"; ?> >5:00 pm</option>
						  <option value="18" <?php if($select_data->day_end_time == '18') echo "selected"; ?> >6:00 pm</option>
						  <option value="19" <?php if($select_data->day_end_time == '19') echo "selected"; ?> >7:00 pm</option>
						  <option value="20" <?php if($select_data->day_end_time == '20') echo "selected"; ?> >8:00 pm</option>
						  <option value="21" <?php if($select_data->day_end_time == '21') echo "selected"; ?> >9:00 pm</option>
						  <option value="22" <?php if($select_data->day_end_time == '22') echo "selected"; ?> >10:00 pm</option>
						  <option value="23" <?php if($select_data->day_end_time == '23') echo "selected"; ?> >11:00 pm</option>
						  </select></td>
			      </tr>
				  <tr>
				    <td>Calendar View </td>
				    <td>:</td>
				    <td><label>
				      <select name="calview" id="calview">
				        <option value="agendaDay" <?php if($select_data->cal_view == 'agendaDay') echo "selected"; ?> >Day</option>
				        <option value="agendaWeek" <?php if($select_data->cal_view == 'agendaWeek') echo "selected"; ?> >Week</option>
				        <!--<option value="month" <?php //if($select_data->cal_view == 'month') echo "selected"; ?> >Month</option>-->
			          </select>
				    </label></td>
			      </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
					<?php 
						global $wpdb;
						$table_name = $wpdb->prefix . "calendar_setting";
						$bh_data = $wpdb->get_results("select * from $table_name");

						
						if($bh_data == NULL)
							{
								?><input name="save_settings" type="submit" id="save_settings" value="Save Settings"><?php 
							}
							else
							{
								?><input name="update_settings" type="submit" id="update_settings" value="Update Settings"><?php
							}
					?>
					</td>
				  </tr>
			  </table>
			  <hr size=2>
			</form>
