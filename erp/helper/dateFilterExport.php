<?php
session_start();

// Validate date format
function validateDate($date, $format = 'Y-m-d') {
    $dateTime = DateTime::createFromFormat($format, $date);
    return $dateTime && $dateTime->format($format) === $date;
}

// Validate date range
function validateDateRange($start, $end, $format = 'Y-m-d') {
    $startDate = DateTime::createFromFormat($format, $start);
    $endDate = DateTime::createFromFormat($format, $end);
    return $startDate && $endDate && ($startDate <= $endDate);
}

// Establish database connection
include "../../core/main.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and sanitize input parameters
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$teleId = $_POST['teleId'];

if (!validateDate($start_date) || !validateDate($end_date) || !filter_var($teleId, FILTER_VALIDATE_INT)) {
    // Handle invalid input parameters
    $_SESSION['qstring'] = 'err'; 
    header("Location: ../telecallerRep.php"); 
    exit;
}

// Fetch telecaller name
$fetch_tele = mysqli_query($conn, "SELECT * FROM users where id='$teleId'");
$tele_name = mysqli_fetch_assoc($fetch_tele);

// Fetch data from the database
$sql = "SELECT * FROM studentdetails WHERE addedOn BETWEEN '$start_date' AND '$end_date' And allotedTo='$teleId'";
$result = $conn->query($sql);

// Check if there is data to export
if ($result->num_rows > 0) {
    // Create a new Spreadsheet object
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Apply styles to headers
    // ...

    // Set column headers
    // ...

    // Populate the spreadsheet with data
    // ...

    // Close database connection
    $conn->close();

    // Set header for the downloaded Excel file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$tele_name['fname'].'_Report_For_'.$start_date .'_TO_'.$end_date.'.xlsx"');
    header('Cache-Control: max-age=0');

    // Save Excel file to php://output (output to browser)
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
} else {
    // Handle case where there is no data to export
    $_SESSION['qstring'] = 'err'; 
    header("Location: ../telecallerRep.php"); 
    exit;
}
?>
