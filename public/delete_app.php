<?php
/**
 * 
 */
include("db_conection.php");
$imei = $_GET['imei'];
$name=$_GET['name'];

$save_query = "INSERT INTO del_appsinfo SELECT * FROM appsinfo WHERE imei = '$imei' AND app_name = '$name'";
$save = mysqli_query($link, $save_query);

$delete_query="DELETE FROM appsinfo WHERE imei='$imei' AND app_name = '$name'";//delete query
$run=mysqli_query($link,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('apps.php?app_id=app has been deleted','_self')</script>";
}

