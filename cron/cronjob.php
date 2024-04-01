<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "iiahm";

$con = mysqli_connect($host,$user,$pass,$database);

$today_date = date('Y-m-d');
$ret_get = mysqli_query($con , "SELECT * from studentdetails where comingOn='$today_date'");
while ($row_get=mysqli_fetch_array($ret_get)){ 
$fname = $row_get['fname'];
$Pnumber = $row_get['contactno'];
$allotedTo = $row_get['allotedTo'];
$comingOn = $row_get['comingOn'];

$query_insert = mysqli_query($con , "SELECT * from frontdesk  where Pnumber='$Pnumber'");
if(mysqli_num_rows($query_insert) == 0 )
{
 mysqli_query($con ,"INSERT  INTO frontdesk (fname, Pnumber , TeleCaller, comingOn ) VALUES ( '$fname' , '$Pnumber' , '$allotedTo', '$comingOn')"); 

}
else {
    return "DONE";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CronJob Page</title>
    <link rel="shortcut icon" href="../form/images/logo.jpg" type="image/x-icon">
</head>
<body>
    
</body>
</html>