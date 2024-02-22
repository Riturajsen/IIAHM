<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
include "../config/connect.php";

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {

   
            if($count > 0)
            {

                $fullname = $row['0'];
                $fathersname = $row['1'];
                $dob = $row['2'];
                $doj = $row['3'];
                $aadhar = $row['4'];
                $mobile = $row['5'];
                $desig = $row['6'];
                $sitename = $row['7'];
                $uan = $row['8'];
                $esic = $row['9'];
                $accno = $row['10'];
                $ifsc = $row['11'];
                $bankname = $row['12'];
                $adrs = $row['13'];
                
                if($row['0'] != ""){

                $EmpQuery = "INSERT INTO `empdetails`(`fullname`, `fathersname`, `dob`, `doj`, `aadhar`, `mobile`, `desig`, `sitename`, `uan`, `esic`, `accno`, `ifsc`, `bankname`, `adrs`) VALUES ('$fullname','$fathersname','$dob','$doj','$aadhar','$mobile','$desig','$sitename','$uan','$esic','$accno','$ifsc','$bankname','$adrs')";
                $result = mysqli_query($conn, $EmpQuery);
                $msg = true;}
                else{
                      $_SESSION['message'] = "Successfully Imported";
            header('Location: ../dashboard.php?page-name=Upload_Emp');
            exit(0);
                    
                }
                
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: ../dashboard.php?page-name=Upload_Emp');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: ../dashboard.php?page-name=Upload_Emp');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: ../dashboard.php?page-name=Upload_Emp');
        exit(0);
    }
}
?>