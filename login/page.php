<html>

    <head>
                       
                <?php


                        // if id is set then get the file with the id from database

                        include 'library/config.php';
                        include 'library/opendb.php';
                        $id    = $_GET['id'];
                        $query = "SELECT title, keywords, description, content " .
                                 "FROM upload WHERE id = '$id'";

                        $result =mysqli_query($conn,$query) or die('Error, query0 failed');
                        list($title,$keywords,$description,$content) =   mysqli_fetch_array($result);

                        ?>
        
        <title><?php echo $title;?></title>
        <meta name="description" content="<?php echo $description ?>" />
	
        <meta name="keywords" content="<?php echo $keywords ?>"/>
        
    </head>
    
    <body>
         
        <?php echo $content;?>
    
    </body>


    <?php
        include 'library/closedb.php'; 
                        exit;

    ?>
</html>