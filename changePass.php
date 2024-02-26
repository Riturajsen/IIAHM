<?php
error_reporting(false);
$token = $_GET['token'];

$msg = $_GET['rmsg'];

if(strlen($token == 0)){
    echo "<h3>Somthing Went wrong Please check the Token or try resetting again!</h3>";
}
else{

    include "app/config/connect.php";
    if(isset($_POST['change'])){
       $pasword =  md5($_POST['pasword']);
       $token = $_POST['token'];

       $secure_query = "UPDATE `users` SET `pasword`='$pasword' WHERE token ='$token'";
       $sec_res = mysqli_query($conn,$secure_query);
       if($sec_res){
        $msg = "Changed Password Login again!";
        header('location: index.php?msg='.$msg);
        exit();
       }
       else{
            echo "Somthing Went Wrong!";
       }
       
    }

    
        $sql = "SELECT * FROM users WHERE token='$token'";
        $result = mysqli_query($conn, $sql);
        
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
?>


<!--
  rights 
  
0=Users
1=editor
2=admin -->


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
    <form  method="POST">
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?=$row['email']?>" readonly="true">
        <input type="hidden" name="token" value="<?=$token?>">
      </div>
      <div class="form-group">
        <label for="username">Password :</label>
        <input type="password" class="form-control" id="pasword" name="pasword" >
      </div>
     
      <button type="submit" name="change" class="btn btn-primary form-control">Change Password</button>

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

<?php } else {
    echo "<h3>Somthing Went wrong Please check the Token or try resetting again!</h3>";}}  ?>