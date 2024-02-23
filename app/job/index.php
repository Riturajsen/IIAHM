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

<form  method="post" id="myform" class="p-3">
            <input type="text" name="fname" id="name" class="form-control" placeholder="Enter Your FullName" required>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Id" >
            <input type="text" name="Pnumber" pattern="[6-9]{1}[0-9]{9}" id="contact" class="form-control" placeholder="Contact Number" required >
            <input type="text" name="education"  id="education" class="form-control" placeholder="Qualification" required>
            <input type="text" name="city"  id="city" class="form-control" placeholder="Enter Your Location "required >
          
        
            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 form-control btn-success"  name="Submit">
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
                        document.getElementById("fname").value = "";
                        document.getElementById("Pnumber").value = "";
                    }
            
                });
            });
        });
    </script>

<?php } else{ echo "<h1>you do not have required rights</h1>";} }?>