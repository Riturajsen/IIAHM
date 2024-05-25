<?php
session_start();
include "../core/main.php";

// Check if there's a status message to display
if (!empty($_SESSION['qstring'])) {
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
        default:
            $statusType = '';
            $statusMsg = '';
    }
    // Clear the status message after displaying it
    $_SESSION['qstring'] = "";
}

// Fetch user details based on session secure_id
$stmt = $conn->prepare("SELECT * FROM users WHERE secure_id = ?");
$stmt->bind_param("s", $_SESSION['secure_id']);
$stmt->execute();
$fetchAuth = $stmt->get_result();

// Check if user is authenticated
if ($fetchAuth->num_rows > 0) {
    $returnAuth = $fetchAuth->fetch_assoc();

    // Check user rights
    if ($returnAuth['rights'] == 2 || $returnAuth['rights'] == 3) {
        // Fetch telecallers
        $stmt = $conn->prepare("SELECT * FROM users WHERE rights = ?");
        $rights = 4;
        $stmt->bind_param("i", $rights);
        $stmt->execute();
        $fetch_tele = $stmt->get_result();
        $tele_num = $fetch_tele->num_rows;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php include('helper/header.php'); ?>
    <script>
        $(document).ready(function () {
            $('#fetchDataBtn').click(function () {
                var formData = $('#myForm').serialize();

                $.ajax({
                    url: 'telecaller/fetch_data.php',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        $('#dataTable').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>
</head>
<body>
<div id="layoutSidenav_content">
    <div class="p-3 mt-3">
        <?php if (!empty($statusMsg)) { ?>
            <div class="col-md-12">
                <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
            </div>
        <?php } ?>
        <form id="myForm">
            Start Date: <input type="date" name="start_date" id="Mstart_date" class="form-control" required="true"><br>
            End Date: <input type="date" name="end_date"  id="Mend_date" class="form-control" required="true"><br>
            <select name="teleId" class="form-control " id="teleId">
                <?php if ($tele_num > 0) { ?>
                    <option value="">Select A Caller</option>
                    <?php while ($row = $fetch_tele->fetch_assoc()) { ?>
                        <option value="<?= $row['id'] ?>"><?= $row['username'] ?></option>
                    <?php }
                } else {
                    echo " <option value=''>No Caller Added</option>";
                } ?>
            </select>
        </form>
        <div class="row p-3 m-3 text-center">
            <div class="col-md-6">
                <a type="button" class="btn btn-success form-control" id="fetchDataBtn">Fetch Data</a>
            </div>
            <div class="col-md-6">
                <form action="helper/dateFilterExport.php" method="POST">
                    <input type="hidden" id="start_date" name="start_date">
                    <input type="hidden" id="end_date" name="end_date">
                    <input type="hidden" id="teleIdE" name="teleIdE">
                    <input type="submit" class="btn btn-warning form-control" id="" value="Export To Excel">
                </form>
            </div>
        </div>
        <hr>
        <div id="dataTable" class="mt-3"></div>
    </div>
    <?php include('helper/footer.php'); ?>
</div>
<script>
    var start_date = document.getElementById('start_date').value() = document.getElementById('Mstart_date').value();
    var end_date = document.getElementById('end_date').value() = document.getElementById('Mend_date').value();
</script>
</body>
</html>
