<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IIAHM | Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="text-center mt-3"><h1>IIAHM JOBS PORTAL</h1></div>
    <hr>
    <div class="container mt-5">
    <div class="row">
    <?php
include "../app/config/connect.php";
$query = "SELECT * from jobs ORDER BY id DESC";
$res = mysqli_query($conn,$query);
$num = mysqli_num_rows($res);
if ($num != 0){
    while ($ret = mysqli_fetch_assoc($res)) 
    { ?>

    <div class="col-sm-4">
    <div class="card m-3">
      <div class="card-body">
        <h5 class="card-title"><?=$ret['job_title'];?></h5>
        <p class="card-text" style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;"></p>
        <hr>
        <h6>Job Link Share it :- </h6>   
<p class="form-control m-1" ><?="http://localhost/iiahm/jobs/viewjob.php?jobid=".$ret['jobid'];?></p>
<form method="post" action="viewjob.php">
  <input type="hidden" name="jobid" value="<?=$ret['jobid'] ?>" /> 
  <input type="submit" class="form-control btn mt-2 btn-primary" value="View Job">
</form>
      </div>
      <div class="card-footer"><h4><?=$ret['city'];?></h4></div>
    </div>
  </div>
  <?php }} else{ echo " <h1>NO JOBS POSTED YET</h1>";}?>
  </div>
</div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<h6>Job Link Share it :- </h6>   
 <a href='https://api.whatsapp.com/send?text=https://career.iiahmaviationacademy.com/viewjob.php?jobid=<?=$ret['jobid']?>&utr_source=whatsapp_share_btn' class="btn btn-success">Whatsapp</a>
      </div>