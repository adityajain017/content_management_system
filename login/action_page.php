<?php
$myfile=fopen("pages/".$_GET["uname"].".html","w") or die("Unable to open file!");

$html="<html>";
fwrite($myfile, $html);

$head = "<head>";
fwrite($myfile, $head);

$utitle = "<title>".$_GET["utitle"]."</title>";
fwrite($myfile, $utitle);

$head_data=$_GET["head_data"];
fwrite($myfile, $head_data);

$head_close="</head>";
fwrite($myfile, $head_close);


$body = "<body>";
fwrite($myfile, $body);

$body_data=$_GET["body_data"];
fwrite($myfile, $body_data);

$body_close="</body>";
fwrite($myfile, $body_close);


$html_close="</html>";
fwrite($myfile, $html_close);

fclose($myfile);
 
$message= "Your Page is created successfully" ;
 
header( 'Location: http://localhost/CMS/index.php?message='.$message ) ;

?>
