<?php
session_start();
include "../../core/main.php";
// Include your database connection file here
// Example: include 'connection.php';

// Retrieve filter values

// Fetching POST data
$status = $_POST['status'] ?? '';
$dateFilter = $_POST['date'] ?? '';
$allotedId = $_POST['allotedId']; // allotedId filter value
// Retrieve other filter values similarly

// Construct SQL query based on filter values
$sql = "SELECT * FROM studentdetails WHERE allotedTo = '$allotedId'";

if (!empty($status)) {
  $sql .= " AND status = '$status'";
}
if (!empty($dateFilter)) {
  // Format the date in a way that matches your database date format
  $formattedDate = date('Y-m-d', strtotime($dateFilter));
  $sql .= " AND DATE(addedOn) = '$formattedDate'";
}

// Add similar clauses for other filters (location, institute)

// Execute SQL query
$result = mysqli_query($conn, $sql);
$output = '';
// Fetch and output table rows
if(mysqli_num_rows($result) > 0 ){

$i = 1;
while ($row = mysqli_fetch_array($result)) {
  // You can customize the row formatting as needed
  $output .= "<tr>";
  $output .= "<th>{$i}</th>";
  $output .= "<td>" . (strlen($row['fname']) > 0 ? $row['fname'] : 'No Name') . "</td>";
  $output .= "<td>{$row['addedOn']}</td>";
  $output .= "<td><a href='telecaller/callAction.php?id={$row['id']}&name={$_SESSION['username']}&teleId={$allotedId}' class='text-dark'><i class='fas fa-phone'></i></a></td>";
  $output .= "</tr>";
  $i++;
}
}
else{
    $output .="<td colspan='5' class='text-center'><h4> No Data In Selected Filter</h4></td>";
}


echo $output;
?>
