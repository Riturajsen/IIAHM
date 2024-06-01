<?php
error_reporting(true);
$id = $_GET['id'];
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];

// Include the necessary files and database connection
include "../../core/main.php";
include "functions.php"; // Include the file with your functions

// Define the date filter
$date_filter = "";
if (!empty($start_date) && !empty($end_date)) {
    $date_filter = " AND addedOn BETWEEN ? AND ?";
}
else{
    echo "<script>alert('The To and from date is not set, which may effect the output. try to go back and visit this page again , try not to refresh');</script>";
}

// Fetch data for File Source Distribution
$fileSourceData = [];
$query = "SELECT filesource, COUNT(*) as student_count FROM studentdetails WHERE allotedTo = ? $date_filter GROUP BY filesource";
$stmt = $conn->prepare($query);
if ($date_filter) {
    $stmt->bind_param("iss", $id, $start_date, $end_date);
} else {
    $stmt->bind_param("i", $id);
}
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $fileSourceData[] = [
        'name' => $row['filesource'],
        'count' => $row['student_count']
    ];
}
//$stmt->close();

// Fetch data for Total Calls Made
$totalCallsData = [];
$query = "SELECT `status`, COUNT(*) as call_count FROM studentdetails WHERE allotedTo = ? $date_filter GROUP BY `status`";
$stmt = $conn->prepare($query);
if ($date_filter) {
    $stmt->bind_param("iss", $id, $start_date, $end_date);
} else {
    $stmt->bind_param("i", $id);
}
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $totalCallsData[] = [
        'name' => $row['status'],
        'count' => $row['call_count']
    ];
}
//$stmt->close();

// Fetch data for Total Interested
$totalInterestedData = [];
$query = "SELECT category, COUNT(*) as interest_count FROM studentdetails WHERE allotedTo = ? $date_filter GROUP BY category";
$stmt = $conn->prepare($query);
if ($date_filter) {
    $stmt->bind_param("iss", $id, $start_date, $end_date);
} else {
    $stmt->bind_param("i", $id);
}
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $totalInterestedData[] = [
        'name' => $row['category'],
        'count' => $row['interest_count']
    ];
}
//$stmt->close();

// Fetch data for Location
$locationData = [];
$query = "SELECT locationn, COUNT(*) as location_count FROM studentdetails WHERE allotedTo = ? $date_filter GROUP BY locationn";
$stmt = $conn->prepare($query);
if ($date_filter) {
    $stmt->bind_param("iss", $id, $start_date, $end_date);
} else {
    $stmt->bind_param("i", $id);
}
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $locationData[] = [
        'name' => $row['locationn'],
        'count' => $row['location_count']
    ];
}
//$stmt->close();
//$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BroadView</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-warning text-danger">
                <h4>Here are the details about <?=getName($id, $conn)?>
                <span class="float-end"><a href="javascript:void(0)" id="backButton" class="btn btn-danger ">X</a></span> </h4>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-3 border border-warning p-3 ">
                        <h4>File Source Distribution</h4>
                        <canvas id="pieChartSource" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-3 border border-warning p-3">
                        <h4>Total Calls Made</h4>
                        <canvas id="pieChartCalls" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-3 border border-warning p-3">
                        <h4>Data Category</h4>
                        <canvas id="pieChartInterested" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-3 border border-warning p-3">
                        <h4>Location Distribution</h4>
                        <canvas id="pieChartLocation" width="400" height="400"></canvas>
                    </div>
                </div>
                <hr class="border border-warning border-2 opacity-50">
                <div class="row mt-5">
                    <h4 class=""><u>Effectiveness</u></h4>
                    <div class="card">
                            <?php
                         $queryInt   =  "SELECT * from studentdetails where `status`= 'interested' AND allotedTo = $id";
                         $resInt     =  mysqli_query($conn , $queryInt);
                         $rowint     =  mysqli_num_rows($resInt);
                         $returnint  =  mysqli_fetch_assoc($resInt);
                         
                        ?>
                        this is the report for <?php echo "<pre>";  print_r(getName($id, $conn))?> 
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Function to generate a random color
            function getRandomColor() {
                return '#' + Math.floor(Math.random() * 16777215).toString(16);
            }

            // Function to create a pie chart
            function createPieChart(ctx, data, label) {
                var labels = data.map(function(item) {
                    return item.name;
                });

                var counts = data.map(function(item) {
                    return item.count;
                });

                var colors = data.map(function() {
                    return getRandomColor();
                });

                return new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: label,
                            data: counts,
                            backgroundColor: colors,
                            borderColor: '#ffffff',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        var label = context.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        if (context.parsed !== null) {
                                            label += context.parsed;
                                        }
                                        return label;
                                    }
                                }
                            },
                            datalabels: {
                                formatter: (value, ctx) => {
                                    let sum = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                                    let percentage = (value * 100 / sum).toFixed(0) + "%";
                                    return percentage;
                                },
                                color: '#fff',
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            var fileSourceCtx = document.getElementById('pieChartSource').getContext('2d');
            var fileSourceData = <?php echo json_encode($fileSourceData); ?>;
            createPieChart(fileSourceCtx, fileSourceData, 'File Source Distribution');

            var totalCallsCtx = document.getElementById('pieChartCalls').getContext('2d');
            var totalCallsData = <?php echo json_encode($totalCallsData); ?>;
            createPieChart(totalCallsCtx, totalCallsData, 'Total Calls Made');

            var totalInterestedCtx = document.getElementById('pieChartInterested').getContext('2d');
            var totalInterestedData = <?php echo json_encode($totalInterestedData); ?>;
            createPieChart(totalInterestedCtx, totalInterestedData, 'Data Category');

            var locationCtx = document.getElementById('pieChartLocation').getContext('2d');
            var locationData = <?php echo json_encode($locationData); ?>;
            createPieChart(locationCtx, locationData, 'Location Distribution');
        });

        document.addEventListener('DOMContentLoaded', function() {
            var backButton = document.getElementById('backButton');

            backButton.addEventListener('click', function() {
                window.history.back();
            });
        });
    </script>
</body>
</html>

<?php
// Close the connection here after all operations are done
$stmt->close();
$conn->close();
?>
