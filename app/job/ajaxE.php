<?php
error_reporting(true);
session_start();
include "../config/connect.php";


$job_title = $_POST['job_title'];
$Job_discp = $_POST['Job_discp']; 
$city = $_POST['city'];

$output = "";


$query = "UPDATE  `jobs` SET `job_title`='$job_title',`Job_discp`='$Job_discp',`city`='$city' where";
$res  = mysqli_query($connect,$query);

if($res){

    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Job '.$job_title.' is Upadated!
  </div>
  ';
  header("Location: ../dashboard.php?page-name=job-post");
}else{
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
    Failed to update the job
  </div>
  ';
  header("Location: ../dashboard.php?page-name=job-post");
}

$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>