<?php


if (empty($_POST['email'])) {
	$return['error'] = true;
	$return['msg'] = 'You did not enter you email.';
}
else {
 	/*
	global $wpdb;
	$table_name = $wpdb->prefix . "services";
	$res=$wpdb->get_results("select * From $table_name");
	print_r($res);
	wp_die('zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz');*/
	
	
	$return['error'] = false;
	$return['msg'] =  $_POST['email'];
}

echo json_encode($return);


?>