
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>

<?php
session_start();
$id = $_GET['id'];
$teleId = $_GET['teleId'];
$username = $_SESSION['username'];
include "../../core/main.php";


$res = mysqli_query($conn , "SELECT * from studentdetails where id='$id'");
$ret = mysqli_fetch_assoc($res);


if($ret['allotedTo'] == $teleId){

if(isset($_POST['update'])){
$status = $_POST['status']; 
$followUp = $_POST['followUp'];
$comment = date('d/M/Y =>').$_POST['comment']."\n"; 
$fname = $_POST['fname'];
$comingT = $_POST['comingT'];
$comingOn = $_POST['comingOn'];
$parentscontactno = $_POST['parentscontactno'];

$query = mysqli_query($conn ,"UPDATE studentdetails SET fname = '".$fname."' ,cometime = '".$comingT."' ,parentscontactno = '".$parentscontactno."', status = '".$status."' , followup = '".$followUp."',comment ='".$comment."', comingOn = '".$comingOn."' where id='$id'");
if($query){
  // echo "<script>alert('Data Updated')</script>";
  $_SESSION['qstring'] = "succ";
  header('Location: ../telecallerPanel.php?page=callStart');
  exit();
  
}else{
  
  $_SESSION['qstring'] = "err";
  header('Location: ../telecallerPanel.php?page=callStart');
}

}

?>    <title>CallAction | <?=$_SESSION['username'];?> | <?=$ret['fname']?></title>


    <div class="row">


 <div class="com-lg-6">
 <div class="container mt-5 p-3">
        
        <div class="card shadow-lg ">
          <div class="card-header bg-dark text-white">
            <h3>Hello <?=$_SESSION['username'];?>! <span class="float-end"><a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Show Ref</a></span> </h3> 
          </div>
          <div class="card-body">
            <table class="table table-hover">
            <tr>
                <th> Call  </th>
                <td><form action="calling.php" method="post">
                  <input type="hidden" name="number" value="<?=$ret['contactno'];?>">
                  <input type="hidden" name="TimeCalled" value="<?=$ret['TimeCalled']?>">
                  <input type="hidden" name="ChildId" value="<?=$ret['id']?>">
                  <input type="submit" value="Call This Number" class="btn btn-warning float-start">
                </form>
                
                <form action="calling.php" method="post"><input type="hidden" name="number" value="<?=$ret['parentscontactno'];?>"><input type="hidden" name="ChildId" value="<?=$ret['id']?>"><input type="submit" value="Call On Parents Number" class="btn btn-primary"></form>
                </td>
                </tr>
                <tr><form action="" method="post">
                <th> Name </th>
                <td ><input type="text" name="fname" class="form-control" value="<?=$ret['fname']?>" required="true"></td>
                </tr>
                <tr>
                  <th>Parents Contact</th>
                <td><input type="tel" name="parentscontactno" class="form-control" value="<?=$ret['parentscontactno']?>"  maxlength="10"></td>

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
                  <select name="status" id="status" class="form-control" required="true">
                    <option value="" <?php if($ret['status'] == " "){ echo "selected";}?> >Select An option</option>
                    <option value="interested" <?php if($ret['status'] == " "){ echo "selected";}?> >Interested</option>
                    <option value="negetive" <?php if($ret['status'] == "negetive"){ echo "selected";}?> >Negative</option>
                    <option value="pending" <?php if($ret['status'] == "pending"){ echo "selected";}?> >Pending</option>
                    <option value="admission" <?php if($ret['status'] == "admission"){ echo "selected";}?> >Admission</option>
                    <option value="visited" <?php if($ret['status'] == "visited"){ echo "selected";}?> >visited</option>
                    <option value="pos_turned_neg" <?php if($ret['status'] == "pos_turned_neg"){ echo "selected";}?> >Pos Turned Negative</option>
                    <option value="follow_up" <?php if($ret['status'] == "follow_up"){ echo "selected";}?> >Follow Up</option>
                    <option value="closed" <?php if($ret['status'] == "closed"){ echo "selected";}?> >Closed</option>
                  </select>
                  <!-- <input type="text" name="status" class="form-control" value="<?=$ret['status']?>">  -->
                </td>
                </tr>
                <tr>
                  
                    <th>Coments</th>
                  <td>
                    <?php 
                     $lastUpdate = explode(PHP_EOL,$ret['comment']) ; 
                     foreach($lastUpdate as $commentOld)
                    {
                      echo "<span class='bg-warning'>" .$commentOld." </span>  |  ";
                    }
                    ?>
                    <textarea name="comment" class="form-control"></textarea>
                  </td>
                </tr>
                <tr>
                <th>Next Follow Up </th>
               
                <td><input type="date" name="followUp" id="followUp" class="form-control" value="<?=$ret['followup']?>" ></td>
                </tr>
                <tr >
                <th class=" text-success"> Coming On </th>
                <td><input type="date" name="comingOn" id="comingOn" class="form-control border-success text-success " value="<?=$ret['comingOn']?>" >
                    <span id="cometime"></span>
              </td>
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
            <div class="col-md-4">
          <form action="calling.php" method="post"><input type="hidden" name="number" value="<?=$ret['contactno'];?>"><input type="hidden" name="ChildId" value="<?=$ret['id']?>"><input type="submit" value="Call This Number" class="btn btn-warning m-3 float-start "></form></div>
          <div class="col-md-4"><a href="addNewLead.php?id=<?=$ret['allotedTo']?>" class="btn btn-success m-3 form-control text-center">Add New Lead</a></div>
          <div class="col-md-4">
        <a href="javascript:void(0)" id="backButton" class="btn btn-danger m-3 float-end">Go Back</a>
        </div>
        </div>
        </div>
        </div>
            </div>
 </div>
    </div>


    <!-- Ref Modal -->
                    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Status Reference </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <strong>INTERESTED</strong> : Willing to visit (mention date) <br><br>

      <strong>NEGATIVE</strong> : Wrong number, Not eligible, not interested (with reason)<br><br>

      <strong>PENDING</strong> : NOT RCV, SWICHED OFF, NOT CONNECETED, UNREACHABLE, CALL BACK <br><br>

      <strong>POS TURNED NEGATIVE</strong> : Those who are interested but turned negative afterward.<br><br>

      <strong>FOLLOW UP</strong> : NOT SURE BUT GIVEN DATE/ NOT CONFIRM (50-50)<br><br>

      <strong>CLOSE</strong> : ONLY THOSE ARE NOT RCVNG CALL CONTINUESLY (These leads will be hand over to another telecaller) <br><br>

      <strong>ADMISSION</strong> : <br><br>

      <strong>VISITED</strong> :<br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- ref Modal end -->
    <script>
      const status = document.getElementById('status');
      status.addEventListener('change', changeStatus);
           function changeStatus() {
                  let statusT = status.value;
                 if(statusT == 'interested'){
                  document.getElementById("comingOn").required = true;
                  document.getElementById("cometime").innerHTML = "<input type='time' name='comingT' class='form-control mt-1' required='' >";
                  
                 }else{
                  document.getElementById("comingOn").required = false;
                  document.getElementById("cometime").innerHTML = "";
                 }
            }
      
</script>

      <script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#followUp').attr('min', maxDate);
});

document.addEventListener('DOMContentLoaded', function() {
  var backButton = document.getElementById('backButton');

  backButton.addEventListener('click', function() {
    window.history.back();
  });
});

</script>

<script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth()+ 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#comingOn').attr('min', maxDate);
});

<?php }else{
echo '
<h2>This Data is Not Assigned To You</h2>
<a href="../telecallerPanel.php?page=callStart" class="btn btn-danger m-3 ">Go Back</a>';
} ?>
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  </body>
</html>


