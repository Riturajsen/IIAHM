<?php error_reporting(true) ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IIAHM | Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
          input{
        padding: 10px !important;
        margin: 10px !important;
    }
    </style>
  </head>

  <div class="container col-lg-6 mt-5 shadow-lg p-5">
        <div class="text-center">
    <form method="post" enctype="multipart/form-data" action="upload.php">
    <div class="form-input py-2">
        <div class="form-group">
          <input type="text" class="form-control" name="name"
                 placeholder="Enter your name" required>
                 
        </div>   <input type="hidden" name="utm_data" value="<?=$_GET['utm_target']?>">
        <div class="form-group">
          <input type="text" name="Pnumber" pattern="[6-9]{1}[0-9]{9}"  class="form-control" name="Pnumber"
                 placeholder="Enter your Contact" required>
        </div>                                 
        <div class="form-group">
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
        </div>
        <div class="form-group">
          <input type="submit" class="btnRegister btn btn-primary form-control"
                 name="submit" value="Submit">
        </div>
   </div>
</form>  
    </div>
  
  </div>

