<?php
function getName($id, $conn) {
    $query = "SELECT fname FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $response = array([
            $res['fname'],
            $res['email']
    ]); // Assuming 'fname' is the field for the first name
    }
    return "Unknown Caller";
}


function getFileSource($id, $conn) {
    $query = "SELECT filesource FROM studentdetails WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $res['filesource']; // Assuming 'filesource' is the field for the file source
    }
    return "No source Found";
}
function getTelecallerDetails($id, $conn) {
    $query = "SELECT fname FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $res['fname']; // Assuming 'fname' is the field for the first name
    }
    return "No source Found";
}


?>
