<?php
/**
 * 
 */
include("db_conection.php");
$id=$_GET['id'];
$imei = $_GET['imei'];

$save_query = "INSERT INTO del_call_logs SELECT * FROM call_logs WHERE id = '$id' AND imei = '$imei'";
$save = mysqli_query($link, $save_query);

$delete_query="DELETE FROM call_logs WHERE id='$id' AND imei = '$imei'";//delete query
$run=mysqli_query($link,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('call_logs.php?deleted=user has been deleted','_self')</script>";
}

