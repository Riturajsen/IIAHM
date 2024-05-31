<?php
error_reporting(false);
session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";

class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "iiahm";
    public $conn;
    
    function __construct() {
        $this->conn = $this->connectDB();
    }
    
    function connectDB() {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }
    
    function runQuery($query) {
        $result = $this->conn->query($query);
        $resultset = [];
        while($row = $result->fetch_assoc()) {
            $resultset[] = $row;
        }
        return $resultset;
    }
}

$db_handle = new DBController();
$filters = [];

$filters['filesource'] = array_column($db_handle->runQuery("SELECT DISTINCT filesource FROM studentdetails ORDER BY filesource ASC"), 'filesource');
$filters['locationn']  = array_column($db_handle->runQuery("SELECT DISTINCT locationn FROM studentdetails ORDER BY locationn ASC"), 'locationn');
$filters['category']   = array_column($db_handle->runQuery("SELECT DISTINCT category FROM studentdetails ORDER BY category ASC"), 'category');
$filters['institute']  = array_column($db_handle->runQuery("SELECT DISTINCT institute FROM studentdetails ORDER BY institute ASC"), 'institute');
$filters['classname']  = array_column($db_handle->runQuery("SELECT DISTINCT classname FROM studentdetails ORDER BY classname ASC"), 'classname');

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

$fetchAuth = mysqli_query($db_handle->conn, "SELECT * FROM users WHERE `secure_id`='$secure_id'");
if (mysqli_num_rows($fetchAuth) > 0) {
    $returnAuth = mysqli_fetch_assoc($fetchAuth);

    $total_unsign_data = mysqli_query($db_handle->conn, "SELECT * FROM studentdetails WHERE allotedTo IS NULL OR allotedTo = ' '");
    $number_of_contact = mysqli_num_rows($total_unsign_data);
    $fetch_tele = mysqli_query($db_handle->conn, "SELECT * FROM users WHERE rights=4");
    $tele_num = mysqli_num_rows($fetch_tele);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<?php include('helper/header.php'); ?>

<div id="layoutSidenav_content">
    <!-- Display status message -->
    <div class="col-md-12">
        <?php if (!empty($statusMsg)) { ?>
        <div class="col-lg-12">
            <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
        </div>
        <?php } ?>

        <div class="row p-3">
            <!-- Import link -->
            <form id="myForm" action="" method="post">
                <select name="teleCaller" class="form-control bg-dark text-white" id="teleCaller" required="true">
                <?php
                    $ret = mysqli_query($db_handle->conn, "SELECT * FROM users WHERE rights=4");
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
            <div class="p-3">Filters : 
                <form method="POST" name="filesource">
                    <div class="row">
                        <div class="search-box col">
                            Select Source<br>
                            <select class="form-select form-control" id="filesource" name="filesource[]" multiple="multiple">
                                <?php
                                    if (!empty($filters['filesource'])) {
                                        foreach ($filters['filesource'] as $value) {
                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <br><br>
                        </div>
                        <div class="search-box col">
                            Select Location<br>
                            <select class="form-select form-control" id="locationn" name="locationn[]" multiple="multiple">
                                <?php
                                    if (!empty($filters['locationn'])) {
                                        foreach ($filters['locationn'] as $value) {
                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <br><br>
                        </div>
                        <div class="search-box col">
                            Select Category<br>
                            <select class="form-select form-control" id="category" name="category[]" multiple="multiple">
                                <?php
                                    if (!empty($filters['category'])) {
                                        foreach ($filters['category'] as $value) {
                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <br><br>
                        </div>
                        <div class="search-box col">
                            Select Institute<br>
                            <select class="form-select form-control" id="institute" name="institute[]" multiple="multiple">
                                <?php
                                    if (!empty($filters['institute'])) {
                                        foreach ($filters['institute'] as $value) {
                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <br><br>
                        </div>
                        <div class="search-box col">
                            Select Class<br>
                            <select class="form-select form-control" id="classname" name="classname[]" multiple="multiple">
                                <?php
                                    if (!empty($filters['classname'])) {
                                        foreach ($filters['classname'] as $value) {
                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <br><br>
                        </div>
                        <button id="Filter" type="submit" class="btn btn-warning">Search</button>
                    </div>
                </form>
            </div>

            <div class="m-1" id="output"></div>

            <form action="helper/fetchDataTable.php" method="post">
                <input type="hidden" name="TeleId" id="TeleId">
                <hr>
                <a href="javascript:void(0)" class="btn btn-warning ml-3" id="btn-sel">Select first 50</a>
                <a href="javascript:void(0)" class="btn btn-warning ml-3" id="btn-sel-20">Select first 20</a>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td colspan="8"><input type="submit" class="form-control bg-dark text-white" value="Assign"></td>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Source</th>
                            <th>Location</th>
                            <th>Category</th>
                            <th>Institute</th>
                            <th>Allot</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (!empty($_POST) && count($_POST)) {
                            $request_filters = array_intersect_key($_POST, array_flip(['filesource', 'institute', 'locationn', 'category', 'classname']));
                            if (count($request_filters)) {
                                $params = [];
                                $query = "SELECT * FROM studentdetails WHERE allotedTo IS NULL OR allotedTo = ' '";
                                $extra_query = [];
                                foreach ($request_filters as $field => $values) {
                                    $extra_query[] = "{$field} IN (?" . str_repeat(', ?', count($values) - 1) . ")";
                                    $params = array_merge($params, $values);
                                }
                                $query .= ' AND ' . implode(' AND ', $extra_query);
                                $stmt = $db_handle->conn->prepare($query);
                                $stmt->bind_param(str_repeat('s', count($params)), ...$params);
                                if ($stmt->execute()) {
                                    $stmt_result = $stmt->get_result();
                                    if ($stmt_result && $stmt_result->num_rows) {
                                        $i = 1;
                                        while ($row = $stmt_result->fetch_assoc()) {
                                            echo '<tr>';
                                            echo '<td><div class="col">' . $i . '</div></td>';
                                            echo '<td><div class="col">' . $row['fname'] . '</div></td>';
                                            echo '<td><div class="col">' . $row['filesource'] . '</div></td>';
                                            echo '<td><div class="col">' . $row['locationn'] . '</div></td>';
                                            echo '<td><div class="col">' . $row['category'] . '</div></td>';
                                            echo '<td><div class="col">' . $row['institute'] . '</div></td>';
                                            echo '<td><input type="checkbox" name="allotedid[]" value="' . $row['id'] . '"></td>';
                                            echo '</tr>';
                                            $i++;
                                        }
                                    } else {
                                        echo '<tr><td colspan="7" class="text-center"><h3>No results! Or All Calls Assigned</h3></td></tr>';
                                    }
                                }
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        var getId = document.getElementById('teleCaller');
        getId.addEventListener("click", (event) => {
            document.getElementById('TeleId').value = getId.value;
        });

        $(document).ready(function() {
            var $cbs = $('input:checkbox[name="allotedid[]"]'),
                $links = $("#btn-sel");
            $links.click(function() {
                var start = $links.index(this) * 50,
                    end = start + 50;
                $cbs.slice(start, end).prop("checked", true);
            });

            var $cbs20 = $('input:checkbox[name="allotedid[]"]'),
                $links20 = $("#btn-sel-20");
            $links20.click(function() {
                var start = $links20.index(this) * 20,
                    end = start + 20;
                $cbs20.slice(start, end).prop("checked", true);
            });
        });

        $("#course").change(function() {
            var course = $(this).val();
            $.post('helper/getLocation.php', {course: course}, function(response) {
                $("#myTable").html(response);
            });
        });

        $(document).ready(function() {
            $("#live_search").keyup(function() {
                var input = $(this).val();
                if (input != "") {
                    $.ajax({
                        url: "helper/getLocation.php",
                        method: "POST",
                        data: {input: input},
                        success: function(data) {
                            $("#searchresult").html(data);
                            $("#searchresult").css("display", "block");
                        }
                    });
                } else {
                    $("#searchresult").css("display", "none");
                }
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
