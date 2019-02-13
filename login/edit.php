<?php include 'header.html' ?>
<?php include 'loginheader.php' ?>

        <div id="page-wrapper" >
 <div id="page-inner">
                 <div class="container">
                 <h3>Select Field that needs to be edited</h3><hr>
                <form action="edit_field.php" method="post">
                    <input type="checkbox" name="alter[]" value="Name" >Name
                    <input type="checkbox" name="alter[]" value="title" >Title
                    <input type="checkbox" name="alter[]" value="keywords" >Keywords
                    <input type="checkbox" name="alter[]" value="description" >Description
                    <input type="checkbox" name="alter[]" value="content" >Content
                    <input type='hidden' name='id' value='<?php echo $_GET['id'];?>'/> 
                    <button type="submit">Submit</button>
                     </form>

               
 