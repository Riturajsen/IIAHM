<?php
error_reporting(true);
session_start();
include "../config/connect.php";
$id = $_POST['id'];
 
$file = $_FILES['trainimg']['name'];

$target_dir = "../assets/images/trainer/";


$fname = $_POST['fname']; 
$tfield = $_POST['tfield'];
$bio = $_POST['bio'];
$showH = $_POST['showH'];

$target_file = $fname.".png";

$output = "";


$query = "UPDATE `trainer` SET `trainimg`='$target_file',`fname`='$fname',`tfield`='$tfield',`bio`='$bio',`showH`='$showH' Where id=$id";

$res  = mysqli_query($connect,$query);

if($res){
  move_uploaded_file($_FILES["trainimg"]["tmp_name"], $target_dir.$target_file);
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Trainer Upadted
  </div>
  ';

  

  header("Location: viewtrain.php");
}else{
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
    Trainer Cannot Be Added
  </div>
  ';
  header("Location: viewtrain.php");
}

$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>