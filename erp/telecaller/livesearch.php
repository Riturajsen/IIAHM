<?php
include "../../core/main.php";
if(isset($_POST['input'])){

    $input = $_POST['input'];
    $query = "SELECT * from studentdetails where contactno LIKE '%{$input}%' LIMIT 3";
    $result = mysqli_query($con , $query);

    if(mysqli_num_rows($result) > 0){ ?>

                <table class="table table-success table-hover table-borderd table-striped mt-4">
                  <thead>
                    
<thead>
    <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Status</th>
    <th>Number</th>
    <th>College</th></tr>
</thead>
                    <tbody>
                        <?php $cnt=1;
                            while ($row = mysqli_fetch_assoc($result)){
                             ?>
                              <tr>
                                    <td><?php echo $cnt; ?></td>
                                    <td><?php  
                                    if($row['fname'] != ""){
                                    echo $row['fname'];
                                    }
                                    else{
                                        echo "No Name";
                                    }
                                    
                                    ?></td>
                                    <td><?php  echo $row['status'];?></td>
                                    <td><?php  echo "XXXXXX".$row['contactno'][7].$row['contactno'][8].$row['contactno'][9];?></td>
                                    <td><?php  echo $row['institute'];?></td>
                            </tr>
                             <?php 
                             $cnt=$cnt+1;
                            }
                        ?>
                    </tbody>
                </table>


        <?php
    }else{
        echo '<h6 class="text-danger text-center mt-3">No data Found</h6>';
    }
}
?>