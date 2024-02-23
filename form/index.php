<?php
error_reporting(false);
include ('../core/main.php');
$utm_source = $_GET['utm_source'];
$utm_target = $_GET['utm_target'];

?>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
    input{
        padding: 10px !important;
        margin: 10px !important;
    }
    select{
        padding: 10px !important;
        margin: 10px !important;
    }
    .hidden{
        visibility: hidden;
    }
    img{
        height: 80px;
        width: 200px;
    }
</style>
  </head>
  <body>
    <div class="container col-lg-6 mt-5 shadow-lg p-5">
        <div class="text-center">
            <img src="images/logo.jpg" alt="">

        <h3>

        <?php // if($utm_target == "student"){ echo "Application";} elseif($utm_target == "job"){ echo "Job Application";} else{ echo "Form";} ?>


        </h3></div>
        <hr>
        <!-- toast -->
            
              <div id="alert"></div>


        <!-- toast -->
        <form  method="post" id="myform">
            <input type="hidden" name="utm_source" value="<?=$utm_source?>">
            <input type="hidden" name="utm_target" value="<?=$utm_target?>">
            <input type="text" name="fname" id="name" class="form-control" placeholder="Enter Your FullName" required>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Id" >
            <input type="text" name="Pnumber" pattern="[6-9]{1}[0-9]{9}" id="contact" class="form-control" placeholder="Contact Number" required >
            <input type="text" name="education"  id="education" class="form-control" placeholder="Qualification" required>
            <input type="text" name="city"  id="city" class="form-control" placeholder="Enter Your Location "required >
           <?php
           
           if($utm_target == "student"){
           ?>
           
            <select name="course" id="course" class="form-control">

            <option value="Aviation" <?php if($utm_source == "Aviation"){ echo "selected";} ?>>Aviation & Hospatility Management</option>
            <option value="ground" <?php if($utm_source == "ground"){ echo "selected";} ?> >Ground Staff & Hospatility Management</option>
            <option value="personality" <?php if($utm_source == "personality"){ echo "selected";} ?> >Personality Development</option>
            </select>
            <?php }?>
            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 form-control btn-success"  name="Submit">
        </form>
      <div class="text-center">
                   IIAHM © <?=date('Y')?>. All Rights Reserved.
      </div>
    </div>
   
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

  </body>
</html>
<?php // } ?>