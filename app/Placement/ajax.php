<?php
error_reporting(true);
include "../config/connect.php";


$file = $_FILES['img']['name'];


$target_dir = "upload/";
// $num = rand(0,9999999);
$target_file = md5("Image".basename($file)).".png";
$name = $_POST['name'];

$output = "";

$query = "INSERT Into placementImg (img , fname) values ('$target_file', '$name')";
$res  = mysqli_query($connect,$query);

if($res){

    move_uploaded_file($_FILES["img"]["tmp_name"], "upload/".$target_file);

    // move_uploaded_file($_FILES['img']['tmp_name'],"/upload".$file);

    $output = "Uploaded";
}else{
    $output = "Failed to upload";
}
$resp = array(
    'output' => $output
);
echo json_encode($resp);
?>