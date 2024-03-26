<?php

include "../../core/main.php";

if(isset($_POST['input'])){

    $input = $_POST['input'];
    $query = "SELECT * from studentdetails where institute LIKE '%{$input}%' and allotedTo IS NULL OR allotedTo = ' '";
    $result = mysqli_query($con , $query);

    if(mysqli_num_rows($result) > 0){ ?>

                <table class="table table-success table-hover table-borderd table-striped mt-4">
                    <thead>
               
                <th>#</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Allot</th>
            
                    </thead>
                    <tbody>
        <?php 
        // Get member rows 
        if($result->num_rows > 0){ $i=0; 
            while($row = $result->fetch_assoc()){ $i++; 
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['contactno']; ?></td>
                <td><input type="checkbox" name="allotedid[]" value="<?=$row['id']?>" ></td>
        <?php } }else{ ?>
            <tr><td colspan="4">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
                </table>


        <?php
    }else{
        echo '<h6 class="text-danger text-center mt-3">No data Found</h6>';
    }
}
?>