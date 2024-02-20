<?php
include "core/dbconnect.php";
error_reporting(true);
session_start();
if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];


$query = "SELECT * from user where email='$email'";

$ret = mysqli_query($conn , $query);
$total = mysqli_num_rows($ret);
$res=mysqli_fetch_assoc($ret);

// echo $res['fullname'];

//   echo "Email Is : ".$email." and Password is : ".$password;


  if ($total != 0) {
    if($password == $res['password']){
    // Set session variables
    $_SESSION['email'] = $email;
    $_SESSION['logged_in'] = true;
    header("Location: dashboard/home.php");
    exit();
    }else{
      $error = "Password Do not match";
    }

// //     // Redirect to the home page or wherever you want to go after login
     
  } else {
//     // Display an error message
    $error = "Invalid username or password.";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="core/style.css">
</head>
<body>
  <div class="login-box">
    <h1>Login</h1>
    <h3><?php echo $error; ?></h3>
    <form method="POST" >
      <label for="username">Email:</label>
      <input type="text" id="username" name="email" required="true">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required="true">
      <input type="submit" name="login" value="Login">
    </form><br>
    <div> <a href="forgot.php"> Forgot Password ?</a></div>
  </div>
</body>
</html>