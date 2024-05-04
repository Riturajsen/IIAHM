<?php
session_start();
error_reporting(true);
include "app/config/connect.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = md5($_POST["password"]);
  $secure_id = md5(date('h:i:s').$username);
  // echo "username is : ".$username." | Password is : ".$password;
  $sql = "SELECT * FROM users WHERE username = '$username' AND pasword = '$password'";
  $result = mysqli_query($conn, $sql);
  

  if (mysqli_num_rows($result) == 1) {
    
    $secure_query = "UPDATE `users` SET `secure_id`='$secure_id',`isActive`=1 WHERE `username`='$username'";
    $sec_res = mysqli_query($conn,$secure_query);

    $_SESSION["secure_id"] = $secure_id;
    $_SESSION["username"] = $username;
    header("Location: app/dashboard.php");
  } else {
    echo "Invalid username or password.";
  }
}
mysqli_close($conn);
?>