<?php
session_start();

include "Emp_Upload/dbconfig.php";

// $host = "localhost";
// $username = "root";
// $password = "admin";
// $database = "Alpha_Main";

$conn = mysqli_connect($host, $username, $password, $database);

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Page Maker</title>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>
<body>
  <h1>Page Maker</h1>
  <?php
  if($_POST) {
    $content = $_POST['content'];
    $filename = $_POST['filename'];

    $file = fopen("pages/made/".$filename.".php", "w");
    fwrite($file, $content);
    fclose($file);

    echo "<p>Page created: <a href='pages/made/$filename.php'>$filename</a></p>";
  }
  ?>
  <form method="post">
     <div class="form-group">
           <label class="col-md-12 mb-0">File Name</label>
          <div class="col-md-12">
               <input type="text" name="filename"
                   class="form-control ps-0 form-control-line">
           </div>
      </div>

    <div class="form-group">
     <label class="col-md-12 mb-0">Content</label>
         <div class="col-md-12">
    <textarea name="content" id="editor" rows="5" class="form-control ps-0 form-control-line"></textarea>
          </div>
       </div>


    <input type="submit" class="form-control btn btn-primary" value="Create">
  </form>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>
</html>
<?php } ?>