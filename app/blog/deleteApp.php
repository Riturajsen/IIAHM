<?php
include "../config/connect.php";


    
    $uid = $_GET['id'];

    echo $uid;
    $unlink = $_GET['unlink'];
    unlink('../../jobs/pdf/'.$unlink);
    $query_del = "DELETE From jobapply where id=$uid";
    $dele_res = mysqli_query($conn,$query_del);
    if (!$dele_res){
        $_SESSION['msg'] = "Something went Wrong! cannot delete this Application ";
        header("location: viewApp.php");
        exit();
    }else{
        $_SESSION['msg'] = "Application Deleted Successfully";
        header("location: viewApp.php"); 
        exit();
    }

?>