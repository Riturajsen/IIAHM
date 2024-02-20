<?php
error_reporting(false);

use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT;
include 'Emp_Upload/dbconfig.php';

$query = 'SELECT * FROM core_details ';

$result = mysqli_query($conn,$query);

$return = mysqli_fetch_assoc($result);

$sitename =  $return['sitename'];
$companyName =  $return['company_name'];
$Footerlink =  $return['footer_link'];
$madeBy = $return['madeby'];
$logoLink = "assets/images/IIAHM.png";
$userImage = "assets/images/user.jpg";


// 
// headers 


// Source of data = 
// city 
// Catogery = college ya school 
// name of StudentT
// parent no 
// self $num
// current city 
// living city 
// name of college 

/*
FILE	
CATEGORY	
INSTITUTE NAME 	
NAME	
CONTACT NO.	
PARENRS NO 	
CLASS	
ALLOTED TO	
STATUS	
FOLLOW-UP 	

*/
