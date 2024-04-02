


<?php

session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";

if(!empty($_SESSION['qstring'])){ 
    switch($_SESSION['qstring']){ 
        case 'succ': 
            $statusType = 'alert-success'; 
            $statusMsg = 'Student data has been alloted successfully.'; 
            break; 
        case 'err': 
            $statusType = 'alert-danger'; 
            $statusMsg = 'Something went wrong, please try again.'; 
            break; 
        case 'invalid_file': 
            $statusType = 'alert-danger'; 
            $statusMsg = 'Some Undefined Server error Caught'; 
            break; 
        default: 
            $statusType = ''; 
            $statusMsg = ''; 
    } 
    $_SESSION['qstring'] = " ";
} 


$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0){
    $returnAuth = mysqli_fetch_assoc($fetchAuth);
    $page = $_GET['page'];

   
?>
<!DOCTYPE html>
<html lang="en">

<!-- header start -->
<?php include ('helper/header.php'); ?>

<!-- header End -->
            <div id="layoutSidenav_content">
        
            <!-- Display status message -->

<div class="">
<div class="row p-3">
    <!-- Import link -->

            <?php if ($page === "teleTotalData"){ include "frontdesk/index.php";}?>

  </div>
        




</div>
             <!-- footer start-->
             <?php include ('helper/footer.php'); ?>
            <!-- footer End -->
     
   
            </body>
</html>



<?php 
} else {
    header('location: ../');
}
?>                