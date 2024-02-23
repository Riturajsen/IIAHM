<?php
session_start();
$uid = $_GET['id'];
include "config/connect.php";




if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
$query = "DELETE From form where id=$uid";
$res = mysqli_query($conn , $query);

if(!$res){
    $_SESSION['msg'] = "Unable to delete the Entry";
    header('Location: dashboard.php?page-name=form');
    exit();
}else{
    $_SESSION['msg'] = "Deleted The Entry";
    header('Location: dashboard.php?page-name=form');
    exit();
}

}?>