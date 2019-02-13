<?php
    
   include 'library/config.php';
   include 'library/opendb.php';
   


    if(isset($_POST["pages"]))
    {
      $dele=$_POST["pages"];
        
        
		 foreach($dele as $delete)
            {
				$query = "DELETE FROM upload WHERE Name='$delete'";
                mysqli_query($conn,$query) or die('Error, query0 failed');                
            }     
            $message="File is deleted" ;
 
        header( 'Location: deletepage.php?message='.$message ) ;
        
    }
    
    else
    {
       $message= "No Page Selected" ;
 
        header( 'Location: deletepage.php?message='.$message ) ;
        
    }
    
    include 'library/closedb.php';
?>