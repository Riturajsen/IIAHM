<?php
session_start();
 include "../../core/main.php";
$contactNo = $_POST['number'];
$id = $_POST['ChildId'];

$calledDone= 1;

$query = mysqli_query($conn ,"UPDATE studentdetails SET called = '".$calledDone."' where id='$id'");

if(!$query){
    echo "We ran into some error";

}
else {
   header('location: tel:'.$contactNo);
}
?>
