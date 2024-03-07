<?php
session_start();

include "../config/connect.php";




if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{ ?>
<!doctype html>
<html lang="en">
  <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-light">
 
    <div class=" m-5"><a href="../dashboard.php?page-name=job-post" class="btn btn-danger">Go Back</a></div>
    <hr>
    <div class="container mt-5"> <h4 class="bg-danger text-white"><?=$_SESSION['msg']?></h4>
    <div class="row">
    <?php
$query = "SELECT * from jobs ORDER BY id DESC";
$res = mysqli_query($conn,$query);
$num = mysqli_num_rows($res);
if ($num != 0){
    while ($ret = mysqli_fetch_assoc($res)) 
    { ?>

    <div class="col-sm-4">
    <div class="card m-3">
      <div class="card-body">
        <h5 class="card-title"><?=$ret['job_title'];?> </h5>
        Share this job :-
         
        <textarea readonly="true" class="form-control" ><?="https://career.iiahmaviationacademy.com/viewjob.php?jobid=".$ret['jobid']."&utm_source=".$_SESSION['username']; ?></textarea>
     
                    
        <form method="post" action="deletejob.php">
  <input type="hidden" name="jobid" value="<?=$ret['id'] ?>" /> 
        <input type="submit" class="btn btn-danger mt-3" value="Delete Job">
</form>

<a href="../dashboard.php?page-name=job-edit&id=<?=$ret['jobid']?>" class="btn btn-warning mt-3">Edit Job</a>
      </div>
      <div class="card-footer"><?=$ret['city'];?></div>
    </div>
  </div>
  <?php }} else{ echo " <h1>NO JOBS POSTED YET</h1>";}?>
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php } $_SESSION['msg']="";?>