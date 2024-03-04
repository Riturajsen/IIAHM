<?php
session_start();
include('../config/connect.php');

if(isset($_POST['insert'])){
    $testauthor = $_POST['testauthor'];
    $texttest   = $_POST['texttest'];


    $insertQuery = "INSERT INTO `testimonial`(`texttest`, `testauthor`) VALUES ('$texttest','$testauthor')";

    $res = mysqli_query($conn , $insertQuery);
    if($res){
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
                Testimonial Added
  </div>
  ';
        header('location: ../dashboard.php?page-name=testimonial');
       
    }
    else {
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
        Testimonial Cannot Be added 
        </div>
        ';
      header('location: ../dashboard.php?page-name=testimonial');
      
    }
}
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $del = mysqli_query($conn , "DELETE FROM testimonial where id=$id" );
    if($del){
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
        Testimonial Deleted
        </div>
        '; 
        header('location: ../dashboard.php?page-name=Viewtestimonial');
    }
    else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
        Testimonial Cannot Deleted
        </div>
        '; 
        header('location: ../dashboard.php?page-name=Viewtestimonial');
    }
}


?>