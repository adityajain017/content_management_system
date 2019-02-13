<?php include 'header.html' ?>
<?php include 'loginheader.php' ?>
<div id="page-wrapper" >
            <div id="page-inner">
<div align=left> 
   <h1>Make Changes</h1> </div> 
<div class="container">
 <?php $elements=$_POST['alter']; ?>

<?php $id=$_POST['id'];
   
    ?>
  <form class="form-horizontal" method="get" action="alter.php">
    
    <?php 
      foreach($elements as $loop)
      {
    ?>
     <div class="form-group">
      <label for="name"><?php echo $loop; ?></label>
          <input type="text" class="form-control"  name="<?php echo $loop;?>">
    </div>
      <?php
      }
      ?>
    <input type='hidden' name='id' value='<?php echo $id;?>'/> 
    <button type="submit" class="btn btn-default" name="edit">Edit</button>
  </form>
</div>
    </div></div>

<?php include '../footer.html' ?>
