<?php
error_reporting(false);
session_start();
include "../config/connect.php";

$file = $_FILES['blogimg']['name'];
$target_dir = "blogimg/";
$target_file = md5("Image".basename($file)).".png";

$title = $_POST['title']; 
$blog = $_POST['blog'];
$posted_by = $_POST['posted_by'];

$output = "";


$query = "INSERT INTO `blog`( `img`, `title`, `blog`, `poated_by`) VALUES ('$target_file','$title','$blog','$posted_by')";
$res  = mysqli_query($connect,$query);

if($res){
  move_uploaded_file($_FILES["blogimg"]["tmp_name"], "blogimg/".$target_file);
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
  Blog Submitted
  </div>
  ';
  header("Location: ../dashboard.php?page-name=blogs");
}else{
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
    Form Cannot be submitted As of Now
  </div>
  ';
  header("Location: ../dashboard.php?page-name=blogs");
}

$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>