<?php
session_start();
$username = $_SESSION['username'];
include "../../core/main.php";
$today_date = date('Y-m-d');
$userId = $_REQUEST['userId'];
$queryFollowUp = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo='$userId' AND comingOn='$today_date'");
$ret = mysqli_fetch_assoc($queryFollowUp);




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Followup | <?=$_SESSION['username'];?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">


 <div class="com-lg-6">
 <div class="container mt-5 p-3">
        
        <div class="card shadow-lg ">
          <div class="card-header bg-dark text-white">
            <h3>Hello TeleCaller these are the follow up calls <?=$today_date?> </h3>
          </div>
          <div class="card-body">
            <table class="table table-hover">
       <tr>
        <th>#</th>
        <th>Name</th>
        <!-- <th>Location</th> -->
        <th>institute</th>
        <th>Last Call</th>
        <th>Action</th>
       </tr>
       <?php
       $queryFollowUp = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo='$userId' AND comingOn='$today_date'");
       $fetch_num_followUp = mysqli_num_rows($queryFollowUp);
        if($fetch_num_followUp > 0  ) {
        $i=1;
       while ($row=mysqli_fetch_array($queryFollowUp)){ 
       ?>
       <tr>
            <td><?=$i?></td>
            <td><?=$row['fname'];?></td>
            <!-- <td><?=$row['locationn'];?></td> -->
            <td><?=$row['institute'];?></td>
            <td><?=$row['modified'];?></td>
            <td><a href="callAction.php?id=<?=$row['id']?>&name=<?=$username?>" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
</svg></a></td>
       </tr>
                <?php $i++; } } else{?>
                <tr>
                    <td colspan="4" class="text-center"><h3>No Data Found</h3></td>
                </tr>
                <?php } ?>
            </table>
           
          </div>
        
          <div class="card-footer bg-dark ">
          <div class="row display-inline">
            <div class="col-sm-10">
         
          <div class="col-sm-2">
        <a href="../home.php" class="btn btn-danger m-3 ">Go Back</a>
        </div>
        </div>
        </div>
        </div>
            </div>
 </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

