<html>
<head>
<title>
Create a Web Page
</title>
</head>
<body>

<div class="container">
  <h2>CMS Data Input</h2>
 
  <form class="form-horizontal" method= "POST" action="upload.php">
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
      <input type="text" class="form-control"  name="content">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
