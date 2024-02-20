<?php

session_start();

include "Emp_Upload/dbconfig.php";
$isworking = 1;

// location



$site_emp_number = " SELECT sitename, count(sitename) 
from empdetails
where `isworking`='$isworking'
group by sitename
order by sitename";
$get_site_emp_num = mysqli_query($conn , $site_emp_number);


$query_get_work = "SELECT * from `empdetails` where `isworking`='$isworking'";
$site_Emp_get = mysqli_query($conn,$query_get_work);
$get_working = mysqli_num_rows($site_Emp_get);

// Working Employee
$query_get_work1 = "SELECT * from `empdetails`";
$site_Emp_get1 = mysqli_query($conn,$query_get_work1);
$get_working1 = mysqli_num_rows($site_Emp_get1);


$site_data = "SELECT sitename FROM empdetails where `isworking`='$isworking' GROUP BY sitename ";
$Emp_response_work = mysqli_query($conn,$site_data);
// $get_site_data = mysqli_fetch_array($Emp_response_work);

$Num_site_worked=mysqli_num_rows($Emp_response_work);

 

?>
<!DOCTYPE html>
<html>
<body>
<!-- <spam class="text-danger" id="quote"> -->
  <h3>Thoughts : <span id="quote"></span></h3><hr>

  <h3 class="mt-3">Basic Details</h3>
        <div class="row mt-3">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$Num_site_worked?></h5>
        <p class="card-text">Number Of Sites Worked</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$get_working?></h5>
        <p class="card-text">Number Of Employees Currently Working</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$get_working1?></h5>
        <p class="card-text">Total Number of Employees</p>
        
      </div>
    </div>
  </div>

        </div>
        <hr>
        <h3 class="mt-3">Current Site</h3>
        <div class="row">
          <?php
          
         while ($row_site_name=mysqli_fetch_array($get_site_emp_num)){ 
          ?>
            <div class="col-sm-4">
            <div class="card">
           <div class="card-body">
        <h5 class="card-title"><?=$row_site_name['sitename']?></h5>
        
      </div>
    </div>
  </div>
          <?php
        } 
          ?>
        </div>

<script src="assets/plugins/jquery/dist/jquery.min.js"></script>

<script>
      $(document).ready(function() {
    setInterval(quotes, 9000);
});

function quotes() {
    $.ajax({
        url: 'pages/quots.php',
        success: function(data) {
            $('#quote').html(data);
        },
    });
}
    </script>
</body>

</html>
