<?php
include "../core/main.php";
    if (isset($_POST['submit'])) {
 
        $name = $_POST['name'];
        $Pnumber = $_POST['Pnumber'];
        $utm_data = $_POST['utm_data'];
        $utm_source = $_POST['utm_source'];
 
        if (isset($_FILES['pdf_file']['name']))
        {
          $file_name = $_FILES['pdf_file']['name'].md5(date($Pnumber));
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./pdf/".$file_name);
 
          $insertquery = "INSERT INTO jobapply(username,cvname,Pnumber,utm_data,utm_source) VALUES('$name','$file_name','$Pnumber','$utm_data','$utm_source')";
          $iquery = mysqli_query($con, $insertquery);
        }
        else
        {
           ?>
            <div class=
            "alert alert-danger alert-dismissible 
            fade show text-center">
              <a class="close" data-dismiss="alert"
                 aria-label="close">×</a>
              <strong>Failed!</strong> 
                  File must be uploaded in PDF format!
            </div>
          <?php
        }
    }
?>