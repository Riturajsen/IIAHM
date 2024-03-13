<?php 
session_start();
include "../../core/main.php";

$TeleId = $_POST['TeleId'];
$allotedid = $_POST['allotedid'];


// echo "<pre>";
// print_r($);
// Use json_encode() function  

  
// Display the output  
// $json = json_encode($allotedid);  
// $output = $json;  
// $int_var = preg_replace('/[^0-9]/', '', $output);   
//    // print output of function 
//    echo("The numbers are: $int_var \n");  
  


foreach($allotedid as $alloted){
    $con->query("UPDATE studentdetails SET allotedTo = '".$TeleId."' WHERE id = '".$alloted."'"); 
}
  
$_SESSION['qstring'] = 'succ'; 
header('location: ../allot.php');
?>