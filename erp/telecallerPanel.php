


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
    $fetch_tele = mysqli_query($conn, "SELECT * FROM users where rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);
    $allotedId = $returnAuth['id'];
    $globalTeledata = mysqli_query($conn , "SELECT * from studentdetails where allotedTo=$allotedId");

   
?>
<!DOCTYPE html>
<html lang="en">

<!-- header start -->
<?php include ('helper/header.php'); ?>

<!-- header End -->
            <div id="layoutSidenav_content">
            <?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12 p-3">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>
            <!-- Display status message -->

<div class="">
<div class="row p-3">
    <!-- Import link -->
   <?php     if($page == 'teleTotalData')   { include "telecaller/index.php"; };?> 
   <?php     if($page == 'callStart')       { include "telecaller/callStart.php"; };?> 
   <?php     if($page == 'allCalls')        { include "telecaller/allCalls.php"; };?> 
  </div>
        




</div>
             <!-- footer start-->
             <?php include ('helper/footer.php'); ?>
            <!-- footer End -->
     <script type="text/javascript">
       var getId = document.getElementById('teleCaller');
    //    getId.addEventListener

       getId.addEventListener("click",(event) => {
        document.getElementById('TeleId').value = getId.value; });
     </script>
   
            </body>
</html>



<?php 
} else {
    header('location: ../');
}
?>                