<?php
function getName($id, $conn) {
    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $res['fname']; // Assuming 'fname' is the field for the first name
    }
    return "Unknown Caller";
  }

  function getFileSource($id, $conn){
    $query = "SELECT * FROM studentdetails WHERE id = ? GROUP BY filesource";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        return $res['filesource']; // Assuming 'fname' is the field for the first name
    }
    return "No source Found";
  }
  function getTelecallerDetails($id, $conn){
    $query = " SELECT * from users where id = ? " ;
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