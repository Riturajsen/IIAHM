<?php
session_start();
$secure_id = $_SESSION['secure_id'];

include "../core/main.php";
$today_date = date('Y-m-d');

$today_entry = mysqli_query($con , "SELECT * FROM studentdetails where addedOn='$today_date'");
$aaj_ki_entry = mysqli_num_rows($today_entry);
$total_unsign_data = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo IS NULL OR allotedTo = ' '");
$fetch_num_unAsign = mysqli_num_rows($total_unsign_data);
$fetchAuth = mysqli_query($conn, "SELECT * FROM users where `secure_id`='$secure_id'");

if (mysqli_num_rows($fetchAuth) > 0){
    $returnAuth = mysqli_fetch_assoc($fetchAuth);
    $userId = $returnAuth['id'];
    $telecallUpdater = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo='$userId'");
    $numTeleData = mysqli_num_rows($telecallUpdater);
   

?>
<!DOCTYPE html>
<html lang="en">
<!-- header start -->
<?php include ('helper/header.php'); ?>

<!-- header End -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <?php if($returnAuth['rights'] == 1 || $returnAuth['rights'] == 2 || $returnAuth['rights'] == 3) {?>
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Today's Data</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="#"><?=$aaj_ki_entry?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body text-danger">Total UnAssign Data</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-danger stretched-link" href="#"><?=$fetch_num_unAsign?></a>
                                        <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <?php } elseif($returnAuth['rights'] == 4){
                          ?>
                          <h1 class="mt-4">TeleCaller Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">TeleCaller Dashboard</li>
                        </ol>
                            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Today's Assign Contacts</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="#"><?=$numTeleData?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    <?php
                        }?>
                    </div>
                </main>
             <!-- footer start-->
             <?php include ('helper/footer.php'); ?>
            <?php $aj_tarikh = date('d'); ?>
             <!-- Students Chart -->
             <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [ "<?=date('M '). $aj_tarikh - 5?>", "<?=date('M '). $aj_tarikh - 4?>", "<?=date('M '). $aj_tarikh - 3?>", "<?=date('M '). $aj_tarikh - 2?>", "<?=date('M '). $aj_tarikh - 1?>", "<?=date('M ').$aj_tarikh?>"],
    datasets: [{
      label: "DATA",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [200, 300 , 321 ,251 ,400 ,512  ],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 800,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
             <!-- footer End -->
            </body>
</html>



<?php 
}else {
    header('location: ../');
}
?>                