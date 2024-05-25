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
<div class="modal fade" id="stuModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Content will be loaded dynamically via AJAX -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
   $(document).ready(function() {
  // Apply filters when status filter changes
  $('#statusFilter, #dateFilter').change(function() {
                applyFilters();
            });

  // Function to apply filters
  function applyFilters() {
    var statusFilter = $('#statusFilter').val();
    var dateFilter = $('#dateFilter').val();
    var filterAdd = $('#hidden').addClass("Hide");

    // Get values of other filters similarly

    $.ajax({
      url: 'telecaller/filter_data2.php',
      method: 'POST',
      data: {
        status: statusFilter,
        allotedId : <?php echo $returnAuth['id'] ?>,
        date: dateFilter
        // Add other filter values here
      },
      success: function(data) {
        $('#dataTable tbody').html(data);
      }
    });
  }

  // Initially load table data without any filters
  // applyFilters();


});


</script>
</body>
</html>
