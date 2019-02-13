<?php
 $res = opendir("pages");
 
 if(readdir($res) !== FALSE)
	 {
		 $i=0;
		 $arr_entry=array();
			 while(($entery = readdir($res)) !== FALSE )
			 {
				
					if($entery != "." && $entery != "..")
					 {	 
					  $arr_entry[$i]=$entery;
						$i++;
					 }
			 }
			 
					
	 }
	 
 

	$count=count($arr_entry);
				
 ?>
 
 <?php
$search=$_GET["search"];
$i=0;
$flag=100;
for($i=0;$i<$count;$i++)
{
	if($search == $arr_entry[$i])
	{
		$flag = $i;
	}

	
}

if($flag==100)
{
	echo "No such element present";
}
else
{
	$file="pages/$arr_entry[$flag]";
	if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("File is successfully deleted");
  }  
}



?>

