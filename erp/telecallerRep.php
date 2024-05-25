<?php
session_start();
include "../core/main.php";

// Check if there's a status message to display
if (!empty($_SESSION['qstring'])) {
    switch ($_SESSION['qstring']) {
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'The data has been successfully exported.';
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

            $('#ExportExcl').click(function () {
                var formData = $('#myForm').serialize();

                $.ajax({
                    url: 'helper/dateFilterExport.php',
                    type: 'POST',
                    data: formData, // Sending form data to the server
                    xhrFields: {
                        responseType: 'blob' // Set the expected response type to 'blob' for binary data
                    },
                    success: function (response) {
                        // Create a Blob object from the response
                        var blob = new Blob([response], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

                        // Create a temporary URL for the Blob
                        var url = window.URL.createObjectURL(blob);

                        // Create an anchor element to trigger the download
                        var a = document.createElement('a');
                        a.href = url; ;
                        a.download = 'exported_data.xlsx'; // Specify the filename for the downloaded file
                        document.body.appendChild(a);

                        // Trigger the click event on the anchor element to start the download
                        a.click();

                        // Clean up by revoking the temporary URL
                        window.URL.revokeObjectURL(url);
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
                <a type="button" class="btn btn-warning form-control" id="ExportExcl">Export Data</a>
            </div>
        </div>
        <hr>
        <div id="dataTable" class="mt-3"></div>
    </div>
    <?php include('helper/footer.php'); ?>
</div>
<script>
</script>
</body>
</html>
