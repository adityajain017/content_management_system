<?php include 'header.html' ?>
<?php include 'loginheader.php' ?>
        <div id="page-wrapper" >
 <div id="page-inner">
                 <div class="container">
                 <h2>Edit Existing Pages</h2><hr>
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

//$con = mysqli_connect($host,$username,$password,$db_name) or die ('Error connecting to mysql');
//$result=mysqli_query($con,$query);
//print_r(mysqli_fetch_all($result));


if(mysqli_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
while(list($id,$name) = mysqli_fetch_array($result))
{
?>
                 <a href="edit.php?id=<?php echo $id;?>"><?php echo $name ?></a> <br>
<?php 
}
}
print_r($name);
print_r($id);

include 'library/closedb.php';
?>
</div>
</div>
            
 <?php include '../footer.html' ?>