<?php
$id = $_GET['id'];
include "../config/connect.php";
?>

<!doctype html>

       
        <?php
  $ret = mysqli_query($conn , "SELECT * FROM empdetails where id=$id");
  if(mysqli_num_rows($ret) > 0) {
   $row =  mysqli_fetch_array($ret);
    
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details of <?=$row['fullname']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container mt-5">
<div class="card shadow">
    <div class="card-header bg-dark text-white text-center"> Here Are the Details of <?=$row['fullname']?></div>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <td>
                   <b>Full Name</b>
                </td>
                <td>
                       <?=$row['fullname'];?> 
                </td>
            </tr>
            <tr>
                <td>
                   <b>Fathers Name</b>
                </td>
                <td>
                     <?=$row['fathersname'];?>   
                </td>
            </tr>
            <tr>
                <td>
                   <b>Date of Birth</b>
                </td>
                <td>
                     <?=$row['dob'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Date of Joining</b>
                </td>
                <td>
                     <?=$row['doj'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Aadhar Number</b>
                </td>
                <td>
                     <?=$row['aadhar'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Mobile Number</b>
                </td>
                <td>
                     <?=$row['mobile'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Designation </b>
                </td>
                <td>
                     <?=$row['desig'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Site Name</b>
                </td>
                <td>
                     <?=$row['sitename'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Uan Number</b>
                </td>
                <td>
                     <?=$row['uan'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Esic Number</b>
                </td>
                <td>
                     <?=$row['esic'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Account Number</b>
                </td>
                <td>
                     <?=$row['accno'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Ifsc Number</b>
                </td>
                <td>
                     <?=$row['ifsc'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Bank Name</b>
                </td>
                <td>
                     <?=$row['bankname'];?>   
                </td>
            </tr> <tr>
                <td>
                   <b>Address</b>
                </td>
                <td>
                     <?=$row['adrs'];?>   
                </td>
            </tr>

            <?php  } ?>
        </table>
        </div>
        <div class="card-footer bg-dark">
            <a href="view.php" class="btn btn-danger">Go Back</a>
        </div>
        </div></body>
        </html>

