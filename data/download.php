<?php


// if id is set then get the file with the id from database

include 'library/config.php';
include 'library/opendb.php';
$id    = $_GET['id'];
$query = "SELECT title, keywords, description, content " .
         "FROM upload WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($title,$keywords,$description,$content) =   mysql_fetch_array($result);


echo $title;
echo $keywords;
echo $description;
echo $content;
include 'library/closedb.php'; 
exit;


?>