<?php 
session_start(); 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include("../globalGet.php");
if($rights == 2 || $rights == 3){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$sitename?> Employee Bulk Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <?php
                if(isset($_SESSION['message']))
                {
                    echo "<h4>".$_SESSION['message']."</h4>";
                    unset($_SESSION['message']);
                }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h4><?=$sitename?> Student Bulk Upload</h4>
                    </div>
                    <div class="card-body">

                        <form action="Emp_Upload/code.php" method="POST" enctype="multipart/form-data">

                            <input type="file" name="import_file" class="form-control" />
                            
                        <a class="mt-5 text-decoration-none" href="Emp_Upload/Sample/Sample_Upload_Alpha_emp.xlsx">Download Sample File</a><br>
                            <button type="submit" name="save_excel_data" class="btn btn-primary  mt-3">Import</button>

                        </form><br>
                        
                        <a href="dashboard.php?page-name=View_Emp" class="btn btn-success">View Data</a>
                        
                        <br>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } else{
    echo "<h1>Not have enough rights</h1>";
    }?>