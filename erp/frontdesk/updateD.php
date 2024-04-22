<?php
session_start();
$Pnumber = $_POST['Pnumber'];
$fname  = $_POST['fname'];
$age    = $_POST['age'];
$weight     = $_POST['weight'];
$height     = $_POST['height'];
$parentsOcc     = $_POST['parentsOcc'];
$counselor  = $_POST['counselor'];
$bmiDenomination = $height/100;
$bmi = floor($weight/pow($bmiDenomination ,2)) ;

$query = mysqli_query($conn ,"UPDATE studentdetails SET fname = '".$fname."' , age = '".$age."' , weight = '".$weight."', height = '".$height."', parentsOcc = '".$parentsOcc."' , weight = '".$weight."', height = '".$height."' where Pnumber='$Pnumber'");

?>