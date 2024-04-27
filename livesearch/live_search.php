<?php
include_once("../core/main.php");
if($_POST["query"] != '') {
	$searchData = explode(",", $_POST["query"]);
	$searchValues = "'" . implode("', '", $searchData) . "'";
	$queryQuery = "
		SELECT id, fname, filesource as filesource, contactno
		FROM studentdetails 
		WHERE filesource IN (".$searchValues.")";
} else {
	$queryQuery = "
	SELECT id, fname, filesource, filesource as filesource, contactno
	FROM studentdetails";
}
$resultset = mysqli_query($conn, $queryQuery) or die("database error:". mysqli_error($conn));
$totalRecord = mysqli_num_rows($resultset);
$htmlRows = '';
if($totalRecord) {
 while( $students = mysqli_fetch_assoc($resultset) ) {
  $htmlRows .= '
	  <tr>
	   <td>'.$students["fname"].'</td>
	   <td>'.$students["filesource"].'</td>
	   <td>'.$students["contactno"].'</td>
	   <td>'.$students["locationn"].'</td>
  </tr>';
 }
} else {
	$htmlRows .= '
		<tr>
			<td colspan="5" align="center">No record found.</td>
		</tr>';
}
$data = array(
	"html" => $htmlRows		
);
echo json_encode($data);	
?>