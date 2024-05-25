
<?php
session_start();
// Function to validate date format
function validateDate($date, $format = 'Y-m-d') {
    $dateTime = DateTime::createFromFormat($format, $date);
    return $dateTime && $dateTime->format($format) === $date;
}

// Function to validate date range
function validateDateRange($start, $end, $format = 'Y-m-d') {
    $startDate = DateTime::createFromFormat($format, $start);
    $endDate = DateTime::createFromFormat($format, $end);
    return $startDate && $endDate && ($startDate <= $endDate);
}

// Establish database connection
include  "../../core/main.php";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Include the Composer autoloader
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$teleId = $_POST['teleId'];

$fetch_tele = mysqli_query($conn, "SELECT * FROM users where id='$teleId'");
$tele_name = mysqli_fetch_assoc($fetch_tele);


// Fetch data from the database
$sql = "SELECT * FROM studentdetails WHERE addedOn BETWEEN '$start_date' AND '$end_date' And allotedTo='$teleId'";
$result = $conn->query($sql);

// Check if there is data to export
if ($result->num_rows > 0) {
// Create a new Spreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Create a new worksheet
$sheet = $spreadsheet->getActiveSheet();

// Apply styles to headers
$styleHeader = [
    'font' => [
        'bold' => true,
        'style' => Font::CAP_ALL,
        'color' => ['rgb' => 'FFFFFF'], // white text color
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => ['rgb' => '0070C0'], // blue fill color
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000'], // black border color
        ],
    ],
];



// Set column headers
$sheet->setCellValue('A1', 'FULL NAME');
$sheet->setCellValue('B1', 'CONTACT');
$sheet->setCellValue('C1', 'STATUS');
$sheet->setCellValue('D1', 'FOLLOWUP');
$sheet->setCellValue('E1', 'COMMENT');
$sheet->setCellValue('F1', 'ALLOTED TO');
$sheet->setCellValue('G1', 'NUM. TIMES CALLED');


$sheet->getStyle('A1:G1')->applyFromArray($styleHeader);


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


    // $row++;
}

// $row  ;
// Close database connection
$conn->close();

// Set header for the downloaded Excel file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$tele_name['fname'].'_Report_For_'.$start_date .'_TO_'.$end_date.'.xlsx"');
header('Cache-Control: max-age=0');

$_SESSION['qstring'] = 'succ'; 
// Save Excel file to php://output (output to browser)
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
}
else{
    $_SESSION['qstring'] = 'err'; 
    header("Location: ../telecallerRep.php"); 
    exit;
}