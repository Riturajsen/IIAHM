<?php

include "../../core/main.php";

    $course = $_POST['course'];

    if($course == " " || $course == NULL){



    }else{
    $telecallUpdater = mysqli_query($con , "SELECT * FROM studentdetails where allotedTo='$course'");
    $numTeleData = mysqli_num_rows($telecallUpdater);

    // Fetch data from db related to $course

   
?>
<table class="table table-hover">
    <thead>
        <tr>
            <td>
                Name
            </td>
            <th>Contact</th>
            <th>Call Update</th>
            <th>Followup</th>
            <th>EDIT</th>
        </tr>
        </thead>
        <tbody>
       <?php
        if($numTeleData > 0) {
            while ($row=mysqli_fetch_array($telecallUpdater)){
       ?>
        <tr>
            <td><?=$row['fname'];?></td>
            <td><a href="tel:<?=$row['contactno'];?>"><?=$row['contactno'];?></a></td>
            <td><?=$row['status'];?></td>
            <td><?=$row['followup'];?></td>
            <td>Edit</td>
        </tr>



<?php } }else{ echo "<td>NO CALL ASSIGN</td>"; } ?>
    </tbody>
</table>
<?php } ?>