<?php
session_start();
include "../../core/main.php";

// Include PhpSpreadsheet library
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$teleId = $_POST['teleId'];

$fetch_tele = mysqli_query($conn, "SELECT * FROM users where id='$teleId'");
$tele_name = mysqli_fetch_assoc($fetch_tele);

// Fetch data from the database
$sql = "SELECT * FROM studentdetails WHERE addedOn BETWEEN '$start_date' AND '$end_date' AND allotedTo='$teleId'";
$result = $conn->query($sql);
$numrow = mysqli_num_rows($result);
if($numrow > 0){
// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();

// Get the active sheet
$sheet = $spreadsheet->getActiveSheet();

// Set column headers
$sheet->setCellValue('A1', 'FULL NAME');
$sheet->setCellValue('B1', 'CONTACT');
$sheet->setCellValue('C1', 'STATUS');
$sheet->setCellValue('D1', 'FOLLOWUP');
$sheet->setCellValue('E1', 'COMMENT');
$sheet->setCellValue('F1', 'ALLOTED TO');
$sheet->setCellValue('G1', 'NUM. TIMES CALLED');

// Populate the spreadsheet with data

$row = 2;
while ($row_data = $result->fetch_assoc()) {
    $sheet->setCellValue('A' . $row, $row_data['fname']);
    $sheet->setCellValue('B' . $row, $row_data['contactno']);
    $sheet->setCellValue('C' . $row, $row_data['status']);
    $sheet->setCellValue('D' . $row, $row_data['followup']);
    $sheet->setCellValue('E' . $row, $row_data['comment']);
    $sheet->setCellValue('F' . $row, $tele_name['fname']);
    $sheet->setCellValue('G' . $row, $row_data['TimeCalled']);

    $row++;
}

// Set header for the downloaded Excel file
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment;filename="' . $tele_name['fname'] . '_Report_For_' . $start_date . '_TO_' . $end_date . '.xlsx"');
// header('Cache-Control: max-age=0');

// Save Excel file to php://output (output to browser)
// $writer = new Xlsx($spreadsheet);
// $writer->save('php://output');
}else{
    return "No Data Found";
}
?>
