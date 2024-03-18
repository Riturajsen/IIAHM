<?php 
if(!empty($_GET['id'])){ 
    // Database configuration 
include "../../core/main.php";
     
     
    if ($con->connect_error) { 
        die("Unable to connect database: " . $con->connect_error); 
    } 
     
    // Get content from the database 
    $query = $con->query("SELECT * FROM studentdetails WHERE id = {$_GET['id']}"); 
     
    if($query->num_rows > 0){ 
        $cmsData = $query->fetch_assoc(); 
        echo '<h5>'.$cmsData['fname'].'</h5>'; 
        echo '<p>'.$cmsData['id'].'</p>'; 
    }else{ 
        echo 'Content not found....'; 
    } 
}else{ 
    echo 'Content not found....'; 
} 
?>