<?php
session_start();

include "config/connect.php";

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
include("../globalGet.php");
if($rights == 2 || $rights == 3){
  ?>

  <style>
    input{
        margin: 10px;

    }
  </style>
 <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
 <div id="alert"></div>
<form  method="post" id="myform" >
<label>Job Title</label>
            <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Enter Your Title" required>
            
            <label>Job Description</label>
									<textarea name="Job_discp"></textarea>
										<script>
												CKEDITOR.replace( 'Job_discp' );
										</script>
            
           <label>Job Location : </label>
            <input type="text" name="city"  id="city" class="form-control" placeholder="Enter Your Location "required >
            <input type="hidden" name="posted_by"  id="posted_by" class="form-control" value="IIAHM">
          
        
            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 text-white form-control btn-success"  name="Submit">
        </form>

        <script type="text/javascript">
        $(document).ready(function(e){
            $('#myform').on("submit",function(e){
                e.preventDefault();
                // alert("Image Uploaded")
                    var form_data = new FormData(this);

                $.ajax({
                    url:"ajax.php",
                    method: "POST",
                    data: form_data,
                    dataType: "JSON" ,
                    processData: false,
                    contentType: false,
                    success:function(data){
                       
                        $("#alert").html(data.output);
                        
                    }
            
                });
            });
        });
    </script>

<?php } else{ echo "<h1>you do not have required rights</h1>";} }?>