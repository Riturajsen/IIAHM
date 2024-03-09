
<?php

session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";

$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0){
    $returnAuth = mysqli_fetch_assoc($fetchAuth);

   

 
    // Get status message 
    if(!empty($_GET['status'])){ 
        switch($_GET['status']){ 
            case 'succ': 
                $statusType = 'alert-success'; 
                $statusMsg = 'Member data has been imported successfully.'; 
                break; 
            case 'err': 
                $statusType = 'alert-danger'; 
                $statusMsg = 'Something went wrong, please try again.'; 
                break; 
            case 'invalid_file': 
                $statusType = 'alert-danger'; 
                $statusMsg = 'Please upload a valid Excel file.'; 
                break; 
            default: 
                $statusType = ''; 
                $statusMsg = ''; 
        } 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
<!-- header start -->
<?php include ('helper/header.php'); ?>

<!-- header End -->
            <div id="layoutSidenav_content">
            <!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12 p-3">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>
<div class="container">
<div class="row p-3">
    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-end">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import Excel</a>
        </div>
    </div>
    <!-- Excel file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form class="row g-3" action="helper/importData.php" method="post" enctype="multipart/form-data">
            <div class="col-auto">
                <label for="fileInput" class="visually-hidden">File</label>
                <input type="file" class="form-control" name="file" id="fileInput" />
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-primary mb-3" name="importSubmit" value="Import">
            </div>
        </form>
    </div>

    <!-- Data list table --> 
    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Student
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Source</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // Get member rows 
        $result = $con->query("SELECT * FROM studentdetails ORDER BY id DESC"); 
        if($result->num_rows > 0){ $i=0; 
            while($row = $result->fetch_assoc()){ $i++; 
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['contactno']; ?></td>
                <td><?php echo $row['filesource']; ?></td>
        <?php } }else{ ?>
            <tr><td colspan="4">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
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