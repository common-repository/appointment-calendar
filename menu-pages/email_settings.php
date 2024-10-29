<?php

	echo "<h2>Configure Your SMTP For E-mail Notification</h2>";
	echo  "<hr size=2>";
	
	global $wpdb;
	$table_name = $wpdb->prefix . "email_settings";
	$smtp = $wpdb->get_row("select * from $table_name where email_id =1");
	?>
	<form action="" method="post" name="smtp">
		<table width="500" border="0">
		  <tr>
			<th width="98" align="left"><strong>Fields</strong></th>
			<th width="16" align="left">&nbsp;</th>
			<th width="472" align="left"><strong>Values</strong></th>
		  </tr>
		  <tr>
			<td>Host Name </td>
			<td>:</td>
			<td><input name="hostname" type="text" id="hostname" value="<?php echo $smtp->host_name; ?>" /><label> Host name: smtp.gmail.com or smtp.mail.yahoo.com </label></td>
		  </tr>
		  <tr>
		    <td>Port Number </td>
		    <td>:</td>
		    <td><input name="portno" type="text" id="portno" value="<?php echo $smtp->host_portno; ?>" /><label> Port number: 465</label></td>
	      </tr>
		  <tr>
		    <td>E-mail</td>
		    <td>:</td>
		    <td><input name="username" type="text" id="username" value="<?php echo $smtp->username; ?>" /><label> Your e-mail, E.g.: abc@gmail.com or abc@yahoo.com </label></td>
	      </tr>
		  <tr>
		    <td>Password</td>
		    <td>:</td>
		    <td><input name="password" type="password" id="password" value="<?php echo $smtp->password; ?>" /><label> Your gmail Password</label></td>
	      </tr>
		  <tr>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td><?php
				if(!$smtp)
				{
					echo "<input name='savesmtp' type='submit' id='savesmtp' value='Save' />";
				}
				else
				{
					echo "<input name='upsmtp' type='submit' id='upsmtp' value='Update' />";
				}
				?>
			</td>
	      </tr>
		  <tr>
			<th width="98" align="left">&nbsp;</th>
			<th width="16" align="left">&nbsp;</th>
			<th width="472" align="left">&nbsp;</th>
		  </tr>
	  </table>

	</form>
	<?php
	// save smtp
	if(isset($_POST['savesmtp']))
	{
		$htname = $_POST['hostname'];
		$htportno = $_POST['portno'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		global $wpdb;
		$table_name = $wpdb->prefix . "email_settings";
		$insertsmtp = "INSERT INTO $table_name (
						`email_id` ,
						`host_name` ,
						`host_portno` ,
						`username` ,
						`password`
						)
						VALUES (
						'1' , '$htname', '$htportno', '$username', '$password'
						);
						";
		$wpdb->query($insertsmtp);
		echo "SMTP Settings Saved.";
		$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
		?> <script>location.href="<?php echo $c_url;?>"</script> <?php
	}
	
	// update smtp
	if(isset($_POST['upsmtp']))
	{
		$htname = $_POST['hostname'];
		$htportno = $_POST['portno'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		global $wpdb;
		$table_name = $wpdb->prefix . "email_settings";
		$upsmtp = "UPDATE $table_name SET `host_name` = '$htname',
					`host_portno` = '$htportno',
					`username` = '$username',
					`password` = '$password' WHERE `email_id` =1;";
		$wpdb->query($upsmtp);
		echo "SMTP Settings Updated.";
		$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
		?> <script>location.href="<?php echo $c_url;?>"</script> <?php
	}
?>