<?php
session_start();
error_reporting(false);
include "app/config/connect.php";

$token = md5(uniqid().rand(1000000, 9999999)).rand(10000,99999).uniqid("_iiahm_");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $sql = "SELECT * FROM users WHERE email ='$email'";
  $result = mysqli_query($conn, $sql);
  

  if (mysqli_num_rows($result) == 1) {
    echo $token;
    // $secure_query = "UPDATE `users` SET `token`='$token' WHERE email ='$email'";
    // $sec_res = mysqli_query($conn,$secure_query);
  } else {
    echo "No Account Found Associated with This Email";
  }
}
mysqli_close($conn);
?>