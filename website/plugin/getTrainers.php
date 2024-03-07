<div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title"> trainers</h2>
                        <p>Here is some of our best trainers</p>
                    </div>
                </div>
            </div>
            <div class="row mb-30-none">

            <?php
            $ret = mysqli_query($conn , "SELECT * FROM trainer where showH='Yes' LIMIT 4");
            if(mysqli_num_rows($ret) > 0) {
              while ($row=mysqli_fetch_array($ret)){
            ?>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="team-item d-flex flex-wrap">
                        <div class="team-thumb">
                            <img src="https://app.iiahmaviationacademy.com/assets/images/trainer/<?=$row['trainimg']?>" alt="<?=$row['trainimg']?> | image">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><?=$row['fname']?></h3>
                            <span class="sub-title"><?=$row['tfield']?></span>
                            <p><?=$row['bio']?> </p>
                        </div>
                    </div>
                </div>
               <?php }} ?>
          

           

         
              
            </div>