<?php


$conn = mysql_connect($host,$username,$password) or die ('Error connecting to mysql');
mysql_select_db($db_name);


$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_upload = $tbl_prefix."upload";
?>
