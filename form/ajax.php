<?php
error_reporting(false);
include "../core/main.php";
session_start();
$captcha = $_SESSION['captcha'];



$captchaT = $_POST['captcha'];

if($captcha == $captchaT){
$fname = $_POST['fname'];
$utm_source = $_POST['utm_source']; 
$utm_target = $_POST['utm_target'];
$email = $_POST['email'];
$Pnumber = $_POST['Pnumber'];
$education = $_POST['education'];
$city = $_POST['city'];
$course = $_POST['course'];
$output = "";
if(strlen($fname) == 0){
    $output = '<div class="alert alert-danger" role="alert">
    Name Not Filled
  </div>
  ';
}
   else{ 

$query = "INSERT INTO `form`(`fname`, `utm_source`, `utm_target`, `email`, `Pnumber`, `education`, `city` ,`course`) VALUES ('$fname','$utm_source','$utm_target','$email','$Pnumber','$education','$city','$course')";
$res  = mysqli_query($connect,$query);

if($res){
  
$_SESSION['captcha']= "";
    $output = '<div class="alert alert-success" role="alert">
    Form Submitted
  </div>
  ';
}else{
    $output = '<div class="alert alert-danger" role="alert">
    Form Cannot be submitted As of Now
  </div>
  ';
}
} }
else{
  $output = '<div class="alert alert-danger" role="alert">
 Expired or Mis-matched captcha!! Please Refresh The Page 
</div>
';
}
$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>