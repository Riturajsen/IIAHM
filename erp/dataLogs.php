<?php
session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";

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
    $_SESSION['qstring'] = " ";
}

$fetchAuth = mysqli_query($conn, "SELECT * FROM users WHERE `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0) {
    $returnAuth = mysqli_fetch_assoc($fetchAuth);
    $fetch_tele = mysqli_query($conn, "SELECT * FROM users WHERE rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Telecaller Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php include('helper/header.php'); ?>

    <div id="layoutSidenav_content">
        <div class="col-md-12">
            <?php if (!empty($statusMsg)) { ?>
                <div class="col-lg-12">
                    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
                </div>
            <?php } ?>

            <div class="row p-3">
                <form id="myForm" action="" method="post">
                    <select name="teleCaller" class="form-control bg-dark text-white" id="teleCaller" required="true">
                        <?php
                            $ret = mysqli_query($conn, "SELECT * FROM users WHERE rights=4");
                            if (mysqli_num_rows($ret) > 0) {
                                echo '<option>Select A Caller</option>';
                                while ($row = mysqli_fetch_array($ret)) {
                                    echo '<option value="' . $row['id'] . '">' . $row['username'] . '</option>';
                                }
                            } else {
                                echo '<option value="">No Caller Added</option>';
                            }
                        ?>
                    </select>
                </form>

                <hr>

                <div class="m-1" id="TeleId"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#teleCaller').change(function() {
                var selectedId = $(this).val();
                $.ajax({
                    url: 'fetch_telecaller_data.php', // PHP script to fetch telecaller data
                    type: 'POST',
                    data: { teleCallerId: selectedId },
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
</body>
</html>

<?php 
} else {
    header('location: ../');
}
?>
