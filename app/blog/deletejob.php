<?php
include "../config/connect.php";
    session_start();
$uid = $_POST['jobid'];
if($uid >= 1){

    $dele_res = mysqli_query($connect,"DELETE from jobs where id=$uid");

if (!$dele_res){
    $_SESSION['msg'] = "Something went Wrong! cannot delete this Job ";
    header("location: viewjobs.php");
    exit();
}else{
    $_SESSION['msg'] = "Job Deleted Successfully";
    header("location: viewjobs.php"); 
    exit();
}
}
else {
    $_SESSION['msg'] = "Invalid Token";
    header('location: viewjobs.php');
    exit();
}

?>