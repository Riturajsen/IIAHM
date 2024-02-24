<?php
session_start();
error_reporting(false);
include "app/config/connect.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $sql = "SELECT * FROM users WHERE email ='$email'";
  $result = mysqli_query($conn, $sql);
  

  if (mysqli_num_rows($result) == 1) {
        echo "Found A account";
  } else {
    echo "No Account Found Associated with This Email";
  }
}
mysqli_close($conn);
?>