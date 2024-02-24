<?php
include "../config/connect.php";
    
$uid = $_POST['jobid'];
$query_del = "DELETE From jobs where `jobid`=`$uid`";
$dele_res = mysqli_query($conn,$query_del);
if (!$dele_res){
    $_SESSION['msg'] = "Something went Wrong! cannot delete this Application ";
    header("location: viewjobs.php");
    exit();
}else{
    $_SESSION['msg'] = "Application Deleted Successfully";
    header("location: viewjobs.php"); 
    exit();
}


?>