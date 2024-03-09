
<?php

if(isset($_POST["limit"], $_POST["start"]))
$start = $_POST["start"] ;
$limit = $_POST["limit"];
{
 $connect = mysqli_connect("localhost", "root", "", "lazyloaddata");
 $query = "SELECT * FROM mockdata  ORDER BY ID DESC LIMIT ".$start.",".$limit."";
 $result = mysqli_query($connect, $query);
 $numrow= mysqli_num_rows($result);
 echo 'NUmber of rows : '.$numrow." And start is ".$start." and the limit is  ".$start+$limit;
 while($row = mysqli_fetch_assoc($result))
 {
  echo '
  <h3>'.$row["blogTitle"].'</h3>
  <p>'.$row["EmailAddress"].'</p>
  <p>'.$row["ID"].'</p>
  <p class="text-muted" align="right">By - '.$row["FirstNameLastName"].'</p>
  <hr />
  ';
  $start+1;
 }
}

?>
