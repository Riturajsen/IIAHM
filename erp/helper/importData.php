<?php
session_start();
require_once 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// Check if the user is authenticated
if(isset($_SESSION['secure_id'])) {
    $secure_id = $_SESSION['secure_id'];
    
    include "../../core/main.php";
    
    $fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");
    
    if (mysqli_num_rows($fetchAuth) > 0) {
        // User is authenticated
        $returnAuth = mysqli_fetch_assoc($fetchAuth);
        
        // Handle file upload and import
        if(isset($_POST['importSubmit'])){ 
            
            // Allowed mime types 
            $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
            
            // Validate whether selected file is an Excel file 
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
                        $category = $row[3];
                        $institute = $row[4]; 
                        $parentscontactno = $row[5];
                        $classname = $row[6];
                        $locationn = $row[7];
        
                        // Check whether member already exists in the database with the same phone number
                        $prevQuery = "SELECT id FROM studentdetails WHERE contactno = '".$phone."'"; 
                        $prevResult = $conn->query($prevQuery); 
                         
                        if($prevResult->num_rows > 0){ 
                            // Update member data in the database 
                            $conn->query("UPDATE studentdetails SET fname = '".$fullname."', contactno='".$phone."', filesource = '".$source."', category = '".$category."', institute = '".$institute."', parentscontactno = '".$parentscontactno."', classname = '".$classname."', locationn = '".$locationn."', modified = NOW() WHERE contactno = '".$phone."'"); 
                        }else{ 
                            // Insert member data in the database 
                            $conn->query("INSERT INTO studentdetails (fname, contactno, filesource , category, institute, parentscontactno, classname , locationn) VALUES ( '$fullname','$phone','$source','$category','$institute','$parentscontactno','$classname','$locationn')"); 
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
    } else {
        echo "Authentication failed!";
    } 
} else {
    echo "User not authenticated!";
}
?>
<!-- Upload Sample -->
