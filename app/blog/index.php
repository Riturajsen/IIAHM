<?php
session_start();

include "config/connect.php";

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
include("../globalGet.php");
if($rights == 2 || $rights == 3 || $rights == 1){
  ?>

  <style>
    input{
        margin: 10px;

    }
  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
 <div id="alert"><?php echo $_SESSION['msg'] ?></div>

 <a href="blog/viewBlog.php" class="btn btn-success m-2">View Blogs</a>
<form  method="POST" id="" enctype="multipart/form-data" action="blog/ajax.php">
<label>Blog Image</label>
            <input type="file" name="blogimg"  class="form-control" placeholder="" >
            <label>Blog Title</label>
            <input type="text" name="title" id="job_title" class="form-control" placeholder="Enter Your Title" required>
            <input type="hidden" name="posted_by" id="posted_by" class="form-control" value="<?=$_SESSION["username"]?>" required>
           
            
            <label>Blog</label>
									<textarea name="blog" id="blog" ></textarea>
									
            <hr>
            <h1 class="mt-3">SEO</h1>
            
            <label>Meta Title</label>
            <input type="text" name="metaT" id="metaT" class="form-control"  >
            <label>Meta Description</label>
            <input type="text" name="metaD" id="metaD" class="form-control"  >
            <small id="metaDl" class="text-danger"></small>

            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 text-white form-control btn-success "  name="Submit">
            
          </form>

   	
    <script>
												CKEDITOR.replace( 'blog' );
                  document.getElementById('metaD').onkeydown = function (){
                    document.getElementById('metaDl').innerHTML = "Characters left: " + (160 - this.value.length);
                  }
                 
                  document.getElementById('job_title').onkeyup = function(){
                    document.getElementById('metaT').value  = document.getElementById('job_title').value + " | IIAHM Blog" ;
                  }
										
                    </script>

<?php $_SESSION['msg'] =" "; } else{ echo "<h1>you do not have required rights</h1>";} }?>