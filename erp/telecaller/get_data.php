<?php
session_start();
include "../../core/main.php";
if(isset($_POST['stdId'])){
 $id = $_SERVER['stdId'];
 
 $sql = "SELECT * from studentdetails where id=`$id`";
 $result = mysqli_query($con,$sql);
 
 $response = "<table border='0' width='100%'>";
 while( $row = mysqli_fetch_assoc($result) ){
 $id = $row['id'];
 $name = $row['fname'];
 $email = $row['filesource'];
$contact = $row['contactno'];
 $country = $row['status'];
 
 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$name."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Source : </td><td>".$email."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Contact : </td><td>".$contact."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Status : </td><td>".$country."</td>";
 $response .= "</tr>";
 }
 $response .= "</table>";
 
 echo $response;
 exit;
}
?>