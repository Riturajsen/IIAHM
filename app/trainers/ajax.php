<?php
error_reporting(false);
session_start();
include "../config/connect.php";

$file = $_FILES['trainimg']['name'];
$target_dir = "../assets/images/trainer/";
$target_file = md5("Image".basename($file)).".png";

$fname = $_POST['fname']; 
$tfield = $_POST['tfield'];
$bio = $_POST['bio'];
$showH = $_POST['showH'];

$output = "";


$query = "INSERT INTO `trainer`( `trainimg`, `fname`, `tfield`, `bio`, `showH`) VALUES ('$target_file','$fname','$tfield','$bio','$showH')";

$res  = mysqli_query($connect,$query);

if($res){
  move_uploaded_file($_FILES["trainimg"]["tmp_name"], $target_dir.$target_file);
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Trainer Added
  </div>
  ';

  

  header("Location: ../dashboard.php?page-name=blogs");
}else{
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
    Trainer Cannot Be Added
  </div>
  ';
  header("Location: ../dashboard.php?page-name=trainers");
}

$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>