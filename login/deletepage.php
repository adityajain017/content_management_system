<?php include 'header.html' ?>
<?php include 'loginheader.php' ?>
       <?php include 'header.html' ?>
<div id="page-wrapper" >
 <div id="page-inner">
                 <div class="container">
                 <h2>Delete Existing Pages</h2><hr>
                    <!--Message from redirection-->
                <div class="alert alert-success container alert-dismissable">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong><center>
                    <?php 
                        if(isset($_GET['message']))
                        {  
                            $message= $_GET['message'];
                            echo $message; 
                        }?>    
                </center>

                    </strong>
            </div><!--Message Closed-->


                <h3>Pages Present:</h3>
<?php
include 'library/config.php';
include 'library/opendb.php';
                     
$username= $_SESSION['username'];

$query = "SELECT id FROM members WHERE username='".$username."'";
$result =mysqli_query($conn,$query) or die('Error, query0 failed');
list($user_id)=mysqli_fetch_array($result);                     

$query = "SELECT id,Name FROM upload WHERE user_fkey='".$user_id."'";                     
$result = mysqli_query($conn,$query) or die('Error, query0 failed');

if(mysqli_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
    echo '<form class="form-horizontal" action="delete.php" method="post">';
while(list($id,$name) = mysqli_fetch_array($result))
{
?>
                 <input type="checkbox" name="pages[]" value="<?php echo $name ?>" ><?php echo $name ?></input> <br/>
                 
<?php 
}
    echo '<br/><button class="submit" >Delete</button>';
                             echo '</form>';    

}
include 'library/closedb.php';
?>
</div>
</div>
            
 <?php include '../footer.html' ?>