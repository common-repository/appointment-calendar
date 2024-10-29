
<?php

	//*************inserting a service 'Haircut'*************************
	global $wpdb;
	$today = date('Y-m-d');
	$table_name = $wpdb->prefix . "services";
	$insert_service = "INSERT INTO $table_name (
						`service_id` ,
						`service_name` ,
						`service_desc` ,
						`service_durationvalue` ,
						`service_durationunit` ,
						`service_cost` ,
						`service_availability`
						)
						VALUES (
						'1' , 'Haircut', 'Minimum 30min duration for this sevice.', '30', 'Minutes', '100', ''
						);";
	$wpdb->query($insert_service);
	
	//************inserting 3 Events 'Fullday', 'Everyday'****************
	
	
	// Every Day Event -'Lunch'
	$table_name = $wpdb->prefix . "calendar_event";
	$insert_lunch_event = "INSERT INTO $table_name (
						`ev_id` ,
						`ev_title` ,
						`ev_start_time` ,
						`ev_end_time` ,
						`ev_start_date` ,
						`ev_end_date` ,
						`ev_desc`
						)
						VALUES (
						'1' , 'Lunch', '13, 00', '14, 00', '2011-12-26', '2013-12-26', 'Lunch event for a week.'
						);";
	$wpdb->query($insert_lunch_event);
		
	//***************inserting 6 booking appointment with diffrent status***************
	
	$table_name = $wpdb->prefix . "booked_appointments";
	$insert_pen1 = "INSERT INTO $table_name (
					`bk_ap_id` ,
					`bk_ap_name` ,
					`bk_ap_email` ,
					`bk_ap_service` ,
					`bk_ap_cellno` ,
					`bk_ap_sttime` ,
					`bk_ap_edtime` ,
					`bk_ap_stdate` ,
					`bk_ap_eddate` ,
					`bk_ap_desc` ,
					`bk_ap_status`
					)
					VALUES (
					'1' , 'FARAZ KHAN', 'farazfrank777@gmail.com', 'Haircut', '9887727687', '11:00AM', '12:00PM', '$today', '$today', 'i need 1hr appointment for this service.', 'pending'
					);";
	$wpdb->query($insert_pen1);

	// Insert Calendar Settings
	$table_name = $wpdb->prefix . "calendar_setting"; 
	$cal_settings = "INSERT INTO $table_name (
					`cs_id` ,
					`time_slot` ,
					`day_start_time` ,
					`day_end_time` ,
					`cal_view`
					)
					VALUES (
					'1', '30', '6', '20', 'agendaDay'
					);";
	$wpdb->query($cal_settings);
?>
