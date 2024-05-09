<?php 
session_start();
include "../../core/main.php";

$TeleId = $_POST['TeleId'];
$allotedid = $_POST['allotedid'];


if($TeleId == 0 ){
    $_SESSION['qstring'] = 'invalid_file'; 
    header('location: ../allot.php'); 
}
else{

    if(!empty($allotedid)){
foreach($allotedid as $alloted){
    $con->query("UPDATE studentdetails SET allotedTo = '".$TeleId."' WHERE id = '".$alloted."'"); 
}
$_SESSION['qstring'] = 'succ'; 
header('location: ../allot.php');   
 }
 else{
    $_SESSION['qstring'] = 'err'; 
    header('location: ../allot.php'); 
 }

} ?>