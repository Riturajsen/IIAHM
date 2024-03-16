
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

  if ($returnAuth == 1 || $returnAuth == 2 || $returnAuth == 3){
    $fetch_tele = mysqli_query($conn, "SELECT * FROM users where rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);
   
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <select name="course" class="form-control bg-dark text-white" id="course">
     
    <?php
  if(mysqli_num_rows($fetch_tele) > 0) {
    ?>   <option value="">Select A Caller</option>
    <?php
    
    while ($row=mysqli_fetch_array($fetch_tele)){
    ?>
<option value="<?=$row['id']?>"><?=$row['username']?></option>


<?php } } else{ echo " <option value=''>No Caller Added</option>";} ?>
    </select>
    <!-- Excel file upload form -->
 <div id="myTable"></div>
    <!-- Data list table --> 
     

</div>

    </table>
  </div>
    

</div>

             <!-- footer start-->
             <?php include ('helper/footer.php'); ?>
             </div>
        </div>
            <!-- footer End -->
            <script type="text/javascript">
$("#course").change(function(){
    var course = $(this).val();
    $.post('helper/getTeleRep.php', {course: course}, function(response){
        // your drop down box is in response
        $("#myTable").html(response);
    });
});

</script>
   
            </body>
</html>



<?php 
  } echo  " you don't have enough rights for the page to view <a href='home.php'>Go Home</a> ";
}else {
    header('location: ../');
}
?>                

