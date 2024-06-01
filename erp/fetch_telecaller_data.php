<?php
session_start();
include "../core/main.php";
include "helper/functions.php"; // Include the file with your functions

// Check if the request is an AJAX request and required fields are set
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['startDate']) && isset($_POST['endDate'])) {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Fetch telecaller data grouped by allotedTo within the provided date range
    $stmt = $conn->prepare("SELECT allotedTo,COUNT(*) as student_count FROM studentdetails WHERE addedOn BETWEEN ? AND ? GROUP BY allotedTo");
    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();
    echo ' <h5 class="text-center ">
    <u>These are the Caller Who Made the calls in the given span</u>
  </h5><div class="row mt-3">';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['allotedTo'];
           // $fileSource = getFileSource($name, $conn); // Fetch the file source using the allotedTo ID
            echo '
            <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                      <div class="card border-warning ">
                        <div class="card-body">
                          <div class="card-title">Caller Name: <span class="text-danger">' . getName($name, $conn) . '</span></div>
                          <p class="card-text">Number of Calls: ' . $row['student_count'] . '</p>
                          <a href="helper/getBroadView.php?id='.$row['allotedTo'].'&start_date='.$startDate.'&end_date='.$endDate.'" class="btn btn-warning">BroadView</a>
                        </div>
                      </div>
                    </div>';
        }
        echo '</div>';
    } else {
        echo "No data found for the selected telecaller and date range.";
    }
} else {
    echo "Invalid request.";
}
?>
