<?php
error_reporting(true);
session_start();
include "../config/connect.php";
$id=$_POST['id'];
$file = $_FILES['blogimg']['name'];
$target_dir = "blogimg/";
$target_file = md5("Image".basename($file)).".png";

$title = $_POST['title']; 
$blog = $_POST['blog'];
$editedBy = $_POST['editedBy'];
$metaD = $_POST['metaD'];
$metaT = $_POST['metaT'];


$output = "";


$query = "UPDATE `blog` SET `img`='$target_file',`title`='$title',`blog`='$blog',`metaT`='$metaT',`metaD`='$metaD',`editedBy`='$editedBy' WHERE id='$id'";

$res  = mysqli_query($connect,$query);

if($res){
    move_uploaded_file($_FILES["blogimg"]["tmp_name"], "blogimg/".$target_file);
      $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Blog Updated
    </div>
    ';
    header("Location: ../dashboard.php?page-name=blogs");
  }else{
      $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
      Blog Cannot be Edited As of Now
    </div>
    ';
    header("Location: ../dashboard.php?page-name=blogs");
  }
  
  $resp = array(
      'output' => $output
  );
  echo json_encode($resp);
  ?>