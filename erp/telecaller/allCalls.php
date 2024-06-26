<?php 

$globalTeledata = mysqli_query($conn , "SELECT * from studentdetails where allotedTo=$allotedId");

?>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="container p-3">
 <input type="text" id="live_search" placeholder="Search A Number" class="form-control bg-light">
   <div id="searchresult"></div>
<table class="table table-hover sortable" id="">

<thead>
    <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Category</th>
    <th>Quick View</th>
    <th>Call</th></tr>
</thead>
<tbody>

    <?php $i= 1;  while ($row=mysqli_fetch_array($globalTeledata)){ ?>
 <tr <?php if ($row['called'] == 1 ){ 
  if($row['status'] == 'interested'){
    echo "class='bg-success text-white'";
  }
  elseif($row['status'] == 'negetive'){
    echo "class='bg-danger text-white'";
  }
  elseif($row['status'] == 'pending'){
    echo "class='bg-warning text-white'";
  }
  elseif($row['status'] == 'admission'){
    echo "class='bg-warning text-white'";
  }
  elseif($row['status'] == 'visited'){
    echo "class='bg-primary text-white'";
  }
  elseif($row['status'] == 'pos_turned_neg'){
    echo "class='bg-danger text-white'";
  }
  elseif($row['status'] == 'follow_up'){
    echo "class='bg-secondary text-white'";
  }
  elseif($row['status'] == 'closed'){
    echo "class='bg-danger text-white'";
  }
  // echo "class='' id='white'";


} ?>>
        <th><?=$i?></th>
        <td><?php 
        if( strlen($row['fname']) ==0 ){ echo "No Name"; }else{ echo $row['fname']; }
        ?></td>
        <td><?=$row['category']?></td>
 
        <td><button data-id="<?=$row['id']?>" id="" class='btn btn-warning btn-popup'><i class="fa-solid fa-eye"></i></button></td>
        <td class=""><a href="telecaller/callAction.php?id=<?=$row['id'];?>&name=<?=$_SESSION['username'];?>&teleId=<?=$returnAuth['id']?>"><i class="fa-solid fa-phone text-dark"></i></a></td>

 </tr>

 <?php $i++ ;} ?>
</tbody>
</table>
</div>



    <!-- new Modal -->
    <div class="modal fade" id="stuModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Details of <?=$name?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

    <!-- new modal End -->
<script type="text/javascript">
    $(document).ready(function () {
 
      $('.btn-popup').on('click', function() {
        var stdId = $(this).data("id");
        $.ajax({
          url: 'telecaller/get_data.php',
          type: 'post',
          data: { stdId: stdId },
          success: function (response) {
            $('.modal-body').html(response);
            $('#stuModal').modal('show');
          }
        });
      });
 
    });

        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val();
                // alert(input);
                if(input != ""){
                    $.ajax({
                        url:"telecaller/livesearch.php",
                        method: "POST",
                        data:{input:input},
                        success:function(data){
                            $("#searchresult").html(data);
                            $("#searchresult").css("display","block");


                        }
                    });
                }else{
                    $("#searchresult").css("display","none");
                }
            });
        });
    </script>