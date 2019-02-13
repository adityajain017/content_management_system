<?php include 'header.html' ?>
<?php include 'loginheader.php' ?>
<div id="page-wrapper" >
            <div id="page-inner">
<div align=left> 
   <h1> Welcome To Create Page Area</h1> </div> 
<div class="container">
  <h2>CMS Data Input</h2>
 
  <form class="form-horizontal" method= "POST" action="upload.php">
    <div class="form-group">
      <label for="name">Page Name: </label>
      <input type="text" class="form-control"  name="name">
    </div>
    <div class="form-group">
      <label for="email">Page Title: </label>
      <input type="text" class="form-control"  name="title">
    </div>
      <div class="form-group">
      <label for="email">Key Words: </label>
      <input type="text" class="form-control"  name="keywords">
    </div>
      <div class="form-group">
      <label for="email">Descriptions: </label>
      <input type="text" class="form-control"  name="description">
    </div>
    <div class="form-group">
      <label for="pwd">Content: </label>
        <textarea name="content" class="form-control" rows="8"></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Create</button>
  </form>
</div>
    </div></div>

<?php include '../footer.html' ?>
