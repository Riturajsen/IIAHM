<?php
session_start();

include "config/connect.php";




if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
    $secure_id = $_SESSION['secure_id'];
    $query_get_user = "SELECT * from `users` where `secure_id`='$secure_id'";
    $User_response = mysqli_query($conn,$query_get_user);
  
    $get_user = mysqli_fetch_array($User_response);
    $rights = $get_user['rights'];
  if($get_user['id'] == $_GET['id']){
    $_SESSION['msg'] = "You cannot delete your own account Ask your admin to do that!";
        header("Location: viewAdmin.php");
  }else{
    if($rights == 3){
        $uid = $_GET['id'];
        
        $query = "SELECT * from users where id=$uid";
        $del_res = mysqli_query($conn , $query);
        $del_ret = mysqli_fetch_array($del_res);
        
        if($del_ret['rights'] == 3){
            $_SESSION['msg'] = "You cannot delete this account ";
        header("Location: viewAdmin.php");
        }else{
            $query_del = "DELETE From users where id=$uid";
            $dele_res = mysqli_query($conn,$query_del);
            if (!$dele_res){
                $_SESSION['msg'] = "Something went Wrong! cannot delete this account ";
                header("Location: viewAdmin.php");

            }else{
                $_SESSION['msg'] = "Account Deleted Successfully";
                header("Location: viewAdmin.php"); 
            }
        }


    }else {
        $_SESSION['msg'] = "Not Enough Rights!";
        header("Location: viewAdmin.php");
        
    }
}
}
?>
