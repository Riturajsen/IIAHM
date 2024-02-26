<!--
  rights 
  
0=Users
1=editor
2=admin -->
<?php
error_reporting(false);
$msg = $_GET['rmsg'];
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IIAHM Forgot Password</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<style>
  img{
    width: 200px;
    height: 120px;
  }
</style>
</head>
<body>
  <div class="container mt-5">
  <?php if($msg == ""){ }else{ ?>
  <div class="alert alert-info" role="alert">
  <?=$msg?>
</div><?php } ?>
    <div class="card p-3 shadow-lg">
      <div class="text-center"><img src="app/assets/images/logo.jpg" alt="LOGO"></div>
    <hr>
   
      <div class="row justify-content-center">
    
  
      <div class="col-md-6">
    <h2><u>Forgot Password</u></h2>
    <form action="forgotP.php" method="POST">
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" class="form-control" id="email" name="email" required>
      </div>
     
      <button type="submit" class="btn btn-primary form-control">Get Access</button>

    </form>

    <!-- <a href="index.php">Login</a> -->
    <hr>
    <div class="text-center">IIAHM © <?=date('Y')?>. All Rights Reserved </div>

    </div> 
    </div>
    </div>
  </div>
</body>
</html>