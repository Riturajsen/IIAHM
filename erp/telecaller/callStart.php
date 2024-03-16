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

    <?php $i=1;  while ($row=mysqli_fetch_array($globalTeledata)){ ?>
 <tr>
        <th><?=$i?></th>
        <td><?=$row['fname']?></td>
        <td><?=$row['category']?></td>
        <td><a href="javascript:void(0);" data-href="getContent.php?id=<?=$row['id']?>" class="openPopup"><i class="fa-solid fa-eye"></i></a></td>
        <td><a href=""><i class="fa-solid fa-phone"></i></a></td>

 </tr>

 <?php $i++ ;} ?>
</tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      
    </div>
</div>
<script>
$(document).ready(function(){
    $('#openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#myModal').modal({show:true});
        });
    }); 
});
</script>