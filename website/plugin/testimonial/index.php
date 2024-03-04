<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="plugin/testimonial/css/style.css">
</head>
<body>
    <div class="testimonial-carousel">

    <?php
include ('db/connect.php');
$ret = mysqli_query($conn , "SELECT * FROM testimonial Limit 6");
if(mysqli_num_rows($ret) > 0) {

  while ($row=mysqli_fetch_array($ret)){
?>
        <div class="testimonial">
          <h5 id="testimonial">"<?=$row['texttest']?>"</h5>
          <h5 class="author">- <i> <?=$row['testauthor']?></i></h5>
        </div>
       <?php
  }
} 

else { 
    echo '    <div class="testimonial">
    <h3 id="testimonial">"Some Best testimonials are loading"</h3>
    <h5 class="author">- Webserver</h5>
  </div>' ;}

       ?>
        <!-- Add more testimonials here -->
      </div>
      
  <script src="plugin/testimonial/js/script.js"></script>
</body>
</html>
