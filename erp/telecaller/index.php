<?php

$id = $returnAuth['id'] 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
  .Hide {
    visibility: hidden;
  }
</style>
</head>
<body>
<div class="container p-3">
  <div class="row mb-3">
    <div class="col-md-3">
      <select id="statusFilter" class="form-select">
                    <option value="">Select An option</option>
                    <option value="interested" >Interested</option>
                    <option value="negetive">Negative</option>
                    <option value="pending" >Pending</option>
                    <option value="admission" >Admission</option>
                    <option value="visited" >visited</option>
                    <option value="pos_turned_neg"  >Pos Turned Negative</option>
                    <option value="follow_up" >Follow Up</option>
                    <option value="closed" >Closed</option>
        <!-- Add more options as needed -->
      </select> 
    </div>
    <div class="col-md-3">
                <input type="date" id="dateFilter" class="form-control">
            </div>
            <div class="col-md-3">
                <select id="institute" class="form-select">
                <?php
                $queryins = "SELECT institute from studentdetails where allotedTo ='$id' GROUP BY institute";
                $ret = mysqli_query($con , $queryins);
                if (mysqli_num_rows($ret) > 0) {
                  echo '<option>Select A Institute</option>';
                  while ($row = mysqli_fetch_array($ret)) {
                      echo '<option value="' . $row['institute'] . '">' . $row['institute'] . '</option>';
                  }
              } else {
                  echo '<option value="">No Institute Added</option>';
              }
          ?>
          </select>
            </div>
            <div class="col-md-3">
                <select  id="locationn" class="form-select">
                <?php
                $queryins = "SELECT locationn from studentdetails where allotedTo ='$id' GROUP BY locationn";
                $ret = mysqli_query($con , $queryins);
                if (mysqli_num_rows($ret) > 0) {
                  echo '<option>Select A location</option>';
                  while ($row = mysqli_fetch_array($ret)) {
                      echo '<option value="' . $row['locationn'] . '">' . $row['locationn'] . '</option>';
                  }
              } else {
                  echo '<option value="">No location Added</option>';
              }
          ?>
          </select>
            </div>

    <!-- Add similar dropdowns for 'location', 'institute', and 'addedOn' -->
  </div>

  <table class="table table-hover sortable" id="dataTable">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Alloted date</th>
        <th>Call</th>
      </tr>
    </thead>
    <tbody>
      <!-- Table rows will be filled dynamically via AJAX -->
    </tbody>
  </table>
  <h2 id="hidden">Add Filters To View Data</h2>
</div>

<!-- Modal -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
   $(document).ready(function() {
  // Apply filters when status filter changes
            $('#locationn').change(function() {
                applyFilters();
            });

            $('#statusFilter').change(function() {
                applyFilters();
            });
            $(' #dateFilter').change(function() {
                applyFilters();
            });
            $(' #institute').change(function() {
                applyFilters();
            });

  // Function to apply filters
  function applyFilters() {
    var statusFilter = $('#statusFilter').val();
    var dateFilter   = $('#dateFilter').val();
    var locationn    = $('#locationn').val();
    var institute    = $('#institute').val();
    var filterAdd    = $('#hidden').addClass("Hide");

    // Get values of other filters similarly

    $.ajax({
      url: 'telecaller/filter_data2.php',
      method: 'POST',
      data: {
        status: statusFilter,
        allotedId : <?php echo $returnAuth['id'] ?>,
        date: dateFilter,
        locationn: locationn,
        institute: institute
        // Add other filter values here
      },
      success: function(data) {
        $('#dataTable tbody').html(data);
      }
    });
  }

  // Initially load table data without any filters
  applyFilters();


});


</script>
</body>
</html>
