<?php

$title = $_POST['title'];
$keywords  = $_POST['keywords'];
$description = $_POST['description'];
$content = $_POST['content'];

include 'library/config.php';
include 'library/opendb.php';

$query = "INSERT INTO upload (title, keywords, description, content ) ".
"VALUES ('$title', '$keywords', '$description', '$content')";

mysql_query($query) or die('Error, query failed'); 
include 'library/closedb.php';

echo "<br>HTML file created<br>";

?>