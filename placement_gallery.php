<?php
 include "app/config/connect.php";
 $res = mysqli_query($connect, "SELECT * from placementImg ORDER BY id DESC");
 $num = mysqli_num_rows($res);
 if ($num != 0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IIAHM Aviation Academy Gallery</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    .gallery-item {
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .gallery-item img {
        max-width: 400px;
        width: 100%;
        height: auto;
        display: block;
    }
    .m-5{
        margin-top: 50px ;
    }
    .shadow{
        box-shadow : 5px 10px 10px grey;  
        border: 1px solid black;;
         }
         .zoom {
  /* padding: ; */
  background-color: white;
  transition: transform .2s; /* Animation */
  width: 100%;
  height: 100%;
  overflow: hidden;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
</head>
<body>
<div class="container">
    <h1>IIAHM Aviation Academy Placement Gallery</h1>
    <hr>
    <div class="gallery">
        <?php
              
              while ($ret = mysqli_fetch_assoc($res)) 
                  { ?>
        
        <div class="gallery-item m-5 shadow zoom">
            <img src="<?php echo 'app/Placement/upload/'.$ret['img']?>" alt="<?=$ret['fname']?>">
        </div>
        <?php
                                } ?>
    </div>
</div>
</body>
</html>



<?php  
                            }
                            else
                            {
                                echo "<h1>No records found</h1>";
                                // echo $num;
                            }


?>