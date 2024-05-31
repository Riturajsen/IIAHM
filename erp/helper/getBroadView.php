<?php
$id = $_GET['id'];

// Include the necessary files and database connection
include "../../core/main.php";
include "functions.php"; // Include the file with your functions

// Sample data from your database query
$data = [];
$stmt = $conn->prepare("SELECT filesource, COUNT(*) as student_count FROM studentdetails WHERE allotedTo = ? GROUP BY filesource");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $data[] = [
        'name' => $row['filesource'], // Assuming filesource contains the name directly or modify as needed
        'count' => $row['student_count']
    ];
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BroadView</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container m-5">
        <div class="row">
            <div class="card">
                <div class="card-header ">
                    Here is the details about 
                </div>
            </div>
            <div class="col-md-3">
            <canvas id="pieChart" width="200px" height="200px"></canvas>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var ctx = document.getElementById('pieChart').getContext('2d');
            var data = <?php echo json_encode($data); ?>;

            var labels = data.map(function(item) {
                return item.name;
            });

            var counts = data.map(function(item) {
                return item.count;
            });

            var colors = data.map(function() {
                return '#' + Math.floor(Math.random() * 16777215).toString(16);
            });

            var pieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'File Source Distribution',
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
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
