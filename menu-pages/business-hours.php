<hr size=2>
		<h2>Business Hours</h2>
		<hr size=2>
		<?php
			// Saving business hours
			if($_POST['save_bh'])
			{
			
				global $wpdb;
				$table_name = $wpdb->prefix . "business_hours";
				//MONDAY
				$M_st = $_POST['MSselect'];
				$M_et = $_POST['MEselect'];
				$M_tt_sec = ($M_et - $M_st);
				
				//MONDAY
				$monday_query ="INSERT INTO $table_name (
					`bh_id`,
					`bh_days` ,
					`bh_start_time` ,
					`bh_end_time` ,
					`bh_totaltime_seconds`
					)
					VALUES (
					'1', 'Monday', '$M_st', '$M_et', '$M_tt_sec');";
				$wpdb->query($monday_query);
				
				
				//TUESDAY
				$T_st = $_POST['TSselect'];
				$T_et = $_POST['TEselect'];
				$T_tt_sec = ($T_et - $T_st);
				
				$tuesday_query ="INSERT INTO $table_name (
					`bh_id`,
					`bh_days` ,
					`bh_start_time` ,
					`bh_end_time` ,
					`bh_totaltime_seconds`
					)
					VALUES (
					'2', 'Tuesday', '$T_st', '$T_et', '$T_tt_sec');";
				$wpdb->query($tuesday_query);
				
				
				//WEDNESDAY
				$W_st = $_POST['WSselect'];
				$W_et = $_POST['WEselect'];
				$W_tt_sec = ($W_et - $W_st);
				
				$wednesday_query ="INSERT INTO $table_name (
					`bh_id`,
					`bh_days` ,
					`bh_start_time` ,
					`bh_end_time` ,
					`bh_totaltime_seconds`
					)
					VALUES (
					'3', 'Wednesday', '$W_st', '$W_et', '$W_tt_sec');";
				$wpdb->query($wednesday_query);

				//THURSDAY
				$TH_st = $_POST['THSselect'];
				$TH_et = $_POST['THEselect'];
				$TH_tt_sec = ($TH_et - $TH_st);
				
				$thursday_query ="INSERT INTO $table_name (
					`bh_id`,
					`bh_days` ,
					`bh_start_time` ,
					`bh_end_time` ,
					`bh_totaltime_seconds`
					)
					VALUES (
					'4', 'Thursday', '$TH_st', '$TH_et', '$TH_tt_sec');";
				$wpdb->query($thursday_query);
				
				
				//FRIDAY
				$F_st = $_POST['FSselect'];
				$F_et = $_POST['FEselect'];
				$F_tt_sec = ($F_et - $F_st);
				
				$friday_query ="INSERT INTO $table_name (
					`bh_id`,
					`bh_days` ,
					`bh_start_time` ,
					`bh_end_time` ,
					`bh_totaltime_seconds`
					)
					VALUES (
					'5', 'Friday', '$F_st', '$F_et', '$F_tt_sec');";
				$wpdb->query($friday_query);
				
				
				//SATURDAY
				$SA_st = $_POST['SASselect'];
				$SA_et = $_POST['SAEselect'];
				$SA_tt_sec = ($SA_et - $SA_st);
				
				$saturday_query ="INSERT INTO $table_name (
					`bh_id`,
					`bh_days` ,
					`bh_start_time` ,
					`bh_end_time` ,
					`bh_totaltime_seconds`
					)
					VALUES (
					'6', 'Saturday', '$SA_st', '$SA_et', '$SA_tt_sec');";
				$wpdb->query($saturday_query);
				
				
				//SUNDAY
				$SU_st = $_POST['SUSselect'];
				$SU_et = $_POST['SUEselect'];
				$SU_tt_sec = ($SU_et - $SU_st);
				
				$sunday_query ="INSERT INTO $table_name (
					`bh_id`,
					`bh_days` ,
					`bh_start_time` ,
					`bh_end_time` ,
					`bh_totaltime_seconds`
					)
					VALUES (
					'7', 'Sunday', '$SU_st', '$SU_et', '$SU_tt_sec');";
				$wpdb->query($sunday_query);
				
			}
		?>
		
		<?php
			// -----updating business hours-----
			
			if($_POST['update_bh'])
			{
				global $wpdb;
				$table_name = $wpdb->prefix . "business_hours";
				//MONDAY
				$M_st = $_POST['MSselect'];
				$M_et = $_POST['MEselect'];
				$M_tt_sec = ($M_et - $M_st);
				
				$monday_query ="UPDATE $table_name SET
					`bh_start_time` = '$M_st',
					`bh_end_time` = '$M_et',
					`bh_totaltime_seconds` = '$M_tt_sec ' WHERE `bh_days` = 'Monday';";
				$wpdb->query($monday_query);
				
				
				//TUESDAY
				$T_st = $_POST['TSselect'];
				$T_et = $_POST['TEselect'];
				$T_tt_sec = ($T_et - $T_st);
				
				$tuesday_query ="UPDATE $table_name SET
					`bh_start_time` = '$T_st',
					`bh_end_time` = '$T_et',
					`bh_totaltime_seconds` = '$T_tt_sec ' WHERE `bh_days` = 'Tuesday';";
				$wpdb->query($tuesday_query);
				
				
				//WEDNESDAY
				$W_st = $_POST['WSselect'];
				$W_et = $_POST['WEselect'];
				$W_tt_sec = ($W_et - $W_st);
				
				$wednesday_query ="UPDATE $table_name SET
					`bh_start_time` = '$W_st',
					`bh_end_time` = '$W_et',
					`bh_totaltime_seconds` = '$W_tt_sec ' WHERE `bh_days` = 'Wednesday';";
				$wpdb->query($wednesday_query);

				//THURSDAY
				$TH_st = $_POST['THSselect'];
				$TH_et = $_POST['THEselect'];
				$TH_tt_sec = ($TH_et - $TH_st);
				
				$thursday_query ="UPDATE $table_name SET
					`bh_start_time` = '$TH_st',
					`bh_end_time` = '$TH_et',
					`bh_totaltime_seconds` = '$TH_tt_sec ' WHERE `bh_days` = 'Thursday';";
				$wpdb->query($thursday_query);
				
				
				//FRIDAY
				$F_st = $_POST['FSselect'];
				$F_et = $_POST['FEselect'];
				$F_tt_sec = ($F_et - $F_st);
				
				$friday_query ="UPDATE $table_name SET
					`bh_start_time` = '$F_st',
					`bh_end_time` = '$F_et',
					`bh_totaltime_seconds` = '$F_tt_sec ' WHERE `bh_days` = 'Friday';";
				$wpdb->query($friday_query);
				
				
				//SATURDAY
				$SA_st = $_POST['SASselect'];
				$SA_et = $_POST['SAEselect'];
				$SA_tt_sec = ($SA_et - $SA_st);
				
				$saturday_query ="UPDATE $table_name SET
					`bh_start_time` = '$SA_st',
					`bh_end_time` = '$SA_et',
					`bh_totaltime_seconds` = '$SA_tt_sec ' WHERE `bh_days` = 'Saturday';";
				$wpdb->query($saturday_query);
				
				
				//SUNDAY
				$SU_st = $_POST['SUSselect'];
				$SU_et = $_POST['SUEselect'];
				$SU_tt_sec = ($SU_et - $SU_st);
				
				$sunday_query ="UPDATE $table_name SET
					`bh_start_time` = '$SU_st',
					`bh_end_time` = '$SU_et',
					`bh_totaltime_seconds` = '$SU_tt_sec ' WHERE `bh_days` = 'Sunday';";
				$wpdb->query($sunday_query);
			}
		?>
		<form action="" method="post" name="businesshours">
		<!--table 1 for insert and update-->
		<?php
			if($_POST['edit_bh'] || $_POST['sethours'])
			{
		?>
			<table width="500" border="0">
			  <tr>
				<th width="136">&nbsp;</th>
				<th width="96">&nbsp;</th>
				<th width="38">&nbsp;</th>
				<th width="202">&nbsp;</th>
			  </tr>
			  <tr>
				<td><strong>Days</strong></td>
				<td><strong>Start Time </strong></td>
				<td>&nbsp;</td>
				<td><strong>End Time </strong></td>
			  </tr>
			  <tr>
				<td>Monday</td>
				<td><select name="MSselect" class="time_select" id="MSselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800" selected="selected">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600">11:30 pm</option>
                </select></td>
				<td>To</td>
				<td><select name="MEselect" class="time_select" id="MEselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600" selected="selected">11:30 pm</option>
                </select></td>
			  </tr>
			  <tr>
				<td>Tuesday</td>
				<td><select name="TSselect" class="time_select" id="TSselect">
				  <option value="-1">Closed</option>
				  <option value="0">12:00 am</option>
				  <option value="1800" selected="selected">12:30 am</option>
				  <option value="3600">1:00 am</option>
				  <option value="5400">1:30 am</option>
				  <option value="7200">2:00 am</option>
				  <option value="9000">2:30 am</option>
				  <option value="10800">3:00 am</option>
				  <option value="12600">3:30 am</option>
				  <option value="14400">4:00 am</option>
				  <option value="16200">4:30 am</option>
				  <option value="18000">5:00 am</option>
				  <option value="19800">5:30 am</option>
				  <option value="21600">6:00 am</option>
				  <option value="23400">6:30 am</option>
				  <option value="25200">7:00 am</option>
				  <option value="27000">7:30 am</option>
				  <option value="28800">8:00 am</option>
				  <option value="30600">8:30 am</option>
				  <option value="32400">9:00 am</option>
				  <option value="34200">9:30 am</option>
				  <option value="36000">10:00 am</option>
				  <option value="37800">10:30 am</option>
				  <option value="39600">11:00 am</option>
				  <option value="41400">11:30 am</option>
				  <option value="43200">12:00 pm</option>
				  <option value="45000">12:30 pm</option>
				  <option value="46800">1:00 pm</option>
				  <option value="48600">1:30 pm</option>
				  <option value="50400">2:00 pm</option>
				  <option value="52200">2:30 pm</option>
				  <option value="54000">3:00 pm</option>
				  <option value="55800">3:30 pm</option>
				  <option value="57600">4:00 pm</option>
				  <option value="59400">4:30 pm</option>
				  <option value="61200">5:00 pm</option>
				  <option value="63000">5:30 pm</option>
				  <option value="64800">6:00 pm</option>
				  <option value="66600">6:30 pm</option>
				  <option value="68400">7:00 pm</option>
				  <option value="70200">7:30 pm</option>
				  <option value="72000">8:00 pm</option>
				  <option value="73800">8:30 pm</option>
				  <option value="75600">9:00 pm</option>
				  <option value="77400">9:30 pm</option>
				  <option value="79200">10:00 pm</option>
				  <option value="81000">10:30 pm</option>
				  <option value="82800">11:00 pm</option>
				  <option value="84600">11:30 pm</option>
				  </select>				</td>
				<td>To</td>
				<td><select name="TEselect" class="time_select" id="TEselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600" selected="selected">11:30 pm</option>
                </select></td>
			  </tr>
			  <tr>
				<td>Wednesday</td>
				<td><select name="WSselect" class="time_select" id="WSselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800" selected="selected">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600">11:30 pm</option>
                </select></td>
				<td>To</td>
				<td><select name="WEselect" class="time_select" id="WEselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600" selected="selected">11:30 pm</option>
                </select></td>
			  </tr>
			  <tr>
				<td>Thursday</td>
				<td><select name="THSselect" class="time_select" id="THSselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800" selected="selected">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600">11:30 pm</option>
                </select></td>
				<td>To</td>
				<td><select name="THEselect" class="time_select" id="THEselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600" selected="selected">11:30 pm</option>
                </select></td>
			  </tr>
			  <tr>
				<td>Friday</td>
				<td><select name="FSselect" class="time_select" id="FSselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800" selected="selected">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600">11:30 pm</option>
                </select></td>
				<td>To</td>
				<td><select name="FEselect" class="time_select" id="FEselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600" selected="selected">11:30 pm</option>
                </select></td>
			  </tr>
			  <tr>
			    <td>Saturday</td>
			    <td><select name="SASselect" class="time_select" id="SASselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800" selected="selected">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600">11:30 pm</option>
                </select></td>
			    <td>To</td>
			    <td><select name="SAEselect" class="time_select" id="SAEselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600" selected="selected">11:30 pm</option>
                </select></td>
		      </tr>
			  <tr>
			    <td>Sunday</td>
			    <td><select name="SUSselect" class="time_select" id="SUSselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800" selected="selected">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600">11:30 pm</option>
                </select></td>
			    <td>To</td>
			    <td><select name="SUEselect" class="time_select" id="SUEselect">
                  <option value="-1">Closed</option>
                  <option value="0">12:00 am</option>
                  <option value="1800">12:30 am</option>
                  <option value="3600">1:00 am</option>
                  <option value="5400">1:30 am</option>
                  <option value="7200">2:00 am</option>
                  <option value="9000">2:30 am</option>
                  <option value="10800">3:00 am</option>
                  <option value="12600">3:30 am</option>
                  <option value="14400">4:00 am</option>
                  <option value="16200">4:30 am</option>
                  <option value="18000">5:00 am</option>
                  <option value="19800">5:30 am</option>
                  <option value="21600">6:00 am</option>
                  <option value="23400">6:30 am</option>
                  <option value="25200">7:00 am</option>
                  <option value="27000">7:30 am</option>
                  <option value="28800">8:00 am</option>
                  <option value="30600">8:30 am</option>
                  <option value="32400">9:00 am</option>
                  <option value="34200">9:30 am</option>
                  <option value="36000">10:00 am</option>
                  <option value="37800">10:30 am</option>
                  <option value="39600">11:00 am</option>
                  <option value="41400">11:30 am</option>
                  <option value="43200">12:00 pm</option>
                  <option value="45000">12:30 pm</option>
                  <option value="46800">1:00 pm</option>
                  <option value="48600">1:30 pm</option>
                  <option value="50400">2:00 pm</option>
                  <option value="52200">2:30 pm</option>
                  <option value="54000">3:00 pm</option>
                  <option value="55800">3:30 pm</option>
                  <option value="57600">4:00 pm</option>
                  <option value="59400">4:30 pm</option>
                  <option value="61200">5:00 pm</option>
                  <option value="63000">5:30 pm</option>
                  <option value="64800">6:00 pm</option>
                  <option value="66600">6:30 pm</option>
                  <option value="68400">7:00 pm</option>
                  <option value="70200">7:30 pm</option>
                  <option value="72000">8:00 pm</option>
                  <option value="73800">8:30 pm</option>
                  <option value="75600">9:00 pm</option>
                  <option value="77400">9:30 pm</option>
                  <option value="79200">10:00 pm</option>
                  <option value="81000">10:30 pm</option>
                  <option value="82800">11:00 pm</option>
                  <option value="84600" selected="selected">11:30 pm</option>
                </select></td>
		      </tr>
			  <tr>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  <tr>
				<td>&nbsp;</td>
				<td colspan="2">&nbsp;</td>
				<td>
				<?php if($_POST['sethours']) {?><input name="save_bh" type="submit" id="save_bh" value="Save" /><?php }?>
				<?php if(!$_POST['sethours']) { ?><input name="update_bh" type="submit" id="update_bh" value="Update" /><?php }?>
                  <input name="bhcancel" type="submit" id="bhcancel" value="Cancel" /></td>
		      </tr>
		  </table>
		<?php
			}
		?>
		<!--table 1 End for insert adn update-->
		
		<!--table 2 for show business hours-->
		<table width="500" border="0">
		  <tr>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
	      </tr>
		  <tr>
			<td width="135"><strong>Days</strong></td>
			<td width="96"><strong>Start Time </strong></td>
			<td width="41">&nbsp;</td>
			<td width="189"><strong>End Time </strong></td>
			<td width="5">&nbsp;</td>
		  </tr>
		  <?php
		  	// Showing Business hours
			  	global $wpdb;
			  	$table_name = $wpdb->prefix . "business_hours";
				$bh_data = $wpdb->get_results("select * from $table_name order by bh_id ASC");
				$sn = 1;
				foreach ( $bh_data as $bh_showdata ) 
				{

		  ?>
		  <tr>
			<td><?php echo $bh_showdata->bh_days; ?></td>
			<td>
				<?php if($bh_showdata->bh_start_time == "-1") echo  "Closed";?>
				<?php if($bh_showdata->bh_start_time == "0") echo  "12:00 am";?>
                <?php if($bh_showdata->bh_start_time == "1800") echo  "12:30 am";?>
                <?php if($bh_showdata->bh_start_time == "3600") echo  "1:00 am";?>
				<?php if($bh_showdata->bh_start_time == "5400") echo  "1:30 am";?>
				<?php if($bh_showdata->bh_start_time == "7200") echo  "2:00 am";?>
				<?php if($bh_showdata->bh_start_time == "9000") echo  "2:30 am";?>
				<?php if($bh_showdata->bh_start_time == "10800") echo  "3:00 am";?>
				<?php if($bh_showdata->bh_start_time == "12600") echo  "3:30 am";?>
				<?php if($bh_showdata->bh_start_time == "14400") echo  "4:00 am";?>
				<?php if($bh_showdata->bh_start_time == "16200") echo  "4:30 am";?>
				<?php if($bh_showdata->bh_start_time == "18000") echo  "5:00 am";?>
				<?php if($bh_showdata->bh_start_time == "19800") echo  "5:30 am";?>
				<?php if($bh_showdata->bh_start_time == "21600") echo  "6:00 am";?>
				<?php if($bh_showdata->bh_start_time == "23400") echo  "6:30 am";?>
				<?php if($bh_showdata->bh_start_time == "25200") echo  "7:00 am";?>
				<?php if($bh_showdata->bh_start_time == "27000") echo  "7:30 am";?>
				<?php if($bh_showdata->bh_start_time == "28800") echo  "8:00 am";?>
				<?php if($bh_showdata->bh_start_time == "30600") echo  "8:30 am";?>
				<?php if($bh_showdata->bh_start_time == "32400") echo  "9:00 am";?>
				<?php if($bh_showdata->bh_start_time == "34200") echo  "9:30 am";?>
				<?php if($bh_showdata->bh_start_time == "36000") echo  "10:00 am";?>
				<?php if($bh_showdata->bh_start_time == "37800") echo  "10:30 am";?>
				<?php if($bh_showdata->bh_start_time == "39600") echo  "11:00 am";?>
				<?php if($bh_showdata->bh_start_time == "41400") echo  "11:30 am";?>
				<?php if($bh_showdata->bh_start_time == "43200") echo  "12:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "45000") echo  "12:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "46800") echo  "1:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "48600") echo  "1:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "50400") echo  "2:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "52200") echo  "2:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "54000") echo  "3:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "55800") echo  "3:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "57600") echo  "4:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "59400") echo  "4:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "61200") echo  "5:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "63000") echo  "5:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "64800") echo  "6:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "66600") echo  "6:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "68400") echo  "7:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "70200") echo  "7:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "72000") echo  "8:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "73800") echo  "8:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "75600") echo  "9:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "77400") echo  "9:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "79200") echo  "10:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "81000") echo  "10:30 pm";?>
				<?php if($bh_showdata->bh_start_time == "82800") echo  "11:00 pm";?>
				<?php if($bh_showdata->bh_start_time == "84600") echo  "11:30 pm";?>			</td>
			<td>To</td>
			<td>
				<?php if($bh_showdata->bh_end_time == "-1") echo  "Closed";?>
                <?php if($bh_showdata->bh_end_time == "0") echo  "12:00 am";?>
                <?php if($bh_showdata->bh_end_time == "1800") echo  "12:30 am";?>
                <?php if($bh_showdata->bh_end_time == "3600") echo  "1:00 am";?>
				<?php if($bh_showdata->bh_end_time == "5400") echo  "1:30 am";?>
				<?php if($bh_showdata->bh_end_time == "7200") echo  "2:00 am";?>
				<?php if($bh_showdata->bh_end_time == "9000") echo  "2:30 am";?>
				<?php if($bh_showdata->bh_end_time == "10800") echo  "3:00 am";?>
				<?php if($bh_showdata->bh_end_time == "12600") echo  "3:30 am";?>
				<?php if($bh_showdata->bh_end_time == "14400") echo  "4:00 am";?>
				<?php if($bh_showdata->bh_end_time == "16200") echo  "4:30 am";?>
				<?php if($bh_showdata->bh_end_time == "18000") echo  "5:00 am";?>
				<?php if($bh_showdata->bh_end_time == "19800") echo  "5:30 am";?>
				<?php if($bh_showdata->bh_end_time == "21600") echo  "6:00 am";?>
				<?php if($bh_showdata->bh_end_time == "23400") echo  "6:30 am";?>
				<?php if($bh_showdata->bh_end_time == "25200") echo  "7:00 am";?>
				<?php if($bh_showdata->bh_end_time == "27000") echo  "7:30 am";?>
				<?php if($bh_showdata->bh_end_time == "28800") echo  "8:00 am";?>
				<?php if($bh_showdata->bh_end_time == "30600") echo  "8:30 am";?>
				<?php if($bh_showdata->bh_end_time == "32400") echo  "9:00 am";?>
				<?php if($bh_showdata->bh_end_time == "34200") echo  "9:30 am";?>
				<?php if($bh_showdata->bh_end_time == "36000") echo  "10:00 am";?>
				<?php if($bh_showdata->bh_end_time == "37800") echo  "10:30 am";?>
				<?php if($bh_showdata->bh_end_time == "39600") echo  "11:00 am";?>
				<?php if($bh_showdata->bh_end_time == "41400") echo  "11:30 am";?>
				<?php if($bh_showdata->bh_end_time == "43200") echo  "12:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "45000") echo  "12:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "46800") echo  "1:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "48600") echo  "1:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "50400") echo  "2:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "52200") echo  "2:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "54000") echo  "3:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "55800") echo  "3:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "57600") echo  "4:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "59400") echo  "4:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "61200") echo  "5:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "63000") echo  "5:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "64800") echo  "6:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "66600") echo  "6:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "68400") echo  "7:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "70200") echo  "7:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "72000") echo  "8:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "73800") echo  "8:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "75600") echo  "9:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "77400") echo  "9:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "79200") echo  "10:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "81000") echo  "10:30 pm";?>
				<?php if($bh_showdata->bh_end_time == "82800") echo  "11:00 pm";?>
				<?php if($bh_showdata->bh_end_time == "84600") echo  "11:30 pm";?>            </td>
			<td></td>
		  </tr>
		  <?php
		  		}
		  ?>
		  <tr>
			<td colspan="4"><?php if($bh_data == NULL)echo "<br><br>FIRST SET BUSINESS HOURS...<br><br>";?></td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
				<?php 
				global $wpdb;
			  	$table_name = $wpdb->prefix . "business_hours";
				$bh_data = $wpdb->get_results("select * from $table_name");
				
				if($bh_data == NULL)
					{
						?><input name="sethours" type="submit" value="Set Hours" /><?php 
					}
					else
					{
						?><input name="edit_bh" type="submit" id="edit_bh" value="Edit" /><?php
					}
				?>			</td>
			<td>&nbsp;</td>
		  </tr>
		</table>

		<!--table 2 End show business hours-->
		</form>