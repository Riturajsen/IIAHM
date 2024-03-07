<?php
session_start();

include "config/connect.php";

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
include("../globalGet.php");
if($rights == 2 || $rights == 3){
    $jobid = $_GET['id'];
    $query = "SELECT * From jobs where jobid='$jobid'";
    $ret = mysqli_query($connect,$query);
    if(mysqli_num_rows($ret) > 0 ){
        $row = mysqli_fetch_assoc($ret);
  ?>

  <style>
    input{
        margin: 10px;

    }
  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
 <div id="alert"><?php echo $_SESSION['msg'] ?></div>

 <a href="dashboard.php?page-name=job-post" class="btn btn-primary">Add New Job</a>
 <a href="job/viewjobs.php" class="btn btn-danger">Exit</a>
<form  method="POST" id="" action="job/ajaxE.php">
<label>Job Title</label>
            <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Enter Your Title" value="<?=$row['job_title']?>" required>
            <input type="hidden" name="posted_by" id="posted_by" class="form-control" value="<?=$_SESSION["username"]?>" required>
           
            
            <label>Job Description</label>
									<textarea name="Job_discp" id="Job_discp" ><?=$row['Job_discp']?></textarea>
									
            
           <label>Job Location : </label>
            <input type="text" name="city"  id="city" class="form-control" placeholder="Enter Your Location "required value="<?=$row['city']?>" >
            <input type="hidden" name="posted_by"  id="posted_by" class="form-control" value="IIAHM">
          
        
            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 text-white form-control btn-success"  name="Submit">
        </form>

   	
    <script>
												CKEDITOR.replace( 'Job_discp' );
										</script>

<?php $_SESSION['msg'] =" "; } else { echo "<h3>There might be some Issue with the Server. Please revisit this page</h3>";} } else{ echo "<h1>you do not have required rights</h1>";} }?>