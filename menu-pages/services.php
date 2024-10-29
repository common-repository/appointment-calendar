<?php
				// saving a new service in datbase
				if($_POST['save'])
				{
					$s_nam = $_POST['servicename'];
					$s_desc = $_POST['servicedesc'];
					$s_dvalue = $_POST['durationvalue']; 
					$s_dunit = $_POST['durationunit'];
					$s_cost = $_POST['cost'];
					$s_avi = $_POST['availability'];
					
					global $wpdb;
					$table_name = $wpdb->prefix . "services";
					if($service_flag == "true")
					{
					$insert_query = "INSERT INTO $table_name (`service_id`, `service_name`, `service_desc`, `service_durationvalue`, `service_durationunit`, `service_cost`, `service_availability`) VALUES (NULL, '$s_nam', '$s_desc', '$s_dvalue', '$s_dunit', '$s_cost', '$s_avi');";
					$wpdb->query($insert_query);
					}
				}
			?>
			
			<?php
				// delete multiple services from database
				if($_POST['deleteserv'])
				{
					global $wpdb;
					$table_name = $wpdb->prefix . "services";
					$count = count($_POST['deleteservice']);
					
					for($i=0;$i<$count;$i++)
					{
						$del_id = $_POST['deleteservice'][$i];
						$delete_query = "DELETE FROM $table_name WHERE service_id='$del_id'";
						$wpdb->query($delete_query);
					}
						$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
					?> <script>location.href="<?php echo $c_url;?>"</script> <?php
					echo "Service deleted successfully.";
				}
			?><?php
				// now update service fields values
				if($_POST['update_ser'])
				{
					$get_up_id = $_GET['update_service'];
					$up_nam = $_POST['servicename'];
					$up_desc = $_POST['servicedesc'];
					$up_dvalue = $_POST['durationvalue']; 
					$up_dunit = $_POST['durationunit'];
					$up_cost = $_POST['cost'];
					$up_avi = $_POST['availability'];
					
					global $wpdb;
					$table_name = $wpdb->prefix . "services";
					$update_query = "UPDATE $table_name SET 
					`service_name` = '$up_nam',
					`service_desc` = '$up_desc',
					`service_durationvalue` = '$up_dvalue',
					`service_durationunit` = '$up_dunit',
					`service_cost` = '$up_cost',
					`service_availability` = '$up_avi' WHERE `service_id` ='$get_up_id'";
					$wpdb->query($update_query);
					$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
					?> <script>location.href="?page=appoint";</script> <?php
					echo "Service updated successfully.";
				}
			?>
			
            
			<form action="" method="post" name="add_service">
			<?php 
			// if any service exist then disable to add more service
					/*global $wpdb;
					$table_name = $wpdb->prefix . "services";
					$getdata = $wpdb->get_results("select * from $table_name");*/
			/*if($getdata == NULL || $_GET['update_service'])
			{*/
			
			// get update service id and values in fields
				if($_GET['update_service'])
				{
					$up_id = $_GET['update_service'];
					global $wpdb;
					$table_name = $wpdb->prefix . "services";
					$getdata = $wpdb->get_row("select * from $table_name WHERE service_id='$up_id' ");
				}
			?>
				<hr size=2>
				<h2>Create Service
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="On create service page admin can create a service for his calendar. In this version we allow admin to create only one service at a time." />
				</h2>
				<hr size=2>
				<table width="600" border="0">
                  <tr>
                    <th width="134" align="left"><strong>Fields</strong></th>
                    <th width="21" align="left">&nbsp;</th>
                    <th width="431" colspan="3" align="left"><strong>Values</strong></th>
                  </tr>
                  <tr>
                    <td>Service Name </td>
                    <td>:</td>
                    <td colspan="3"><input name="servicename" type="text" id="servicename" value="<?php echo $getdata->service_name;?>" />
					<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="Give a service name." />
					</td>
                  </tr>
                  <tr>
                    <td>Sevice Description </td>
                    <td>:</td>
                    <td colspan="3"><textarea name="servicedesc" cols="20" rows="4" id="servicedesc"><?php echo $getdata->service_desc;?></textarea>
					<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="Give some description about service." />
					</td>
                  </tr>
                  <tr>
                    <td>Duration</td>
                    <td>:</td>
                    <td><input id="durationvalue" name="durationvalue" type="text" size="5" value="<?php echo $getdata->service_durationvalue;?>" />
                        <select name="durationunit" size="1" id="durationunit">
                          <option value="Minutes" <?php if( $getdata->service_durationunit == 'Minutes') echo "selected";?>>Minutes</option>
                         <!-- <option value="Hours" <?php // if( $getdata->service_durationunit == 'Hours') echo "selected";?>>Hours</option>-->
                        </select><img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="Give service duration like 15 Minunte, 30 Minute, 1 hour" />
					</td>
                  <!--<td width="28">Cost</td>
                    <td width="13">:</td>
                    <td width="110"><input name="cost" type="text" id="cost" size="5" value="<?php //echo $getdata->service_cost;?>" />-->                  </tr>
                  <!--<tr>
					<td>Capacity</td>
					<td>:</td>
					<td colspan="4"><input name="availability" type="text" id="availability" value="<?php //echo $getdata->
				  service_availability;?>" />
				  -->
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="3">
					  <?php 
						if($_GET['update_service'])
							{echo "<input name='update_ser' type='submit' id='update_ser' value='Update' />";}
						else
							{echo '<input name="save" type="submit" id="save" value="Save" />';}
					?>
                          <input name="servicecancel" type="submit" id="servicecancel" value="Cancel" /></td>
                      <?php 
						// cancel code
						if($_POST['servicecancel'])
						{
						?>
                      	<script>location.href="?page=appoint";</script>
                      	<?php
						}
					?>
                    </tr>
              </table>
				<?php // } // disable create new service end?>
<hr size=2>
				<h2>All Services
				<img src="<?php echo plugins_url().'/appointment-calendar/tooltip/help.png'; ?>" class="vtip"  title="This page display all created services and admin can edit or delete any service" />
				</h2>
				<hr size=2>
				
			    <table width="710" border="0">
                  <tr>
                    <th width="42" align="left"><strong>No.</strong></th>
                    <th width="144" align="left"><strong>Service Name </strong></th>
                    <th width="112" align="left"><strong>Duartion</strong></th>
                    <!--<th width="114"><strong>Cost</strong></th>-->
                    <th width="91" align="left"><strong>Update Service </strong></th>
                    <th width="167" align="left"><strong>Delete service </strong></th>
                  </tr>
				  <?php
				  	global $wpdb;
				  	$table_name = $wpdb->prefix . "services";
					$services = $wpdb->get_results("select * from $table_name");
					$sn = 1;
					foreach ( $services as $services_data ) 
					{
				  ?>
                  <tr>
                    <td><?php echo $sn;?></td>
                    <td><?php echo $services_data->service_name;?></td>
                    <td><?php echo $services_data->service_durationvalue." ".$services_data->service_durationunit;?></td>
                    <!--<td><?php //echo $services_data->service_cost;?></td>-->
					<?php 
 					$c_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."&update_service=".$services_data->service_id;?>
                    <td><a href="<?php echo $c_url; ?>">Edit</a></td>
                    <td width="128"><input name="deleteservice[]" type="checkbox" value="<?php echo $services_data->service_id;?>" /></td>
                  </tr>
				  <?php
				  	$sn++;
				  	}
				  ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <!--<td>&nbsp;</td>-->
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input name="deleteserv" type="submit" id="deleteserv" value="Delete" /></td>
                  </tr>
              </table>
			  <hr size=2>
		      <p>&nbsp;</p>
			</form>