<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
 include "../../core/main.php";
$contactNo = $_POST['number'];
$id = $_POST['ChildId'];
$TimeCalled = $_POST['TimeCalled']+1;

$calledDone= 1;
$date = date("j F Y h:i:s A");
$query = mysqli_query($conn ,"UPDATE studentdetails SET called = '".$calledDone."',TimeCalled = '".$TimeCalled."', modified = '".$date."' where id='$id'");

if(!$query){
    echo "We ran into some error";

}
else {
   header('location: tel:'.$contactNo);
}
?>
