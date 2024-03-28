<?php 

$globalTeledata = mysqli_query($conn , "SELECT * from studentdetails where allotedTo=$allotedId");

?>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="container p-3">
    
<table class="table table-hover">

<thead>
    <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Category</th>
    <th>Status</th>
    <th>Call</th></tr>
</thead>
<tbody>

    <?php $i= 1;  while ($row=mysqli_fetch_array($globalTeledata)){ ?>
 <tr <?php if ($row['called'] == 1 ){ echo "class='bg-success text-white' id='white'";} ?>>
        <th><?=$i?></th>
        <td><?=$row['fname']?></td>
        <td><?=$row['category']?></td>
        <td><button data-id="<?=$row['id']?>" id="" class='btn btn-warning btn-popup'><i class="fa-solid fa-eye"></i></button></td>
        <td class=""><a href="telecaller/callAction.php?id=<?=$row['id'];?>&name=<?=$_SESSION['username'];?>"><i class="fa-solid fa-phone text-dark"></i></a></td>

 </tr>

 <?php $i++ ;} ?>
</tbody>
</table>
</div>
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