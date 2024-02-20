<?php
include "dbconfig.php";
if(isset($_POST['input'])){

    $input = $_POST['input'];
    $query = "SELECT * from empdetails where fullname LIKE '%{$input}%' OR aadhar like '%{$input}%' OR sitename like '%{$input}%' LIMIT 3";
    $result = mysqli_query($conn , $query);

    if(mysqli_num_rows($result) > 0){ ?>

                <table class="table table-success table-hover table-borderd table-striped mt-4">
                    <thead>
                      <th>S.No</th>
                        <th>Full Name</th>
                        <th>Aadhar Number</th>
                        <th>Site Name</th>
                        <th>See Details</th>
                    </thead>
                    <tbody>
                        <?php $cnt=1;
                            while ($row = mysqli_fetch_assoc($result)){
                             ?>
                              <tr>
                                    <td><?php echo $cnt; ?></td>
                                    <td><?php  echo $row['fullname'];?></td>
                                    <td><?=$row['aadhar']?></td>
                                    <td><?=$row['sitename']?></td>
                                     <td><a href="viewEmp.php?id=<?=$row['id'];?>" >Show</a></td>
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
