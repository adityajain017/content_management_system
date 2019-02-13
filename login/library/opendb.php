<?php


$conn = mysqli_connect("localhost","root", "","login") or die ('Error connecting to mysql5');
mysqli_select_db($conn,$db_name);


$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_upload = $tbl_prefix."upload";
?>
