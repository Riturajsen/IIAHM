<?php
include "../../core/main.php";
if(isset($_POST['input'])){

    $input = $_POST['input'];
    $query = "SELECT * from studentdetails where contactno LIKE '%{$input}%' or fname LIKE '%{$input}%' or institute LIKE '%{$input}%' LIMIT 6";
    $result = mysqli_query($con , $query);

    if(mysqli_num_rows($result) > 0){ ?>

                <table class="table table-warning table-hover table-borderd table-striped mt-4">
                  <thead>
                    
<thead>
    <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Status</th>
    <th>Number</th>
    <th>College</th>
    <th>Call</th>

</tr>
</thead>
                    <tbody>
                        <?php $cnt=1;
                            while ($row = mysqli_fetch_assoc($result)){
                             ?>
                             <a href="">  <tr>
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
                                    <td><?php
                                    if(strlen($row['contactno']) <= 9){
                                        echo "No Number Added";
                                    }else{

                                      echo "XXXXXX".$row['contactno'][7].$row['contactno'][8].$row['contactno'][9];
                                    }
                                      
                                      ?></td>
                                    <td><?php  echo $row['institute'];?></td>
                                    
                                    <td><a href="telecaller/callAction.php?id=<?=$row['id'];?>&name=<?=$_SESSION['username'];?>"><i class="fa-solid fa-phone text-dark"></i></a></td>
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