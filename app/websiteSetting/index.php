<?php
session_start();

include "config/connect.php";

if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();

}else{
include("../globalGet.php");
if($rights == 2 || $rights == 3){
  ?>

<h1>Hello and welcome to page edit </h1>



<?php } else{ echo "<h1>you do not have required rights</h1>";} }?>