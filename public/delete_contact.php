<?php
/**
 * 
 */
include("db_conection.php");
$imei = $_GET['imei'];
$name = $_GET['name'];

$save_query = "INSERT INTO del_contacts SELECT * FROM contacts WHERE IMEI = '$imei' AND name = '$name'";
$save = mysqli_query($link, $save_query);

$delete_query="DELETE FROM contacts WHERE IMEI = '$imei' AND name = '$name'";//delete query
$run=mysqli_query($link,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('contacts.php?deleted=user has been deleted','_self')</script>";
}

