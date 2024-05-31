<?php
error_reporting(false);
session_start();
include "../core/main.php";

// Check if secure_id exists in the session
if (!isset($_SESSION['secure_id'])) {
    header('location: ../');
    exit();
}

$secure_id = $_SESSION['secure_id'];

// Function to get status message
function getStatusMessage() {
    if (!empty($_SESSION['qstring'])) {
        $statusType = '';
        $statusMsg = '';
        switch ($_SESSION['qstring']) {
            case 'succ':
                $statusType = 'alert-success';
                $statusMsg = 'Student data has been allotted successfully.';
                break;
            case 'err':
                $statusType = 'alert-danger';
                $statusMsg = 'Something went wrong, please try again.';
                break;
            case 'invalid_file':
                $statusType = 'alert-danger';
                $statusMsg = 'Some Undefined Server error Caught';
                break;
        }
        $_SESSION['qstring'] = " ";
        return '<div class="col-lg-12"><div class="alert ' . $statusType . '">' . $statusMsg . '</div></div>';
    }
    return '';
}

// Function to fetch authenticated user
function fetchAuthenticatedUser($conn, $secure_id) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE secure_id = ?");
    $stmt->bind_param("s", $secure_id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

// Function to fetch telecallers
function fetchTelecallers($conn) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE rights = 4");
    $stmt->execute();
    return $stmt->get_result();
}


$returnAuth = fetchAuthenticatedUser($conn, $secure_id);
if ($returnAuth) {
    $telecallers = fetchTelecallers($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php include('helper/header.php'); ?>
</head>
<body>
    <div id="layoutSidenav_content">
        <div class="col-md-12">
            <?php echo getStatusMessage(); ?>
            <div class="row p-3">
                <form id="myForm" action="" method="post">
                    
                    <label for="startDate">Start Date:</label>
                    <input type="date" name="startDate" class="form-control" id="startDate" required><br>
                    <label for="endDate">End Date:</label>
                    <input type="date" name="endDate" class="form-control" id="endDate" required><br>
               
              
                </form>
                <hr>
                <div class="m-1" id="TeleId"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#endDate,#startDate').change(function() {
                // var selectedId = $(this).val();
                var startDate = $('#startDate').val();
                var endDate = $('#endDate').val();
                $.ajax({
                    url: 'fetch_telecaller_data.php',
                    type: 'POST',
                    data: { startDate: startDate, endDate: endDate },
                    success: function(response) {
                        $('#TeleId').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>

    <?php include('helper/footer.php'); ?>
</body>
</html>

<?php 
} else {
    header('location: ../');
    exit();
}
?>
