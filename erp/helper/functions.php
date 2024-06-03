<?php
// Function to get the name and email of a user by ID
function getName($id, $conn) {
    $query = "SELECT fname, email FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return $result->fetch_assoc(); // Return associative array with 'fname' and 'email'
    }
    return ["fname" => "Unknown Caller", "email" => ""]; // Returning an associative array even if not found
}

// Function to get the file source for a student by ID
function getFileSource($id, $conn) {
    $query = "SELECT filesource FROM studentdetails WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $res['filesource'];
    }
    return "No source Found";
}

// Function to get the first name of a telecaller by ID
function getTelecallerDetails($id, $conn) {
    $query = "SELECT fname FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $res['fname'];
    }
    return "No source Found";
}

// Function to get call report details for a given telecaller ID
function callReport($teleId, $conn) {
    $query = "SELECT * FROM studentdetails WHERE allotedId = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $teleId);
    $stmt->execute();
    $result = $stmt->get_result();
    $callDetails = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $callDetails[] = $row; // Collect all rows into an array
        }
        return $callDetails;
    }
    return "No data Found";
}

// Function to get count based on status and telecaller ID
function getCount($id, $conn, $parameter ,$start_date, $end_date) {
    $query = "SELECT COUNT(*) as count FROM studentdetails WHERE `status` = ? AND allotedTo = ? AND addedOn BETWEEN ? AND ? ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("siss", $parameter, $id,$start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $res['count']; // Return the count of rows matching the criteria
    }
    return "No data Found";
}
?>
