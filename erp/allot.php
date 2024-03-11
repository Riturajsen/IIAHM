
<?php

session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";

$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0){
    $returnAuth = mysqli_fetch_assoc($fetchAuth);

    $total_unsign_data = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo IS NULL OR allotedTo = ' '");
    $number_of_contact = mysqli_num_rows($total_unsign_data);
    $fetch_tele = mysqli_query($conn, "SELECT * FROM users where rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);
   
?>
<!DOCTYPE html>
<html lang="en">

<!-- header start -->
<?php include ('helper/header.php'); ?>

<!-- header End -->
            <div id="layoutSidenav_content">
            <!-- Display status message -->

<div class="container">
<div class="row p-3">
    <!-- Import link -->
  <?=$tele_num?>
    <!-- Excel file upload form -->
 

    <!-- Data list table --> 

</div>
            </div>
        
            </div>
             <!-- footer start-->
             <?php include ('helper/footer.php'); ?>
            <!-- footer End -->
   
            </body>
</html>



<?php 
}else {
    header('location: ../');
}
?>                