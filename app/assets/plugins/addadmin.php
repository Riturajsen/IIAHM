<?php
session_start();
include "../../config/connect.php";
$fname = $_POST['fname'];
$username = $_POST['username'] ;
$pasword = md5($_POST['pasword']) ;
$email = $_POST['email'] ;
$rights = $_POST['rights'] ;

$query_check = "SELECT * FROM users where username='$username'";

$res_check = mysqli_query($connect,$query_check);
if(mysqli_num_rows($res_check) < 1 ){

$query = "INSERT INTO `users`( `fname`, `username`, `pasword`, `email`, `rights`) VALUES ('$fname','$username','$pasword','$email','$rights')";

$res = mysqli_query($connect , $query);

if (!$res){
        $_SESSION['msg'] = "Unable to add  new user";
        header("Location: ../../dashboard.php?page-name=Add_Admin");
        exit();
}
else{
    $_SESSION['msg'] = "Added new user";
    header("Location: ../../dashboard.php?page-name=Add_Admin");
    exit();
}
}else{
    $_SESSION['msg'] = "Username Already In use";
    header("Location: ../../dashboard.php?page-name=Add_Admin");
    exit();
}
?>

<h1>404 Not Found</h1>