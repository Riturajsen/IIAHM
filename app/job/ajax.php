<?php
error_reporting(false);
include "../config/connect.php";

$num = rand(00000,99999);

$job_title = $_POST['job_title'];
$jobid = md5($num) ;
$Job_discp = $_POST['Job_discp']; 
$city = $_POST['city'];
$posted_by = $_POST['posted_by'];

$output = "";


$query = "INSERT INTO `jobs`(`jobid`, `job_title`, `Job_discp`, `city`, `posted_by`) VALUES ('$jobid','$job_title','$Job_discp','$city','$posted_by')";
$res  = mysqli_query($connect,$query);

if($res){

    $output = '<div class="alert alert-success" role="alert">
    Job Posted
  </div>
  ';
}else{
    $output = '<div class="alert alert-danger" role="alert">
    Form Cannot be submitted As of Now
  </div>
  ';
}

$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>