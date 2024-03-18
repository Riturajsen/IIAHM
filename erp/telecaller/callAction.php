<?php
session_start();
$id = $_GET['id'];
$username = $_SESSION['username'];
include "../../core/main.php";
$res = mysqli_query($conn , "SELECT * from studentdetails where id='$id'");
$ret = mysqli_fetch_assoc($res);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CallAction | <?=$_SESSION['username'];?> | <?=$ret['fname']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-5 p-3">
        
<div class="card shadow-lg ">
  <div class="card-header bg-dark text-white">
    <h3>Hello <?=$_SESSION['username'];?>! here is the calling and history details of your conversation </h3>
  </div>
  <div class="card-body">
    <table class="table table-hover">
        <tr>
        <th> Name </th>
        <td><?=$ret['fname'];?></td>
        </tr>
        <tr>
        <th> Source </th>
        <td><?=$ret['filesource'];?></td>
        </tr>
        <tr>
        <th> Status </th>
        <td><?=$ret['status'];?></td>
        </tr>
        <tr>
        <th> Follow Up </th>
        <td><?=$ret['followup'];?></td>
        </tr>
    </table>
   
  </div>
  <div class="card-footer bg-dark display-inline"> <a href="tel:<?=$ret['contactno'];?>" class="btn btn-warning">Call This Number</a>
<a href="../telecallerPanel.php?page=callStart" class="btn btn-danger m-3">Go Back</a>
</div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

