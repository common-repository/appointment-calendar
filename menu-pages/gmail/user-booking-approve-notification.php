<html>
<head>
<title>PHPMailer - SMTP (Gmail) basic test</title>
</head>
<body>

<?php

	global $wpdb;
	global $current_user;
	
    get_currentuserinfo(); //  fetch all info about admin
 	$admin_name = $current_user->user_login;
	
	$table_name = $wpdb->prefix . "email_settings";
	$smtp = $wpdb->get_row("select * from $table_name where email_id =1");
	
	$admin_email = $smtp->username;
	$table_name = $wpdb->prefix . "booked_appointments";
	$get_client_info = $wpdb->get_row("select * from $table_name where bk_ap_id =$update_id");
	
	$recipent_name = $get_client_info->bk_ap_name;
	$recipent_email= $get_client_info->bk_ap_email;
	$service = $get_client_info->bk_ap_service;
	$cellno = $get_client_info->bk_ap_cellno;
	$sttm = $get_client_info->bk_ap_sttime."-".$get_client_info->bk_ap_edtime;
	$stdt = $get_client_info->bk_ap_stdate;
	$status = "Approved";
	
	
	$body = "Dear <b>$recipent_name</b><br>
			 your booking Appointment has been approved by admin.<br><br>
			 
			 <strong>Your Booking Status</strong><br>
			 Service Name: $service<br>
			 Booking Status: $status<br>
			 Booking Date: $stdt<br>
			 Booking Time: $sttm<br>
			 Cellno: $cellno<br><br>
			 <p>
			 Thank you for using our services !!!
			 </p>
			";
 

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             =  $body; //"<br>Your booking will appove soon by admin.";
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = $smtp->host_name; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = $smtp->host_name;      // sets GMAIL as the SMTP server
$mail->Port       = $smtp->host_portno;                   // set the SMTP port for the GMAIL server
$mail->Username   = $smtp->username;  		// GMAIL username
$mail->Password   = $smtp->password;            // GMAIL password

$mail->SetFrom($admin_email, $admin_name);

$mail->AddReplyTo($admin_email,$admin_name);

$mail->Subject    = "Your Booked Appointment Status";

$mail->AltBody    = ""; // optional, comment out and test

$mail->MsgHTML($body);

$address = $recipent_email; ///recipent_email
$mail->AddAddress($address, $recipent_name);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  //echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  //echo "Message sent!";
}

?>

</body>
</html>
