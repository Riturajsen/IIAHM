<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost","root","","iiahm");
$res = mysqli_query($connect, "SELECT * from placementImg where id=$id");
$num = mysqli_num_rows($res);
if ($num != 0){
    $ret = mysqli_fetch_assoc($res);
    unlink('upload/'.$ret['img']);
    mysqli_query($connect,"DELETE from placementImg where id=$id");
    header('Location: ../dashboard.php?page-name=placementPics');
}else{
    echo "No Image found";
}

?>