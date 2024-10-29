<?php
global $wpdb;
	$table_name = $wpdb->prefix . "services";
	$sevice_table = "CREATE TABLE $table_name (
		`service_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`service_name` VARCHAR( 100 ) NOT NULL ,
		`service_desc` VARCHAR( 500 ) NOT NULL ,
		`service_durationvalue` INT( 3 ) NOT NULL ,
		`service_durationunit` VARCHAR( 20 ) NOT NULL ,
		`service_cost` FLOAT NOT NULL ,
		`service_availability` VARCHAR( 20 ) NOT NULL
		)";
	$wpdb->query($sevice_table);
	
	$table_name = $wpdb->prefix . "business_hours";
	$business_hours_table = "CREATE TABLE $table_name (
		`bh_id` INT( 2 ) NOT NULL ,
		`bh_days` VARCHAR( 10 ) NOT NULL ,
		`bh_start_time` VARCHAR( 10 ) NOT NULL ,
		`bh_end_time` VARCHAR( 10 ) NOT NULL ,
		`closed` INT( 2 ) NOT NULL ,
		`bh_totaltime_seconds` BIGINT( 10 ) NOT NULL,
		PRIMARY KEY ( `bh_id` )
		)";
	$wpdb->query($business_hours_table);


	$table_name = $wpdb->prefix . "booked_services";
	$Booked_Servicess= "CREATE TABLE $table_name (
		`booked_id` INT( 2 ) NOT NULL ,
		`booked_days` VARCHAR( 10 ) NOT NULL ,
		`booked_start_time` VARCHAR( 10 ) NOT NULL ,
		`booked_end_time` VARCHAR( 10 ) NOT NULL ,
		PRIMARY KEY ( `booked_id` )
		)";
	$wpdb->query($Booked_Servicess);
		
	
	$table_name = $wpdb->prefix . "calendar_setting";
	$Calendar_setting= "CREATE TABLE  $table_name (
						`cs_id` INT NOT NULL ,
						`time_slot` INT NOT NULL ,
						`day_start_time` INT NOT NULL,
						`day_end_time` INT NOT NULL,
						`cal_view` VARCHAR( 20 ) NOT NULL,
						PRIMARY KEY ( `cs_id` )
						)
						";
	$wpdb->query($Calendar_setting);
	

	$table_name=$wpdb->prefix . "calendar_event";
	$Calendar_event_setting="CREATE TABLE  $table_name (
								`ev_id` INT NOT NULL AUTO_INCREMENT,
								`ev_title` VARCHAR( 25 ) NOT NULL ,
								`ev_start_time` VARCHAR( 25 ) NOT NULL ,
								`ev_end_time` VARCHAR( 25 ) NOT NULL ,
								`ev_start_date` VARCHAR( 30 ) NOT NULL ,
								`ev_end_date` VARCHAR( 30 ) NOT NULL ,
								`ev_desc` VARCHAR( 50) NOT NULL ,								
								PRIMARY KEY ( `ev_id` )
								) ";
	$wpdb->query($Calendar_event_setting);						


	$table_name=$wpdb->prefix . "booked_appointments";
	$booked_appointments = "CREATE TABLE $table_name (
							`bk_ap_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
							`bk_ap_name` VARCHAR( 40 ) NOT NULL ,
							`bk_ap_email` VARCHAR( 100 ) NOT NULL ,
							`bk_ap_service` VARCHAR( 30 ) NOT NULL ,
							`bk_ap_cellno` bigint(20) NOT NULL ,
							`bk_ap_sttime` VARCHAR( 10 ) NOT NULL ,
							`bk_ap_edtime` VARCHAR( 10 ) NOT NULL ,
							`bk_ap_stdate` VARCHAR( 12 ) NOT NULL ,
							`bk_ap_eddate` VARCHAR( 12 ) NOT NULL ,
							`bk_ap_desc` VARCHAR( 100 ) NOT NULL,
							`bk_ap_status` VARCHAR( 20 ) NOT NULL DEFAULT 'pending'
							);";
	$wpdb->query($booked_appointments);
	
	$table_name = $wpdb->prefix . "email_settings";
	$sevice_table = "CREATE TABLE $table_name (
		`email_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`host_name` VARCHAR( 100 ) NOT NULL ,
		`host_portno` bigint(20) NOT NULL ,
		`username` VARCHAR( 50 ) NOT NULL ,
		`password` VARCHAR( 50 ) NOT NULL 
		)";
	$wpdb->query($sevice_table);
?>