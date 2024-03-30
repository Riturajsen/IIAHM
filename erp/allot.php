
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

    $total_unsign_data = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo IS NULL OR allotedTo = ' '");
    $number_of_contact = mysqli_num_rows($total_unsign_data);
    $fetch_tele = mysqli_query($conn, "SELECT * FROM users where rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);
   
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <form id="myForm" action="" method="post">
    <select name="teleCaller" class="form-control bg-dark text-white" id="teleCaller">
     
    <?php
  $ret = mysqli_query($conn , "SELECT * FROM  users where rights=4");
  if(mysqli_num_rows($ret) > 0) {
    ?>   <option value="">Select A Caller</option>
    <?php
       $i =1;
    while ($row=mysqli_fetch_array($ret)){
    ?>
<option value="<?=$row['id']?>"><?=$row['username']?></option>


<?php } } else{ echo " <option value=''>No Caller Added</option>";} ?>
    </select></form>
    <!-- Excel file upload form -->
    <div class="row p-3">
    <!-- Import link -->
    
    <div class="col-6 col-md-3"><input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search for any Location or College"></div>
    <!-- Excel file upload form -->
 <div id="myTable"></div>
    <!-- Data list table --> 
     

</div>
    <!-- Data list table --> 
     <div class="inline m-3">
<button class="btn btn-primary">Select first 25</button>
<button class="btn btn-primary">Select first 50</button></div>
</div>
<form action="helper/fetchDataTable.php" method="post">
<input type="hidden" name="TeleId" id="TeleId">
<table class="table table-hover">
                                    <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Allot</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // Get member rows 
        $result = $con->query("SELECT * FROM studentdetails where allotedTo IS NULL OR allotedTo = ' ' ORDER BY id DESC "); 
        if($result->num_rows > 0){ $i=0; 
            while($row = $result->fetch_assoc()){ $i++; 
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['contactno']; ?></td>
                <td><input type="checkbox" name="allotedid[]" value="<?=$row['id']?>" ></td>
        <?php } }else{ ?>
            <tr><td colspan="4">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
        <input type="submit" class="form-control bg-dark text-white"  value="Assign">
        <hr>
        </form>
    </table>
  </div>
        




</div>
             <!-- footer start-->
             <?php include ('helper/footer.php'); ?>
            <!-- footer End -->
     <script type="text/javascript">
       var getId = document.getElementById('teleCaller');
       

       getId.addEventListener("click",(event) => {
        document.getElementById('TeleId').value = getId.value; });
     </script>
         <script type="text/javascript">
$("#course").change(function(){
    var course = $(this).val();
    $.post('helper/getLocation.php', {course: course}, function(response){
        // your drop down box is in response
        $("#myTable").html(response);
    });
});

        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val();
                // alert(input);
                if(input != ""){
                    $.ajax({
                        url:"helper/getLocation.php",
                        method: "POST",
                        data:{input:input},
                        success:function(data){
                            $("#searchresult").html(data);
                            $("#searchresult").css("display","block");


                        }
                    });
                }else{
                    $("#searchresult").css("display","none");
                }
            });
        });
    </script>
   
            </body>
</html>



<?php 
}else {
    header('location: ../');
}
?>                