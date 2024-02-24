
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IIAHM | Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<?php
$jobid = $_POST['jobid'];

echo $jobid;
include "../app/config/connect.php";
$query = "SELECT * from `jobs` where `jobid`='$jobid'";
$res = mysqli_query($conn,$query);

if(mysqli_num_rows($res) >= 1){
    $ret = mysqli_fetch_assoc($res)
    ?>

<div class="container mt-5">
<div class="card">
  <div class="card-header">
  <h3><?=$ret['job_title'];?></h3>
  </div>
  <div class="card-body">
    <h5 class="card-title"> Job Location : <?=$ret['city'];?></h5>
    <p class="card-text"><?=$ret['Job_discp'];?></p>
    <a href="#" class="btn btn-primary">Apply</a>
  </div>
</div>
</div>

<?php }
else {
    echo"<h1>Cannot Find The job</h1>";
}
?>
