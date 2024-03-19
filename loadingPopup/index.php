	
<?php
include("../core/main.php");
?>
 
<!DOCTYPE html>
<html>
 
<head>
  <title>Dynamically load content in Bootstrap Modal with AJAX, PHP MySQL </title>
  <!-- CSS -->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
</head>
 
<body>
  <div class="container">
    <h5 class="mt-3 mb-3">Dynamically load content in Bootstrap Modal with AJAX, PHP MySQL </h5>
    <table class="table table-bordered table-sm">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Contactno</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * from studentdetails ";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)){
          $id = $row['id'];
          $name = $row['fname'];
          $contact = $row['contactno'];
 
          echo "<tr>";
          echo "<td>".$id."</td>";
          echo "<td>".$name."</td>";
          echo "<td>".$contact."</td>";
          echo "<td><button data-id='".$id."' class='btn btn-warning btn-popup'>Details</button></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
 
    <!-- Modal -->
    <div class="modal fade" id="stuModal" role="dialog">
      <div class="modal-dialog">
 
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Student Details</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body">
 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
 
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
 
      $('.btn-popup').click(function () {
        var stdId = $(this).data('id');
        $.ajax({
          url: 'get_data.php',
          type: 'post',
          data: { stdId: stdId },
          success: function (response) {
            $('.modal-body').html(response);
            $('#stuModal').modal('show');
          }
        });
      });
 
    });
  </script>
 
</body>
 
</html>