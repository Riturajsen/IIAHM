<?php 
session_start();
require_once 'vendor/autoload.php'; 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
session_start();
$secure_id = $_SESSION['secure_id'];

include "../../core/main.php";

$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0) {
    $returnAuth = mysqli_fetch_assoc($fetchAuth);

   

 
 
if(isset($_POST['importSubmit'])){ 
     
    // Allowed mime types 
    $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
     
    // Validate whether selected file is a Excel file 
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $excelMimes)){ 
         
        // If the file is uploaded 
        if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
            $reader = new Xlsx(); 
            $spreadsheet = $reader->load($_FILES['file']['tmp_name']); 
            $worksheet = $spreadsheet->getActiveSheet();  
            $worksheet_arr = $worksheet->toArray(); 
 
            // Remove header row 
            unset($worksheet_arr[0]); 
 
            foreach($worksheet_arr as $row){ 
                $fullname = $row[0]; 
                $phone = $row[1]; 
                $source = $row[2]; 
 
                // Check whether member already exists in the database with the same email 
                $prevQuery = "SELECT id FROM studentdetails WHERE contactno = '".$phone."'"; 
                $prevResult = $con->query($prevQuery); 
                 
                if($prevResult->num_rows > 0){ 
                    // Update member data in the database 
                    $con->query("UPDATE studentdetails SET fname = '".$fullname."',contactno='".$phone."', filesource = '".$source."', modified = NOW() WHERE contactno = '".$phone."'"); 
                }else{ 
                    // Insert member data in the database 
                    // $import = mysqli_query($con , "")
                    $con->query("INSERT INTO studentdetails (fname, contactno, filesource) VALUES ( '$fullname','$phone','$source')"); 
                } 
            } 
             
            $_SESSION['qstring'] = 'succ'; 
        }else{ 
            $_SESSION['qstring'] = 'err'; 
        } 
    }else{ 
        $_SESSION['qstring'] = 'invalid_file'; 
    } 


 
// Redirect to the listing page 
header("Location: ../uploadStudent.php"); 
    }
}
else{
echo"Nothing to show";
} 

?>