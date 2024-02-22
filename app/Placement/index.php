<?php
// if (!isset($_SESSION["username"])) {
//     header("Location: ../index.php");
//     exit();
  
//   }else{
?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container mt-5">
        <!-- toast -->
            
                <h4 id="alert"></h4>

        <!-- toast -->
        <form enctype="multipart/form-data" method="post" id="myform">
            <input type="text" name="name" id="name" class="form-control" placeholder="Caption For The Image" required>
            <input type="file" accept=".png, .jpg, .jpeg" name="img" id="image" class="form-control mt-3"  required>
            <input type="submit" value="SUBMIT" id="submit" class="btn mt-3 form-control btn-success"  name="Submit">
        </form>
        <hr>
            <h4 class="text-center text-danger">
                All the Images
            </h4>
                <!-- Image Fetch -->
                <?php
                            include "../config/connect.php";
                            $res = mysqli_query($connect, "SELECT * from placementImg ORDER BY id DESC");
                            $num = mysqli_num_rows($res);
                            if ($num != 0)
                            {
                                ?>
                            <head>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                            </head>
                            <body>
                            <div class="row">
                                <?php
                            while ($ret = mysqli_fetch_assoc($res)) 
                                { ?>
                            
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 mt-3">
                          <img src="<?php echo "Placement/upload/".$ret['img']; ?>" class="img-thumbnail" alt="Image" width="300px" height="300px">
                            <div class="text p-3"><?php echo $ret['fname']; ?></div>
                            <a href="Placement/delete.php?id=<?=$ret['id']?>" class="btn btn-danger">Delete</a>
                            </div>

                                <?php
                                } ?>
                                </div>


                            <?php

                            
                            }
                            else
                            {
                                echo "No records found";
                                // echo $num;
                            }


?>
<!--    Image fetch end here -->
        <?php //include_once "show.php" ; ?>
    </div>
   
    <script type="text/javascript">
        $(document).ready(function(e){
            $('#myform').on("submit",function(e){
                e.preventDefault();
                // alert("Image Uploaded")
                    var form_data = new FormData(this);

                $.ajax({
                    url:"Placement/ajax.php",
                    method: "POST",
                    data: form_data,
                    dataType: "JSON" ,
                    processData: false,
                    contentType: false,
                    success:function(data){
                        $("#alert").text(data.output);
                        document.getElementById("image").value = "";
                        document.getElementById("name").value = "";
                    }
            
                });
            });
        });
    </script>

  </body>
</html>
<?php // } ?>