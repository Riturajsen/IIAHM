<?php
include "app/config/connect.php";
session_start();
$username = $_SESSION["username"];
$default = "DEFAULT";
mysqli_query($con,"UPDATE `users` SET `secure_id`= '$default' WHERE `username`='$username'");
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>