<?php
session_start();
$id = $_GET['id'];
$username = $_SESSION['username'];
include "../../core/main.php";
$filesource = "lead_from_student";


// $res = mysqli_query($conn , "SELECT * from studentdetails where id='$id'");
// $ret = mysqli_fetch_assoc($res);


if(isset($_POST['update'])){
$contactno = $_POST['contactno'];
$category = $_POST['category'];
// $comment = date('d/M/Y =>').$_POST['comment']."\n"; 
$fname = $_POST['fname'];
$institute = $_POST['institute'];
$classname = $_POST['classname'];
$parentscontactno = $_POST['parentscontactno'];
$locationn = $_POST['locationn'];
$query = mysqli_query($con , "INSERT INTO studentdetails (fname, contactno, filesource , category, institute, parentscontactno, classname , locationn,allotedTo) VALUES ( '$fname','$contactno','$filesource','$category','$institute','$parentscontactno','$classname','$locationn','$id')"); 

// $query = mysqli_query($conn ,"INSERT INTO studentdetails (fname = '".$fname."' , allotedTo = '".$id."',cometime = '".$comingT."' ,parentscontactno = '".$parentscontactno."', status = '".$status."' , followup = '".$followUp."', comingOn = '".$comingOn."' where id='$id')");
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
    <title>Add New lead | <?=$_SESSION['username'];?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="row">


 <div class="com-lg-6">
 <div class="container mt-5 p-3">
        
        <div class="card shadow-lg ">
          <div class="card-header bg-dark text-white">
            <h3>Hello <?=$_SESSION['username'];?>! Add The New Lead </h3>
          </div>
          <div class="card-body">
            <table class="table table-hover">
           
                <tr><form action="" method="post">
                <th> Name </th>
                <td ><input type="text" name="fname" class="form-control"  required="true"></td>
                </tr>
                <tr>
                  <th>Contact</th>
                <td><input type="tel" name="contactno" class="form-control"  maxlength="10" required></td>

                </tr>
                <tr>
                  <th>Parents Contact</th>
                <td><input type="tel" name="parentscontactno" class="form-control"  maxlength="10"></td>
                </tr>
                <tr>
                <th> Category </th>
                <td ><input type="text" name="category" class="form-control" required ></td>
                </tr>
                <tr>
                <th> College </th>
                <td ><input type="text" name="institute" class="form-control" required ></td>
                </tr>
                <tr>
                <th> Class </th>
                <td ><input type="text" name="classname" class="form-control" required ></td>
                </tr>
                <tr>
                <th> Location </th>
                <td ><input type="text" name="locationn" class="form-control" required ></td>
                </tr>
                <tr>
                <th> Source </th>
                <td><span class="form-control"><?=$filesource;?></span></td>
                </tr>
        

                <tr>
                 <td colspan="2"> <input type="submit" value="SAVE DATA" class="form-control btn btn-primary" name="update"></td>
                </tr>
                </form>
                
            </table>
           
          </div>
        
          <div class="card-footer bg-dark ">
          <div class="row display-inline">
            <div class="col-sm-10">
          </div>
          <div class="col-sm-2">
        <a href="../telecallerPanel.php?page=callStart" class="btn btn-danger m-3 ">Go Back</a>
        </div>
        </div>
        </div>
        </div>
            </div>
 </div>
    </div>
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
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

