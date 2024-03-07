
<div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">expert trainers</h2>
                        <span class="title-border"></span>
                        <p>Here is our few expert trainers</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">

            <?php
// getting  the  current team 
$ret = mysqli_query($conn , "SELECT * FROM trainer where showH='Yes' LIMIT 4");
if(mysqli_num_rows($ret) > 0) {
  while ($row=mysqli_fetch_array($ret)){
?>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="https://app.iiahmaviationacademy.com/assets/images/trainer/<?=$row['trainimg']?>" alt="<?=$row['trainimg']?> image">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="#"></a><?=$row['fname']?></h3>
                            <span class="sub-title"><?=$row['tfield']?></span>
                        </div>
                    </div>
                </div>
             <?php }}  ?>
           
              
            </div>


            <!-- Getting trainers -->


            