<?php
include "../config/connect.php";
session_start();
error_reporting(true);
$file_logo = $_FILES['logo']['name'];
$file_bghero = $_FILES['bgimghero']['name'];

$target_dir = "../assets/images/";

$scrollert  = $_POST['scrollert']; 
$adress  = $_POST['adress'];
$email  = $_POST['email'];
$ContactNo  = $_POST['ContactNo'];
$h1text  = $_POST['h1text'];
$subhead  = $_POST['subhead'];
$paraM  = $_POST['paraM'];
$listM  = $_POST['listM'];
$Whyimg  = $_POST['Whyimg'];
$whyiiahmtext  = $_POST['whyiiahmtext'];
$affimg  = $_POST['affimg'];
$textaff  = $_POST['textaff'];
$target_file_logo = "logo.jpg";
$target_file_bghero = "bghero.jpg";



$query= "UPDATE `websitesetting` SET `scrollert`='$scrollert',`adress`='$adress',`email`='$email',`ContactNo`='$ContactNo',`logo`='$target_file_logo',`bgimghero`='$target_file_bghero',`h1text`='$h1text',`subhead`='$subhead',`paraM`='$paraM',`listM`='$listM',`Whyimg`='$Whyimg',`whyiiahmtext`='$whyiiahmtext',`affimg`='$affimg',`textaff`='$textaff' WHERE id=1 ";

$res  = mysqli_query($connect,$query);


if($res){

    move_uploaded_file($_FILES["logo"]["tmp_name"], $target_dir.$target_file_logo);

    move_uploaded_file($_FILES['bgimghero']['tmp_name'], $target_dir.$target_file_bghero);

    $_SESSION['output'] = "Changed the data";
    header('location: ../dashboard.php?page-name=Website_edit');
}else{
    $_SESSION['output'] = "Failed to Change";
    header('location: ../dashboard.php?page-name=Website_edit');

}
?>