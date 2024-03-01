<?php
include "../config/connect.php";


    
    $uid = $_GET['id'];
    $unlink = $_GET['unlink'];
    unlink('../assets/images/trainer/'.$unlink);
    $query_del = "DELETE From trainer where id=$uid";
    $dele_res = mysqli_query($conn,$query_del);
    if (!$dele_res){
        $_SESSION['msg'] = "Something went Wrong! cannot delete this Application ";
        header("location: viewTrain.php");
        exit();
    }else{
        $_SESSION['msg'] = "Application Deleted Successfully";
        header("location: viewTrain.php"); 
        exit();
    }

?>