<?php
include "../../core/main.php";

// Check if course is provided
if(isset($_POST['course'])) {
    $course = trim($_POST['course']);

    if(!empty($course)) {
        // Prepare and execute SQL query
        $query = "SELECT * FROM studentdetails WHERE allotedTo=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $course);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any data is fetched
        if($result->num_rows > 0) {
            echo '<table class="table table-hover">';
            echo '<thead><tr><th>Name</th><th>Contact</th><th>Call Update</th><th>Followup</th><th>EDIT</th></tr></thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['fname']) . '</td>';
                echo '<td><a href="tel:' . htmlspecialchars($row['contactno']) . '">' . htmlspecialchars($row['contactno']) . '</a></td>';
                echo '<td>' . htmlspecialchars($row['status']) . '</td>';
                echo '<td>' . htmlspecialchars($row['followup']) . '</td>';
                echo '<td>Edit</td>';
                echo '</tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<p>NO CALL ASSIGN</p>';
        }
    }
}
?>
