<?php
session_start();
$id = $_GET['id'];
$username = $_SESSION['username'];
include "../../core/main.php";
$res = mysqli_query($conn , "SELECT * from studentdetails where id='$id'");
$ret = mysqli_fetch_assoc($res);

if(isset($_POST['update'])){
$status = $_POST['status']; 
$followUp = $_POST['followUp']; 
$fname = $_POST['fname'];
$comingOn = $_POST['comingOn'];
$query = mysqli_query($conn ,"UPDATE studentdetails SET fname = '".$fname."' , status = '".$status."' , followup = '".$followUp."', comingOn = '".$comingOn."' where id='$id'");
if($query){
  // echo "<script>alert('Data Updated')</script>";
  header('Location: ../telecallerPanel.php?page=callStart');
  exit();
  
}
}

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
    <div class="row">


 <div class="com-lg-6">
 <div class="container mt-5 p-3">
        
        <div class="card shadow-lg ">
          <div class="card-header bg-dark text-white">
            <h3>Hello <?=$_SESSION['username'];?>! here is the calling and history details of your conversation </h3>
          </div>
          <div class="card-body">
            <table class="table table-hover">
            <tr>
                <th> Call  </th>
                <td><form action="calling.php" method="post"><input type="hidden" name="number" value="<?=$ret['contactno'];?>"><input type="hidden" name="ChildId" value="<?=$ret['id']?>"><input type="submit" value="Call This Number" class="btn btn-warning float-start"></form></td>
                </tr>
                <tr><form action="" method="post">
                <th> Name </th>
                <td><input type="text" name="fname" class="form-control" value="<?=$ret['fname']?>"></td>
                </tr>
                <tr>
                <th> Source </th>
                <td><span class="form-control"><?=$ret['filesource'];?></span></td>
                </tr>
                <tr>
                <th> Last called </th>
                <td><span class="form-control"><?php if($ret['modified'] == NULL){echo "Not Called Yet";}else{echo $ret['modified'];} ?></span></td>
                </tr>
                <tr>
                <th> Status </th>
                <td>
                  <select name="status" id="" class="form-control">
                    <option value="">Select An option</option>
                    <option value="interested">Interested</option>
                    <option value="negetive">Negative</option>
                    <option value="pending">Pending</option>
                    <option value="admission">Admission</option>
                    <option value="visited">visited</option>
                    <option value="pos_turned_neg">Pos Turned Negative</option>
                    <option value="follow_up">Follow Up</option>
                    <option value="closed">Closed</option>
                  </select>
                  <!-- <input type="text" name="status" class="form-control" value="<?=$ret['status']?>">  -->
                </td>
                </tr>
                <tr>
                  
                    <th>Coments</th>
                  <td>
                    <input type="text" name="comment" class="form-control">
                  </td>
                </tr>
                <tr>
                <th> Follow Up </th>
               
                <td><input type="date" name="followUp" id="" class="form-control" value="<?=$ret['followup']?>" ></td>
                </tr>
                <tr >
                <th class=" text-success"> Coming On </th>
               
                <td><input type="date" name="comingOn" id="" class="form-control bg-success text-white " value="<?=$ret['comingOn']?>" ></td>
                </tr>
                <tr >
                <th class=" text-success">WhatsApp</th>
               
                <td><a class="btn btn-success text-white " href='https://api.whatsapp.com/send?phone=91<?=$ret['contactno']?>' target="_blank" >Send Message</a></td>
                </tr>
                <tr>
                 <td colspan="2"> <input type="submit" value="Update Status" class="form-control btn btn-primary" name="update"></td>
                </tr>
                </form>
                
            </table>
           
          </div>
        
          <div class="card-footer bg-dark ">
          <div class="row display-inline">
            <div class="col-sm-10">
          <form action="calling.php" method="post"><input type="hidden" name="number" value="<?=$ret['contactno'];?>"><input type="hidden" name="ChildId" value="<?=$ret['id']?>"><input type="submit" value="Call This Number" class="btn btn-warning m-3 float-start"></form></div>
          <div class="col-sm-2">
        <a href="../telecallerPanel.php?page=callStart" class="btn btn-danger m-3 ">Go Back</a>
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

