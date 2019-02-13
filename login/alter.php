<?php
    
   include 'library/config.php';
   include 'library/opendb.php';
    
 if(isset($_GET['edit']))
 {
$id=$_GET['id'];


//    $id=$_GET['id'];
    if(isset($_GET["Name"]))
    {   
		 		$name=$_GET["Name"];
				$query = "UPDATE upload
						SET Name = '$name'
						WHERE id = '$id';";
				mysqli_query($conn,$query) or die('Error, query0 failed');
            
                
    }

    if(isset($_GET["title"]))
    {   
		 		$title=$_GET["title"];
				$query = "UPDATE upload
						SET title = '$title'
						WHERE id = '$id';";
                        mysqli_query($conn,$query) or die('Error, query0 failed');                
    }

    if(isset($_GET["keywords"]))
    {   
		 		$key=$_GET["keywords"];
				$query = "UPDATE upload
						SET keywords = '$key'
						WHERE id = '$id';";
				mysqli_query($conn,$query) or die('Error, query0 failed');
                
    }

    if(isset($_GET["description"]))
    {   
		 		$desc=$_GET["description"];
				$query = "UPDATE upload
						SET description = '$desc'
						WHERE id = '$id';";
				mysqli_query($conn,$query) or die('Error, query0 failed');
                
    }

    if(isset($_GET["content"]))
    {   
		 		$content=$_GET["content"];
				$query = "UPDATE upload
						SET content = '$content'
						WHERE id = '$id';";
				mysqli_query($conn,$query) or die('Error, query0 failed');
                
    }
      header("location: edit_page.php?message=SUCCESS!");
 }
    else
    {
        
    }   


//    else
//    {
//        header("location: edit_page.php?message=Error in editing. Please try Again!");
//    }
    
    
    include 'library/closedb.php';
?>