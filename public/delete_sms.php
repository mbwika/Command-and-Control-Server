<?php
/**
 * 
 */
include("db_conection.php");
$sms_id=$_GET['sms_id'];
$imei = $_GET['imei'];

$save_query = "INSERT INTO del_sms SELECT * FROM sms WHERE sms_id = '$sms_id' AND imei = '$imei'";
$save = mysqli_query($link, $save_query);
$delete_query="DELETE FROM sms WHERE sms_id='$sms_id' AND imei = '$imei'";//delete query
$run=mysqli_query($link,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('messages.php?deleted=user has been deleted','_self')</script>";
}
