<?php
session_start();
include "../../core/main.php";
if(isset($_POST['stdId'])){
 $id = $_POST['stdId'];
 
 $sql = "SELECT * from studentdetails where id=".$id;
 $result = mysqli_query($con,$sql);
 
 $response = "<table class= 'table' border='0' width='100%'>";
 while( $row = mysqli_fetch_assoc($result) ){

 $id = $row['id'];
 $name = $row['fname'];
 $email = $row['filesource'];
 $contact = $row['institute'];
 $status = $row['status'];
 $lastUpdate = explode(PHP_EOL,$row['comment']) ;  // $row['comment'];

 $lastCall = $row['modified'];
 
 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$name."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Location : </td><td>".$email."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Called : </td><td>".count($lastUpdate)." Times </td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Institute : </td><td>".$contact."</td>";
 $response .= "</tr>";
 
 $response .= "<tr>";
 $response .= "<td>Status : </td><td>".$status."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Last Called at : </td><td>".$lastCall."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Last Call Update: </td>"; 
 $response .= "<td>"; 
 
 foreach($lastUpdate as $alloted)
 {
    $response .= " ".$alloted."<br>"; 
 }

 $response .= "</td></tr>";

 $response .= "<tr>";
 $response .= "<td> Next Follow Up : </td><td>".$row['followup']."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<a href='telecaller/callAction.php?id=".$id."&name=".$_SESSION['username']."' class='btn btn-success'>Call ".$name."</a>";
 $response .= "</tr>";

 }
 $response .= "</table>";
 
 echo $response;
 exit;
}
?>