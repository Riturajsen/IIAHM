<?php
// Function to validate date format
function validateDate($date, $format = 'Y-m-d') {
    $dateTime = DateTime::createFromFormat($format, $date);
    return $dateTime && $dateTime->format($format) === $date;
}

// Function to validate date range
function validateDateRange($start_date, $end_date, $format = 'Y-m-d') {
    $startDate = DateTime::createFromFormat($format, $start_date);
    $endDate = DateTime::createFromFormat($format, $end_date);
    return $startDate && $endDate && ($startDate <= $endDate);
}

include "../../core/main.php";

// Get the city from POST data
$teleId = $_POST['teleId'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

if (validateDate($start_date) && validateDate($end_date) && validateDateRange($start_date, $end_date)) {


    // Prepare and bind SQL statement
    $sql = "SELECT * FROM studentdetails WHERE addedOn BETWEEN ? AND ? AND allotedTo=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $start_date, $end_date, $teleId);

    // Execute query
    $stmt->execute();
    $result = $stmt->get_result();
    $i = 1;

    // Generate HTML for table rows
    $html = '<table id="" class="table table-striped table-hover table-warning"><tr><th>ID</th><th>Name</th><th>Number</th><th>follow Up</th><th>Status</th><th>Comment</th></tr>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>' . $i . '</td>';
            $html .= '<td>' . $row["fname"] . '</td>';
            $html .= '<td>' . $row["contactno"] . '</td>';
            $html .= '<td>' . $row["followup"] . '</td>';
            $html .= '<td>' . $row["status"] . '</td>';
            $html .= '<td>' . $row["comment"] . '</td>';
            $html .= '</tr>';
            $i++;
        }
    } else {
        $html .= '<tr><td colspan="6" class="text-center"><h3>No data found in the selected date</h3></td></tr> </table> ';
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();

    echo $html;
} else {
    echo "<h1>Invalid date range!</h1>";
}
?>
