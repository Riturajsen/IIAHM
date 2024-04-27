<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <script src="jquery.js"></script>
</head>
<body>
<select name="multiSelectSearch" id="multiSelectSearch" multiple class="form-control selectpicker" title="Live data search by location...">
	<?php
    error_reporting(false);
	include_once("../core/main.php");
	$sql_query = "SELECT DISTINCT filesource as filesource FROM studentdetails";
	$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
	while( $student = mysqli_fetch_assoc($resultset) ) {
		echo '<option value="'.$student["filesource"].'">'.$student["filesource"].'</option>'; 
	}
	?>
</select>

<!-- live display fr the the data -->

<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<th>Name</th>
			<th>filesource</th>
			<th>contactno</th>
			<th>Location</th>
			<!-- <th>Designation</th>      -->
			</tr>
		</thead>
		<tbody>	
		</tbody>
	</table>
</div>	
<script>
    $(document).ready(function() {
	listRecords();
	$('#multiSelectSearch').change(function() {
		console.log($('#multiSelectSearch').val());
		$('#filesource').val($('#multiSelectSearch').val());
		var searchQuery = $('#filesource').val();
		listRecords(searchQuery);
	});
});
function listRecords(searchQuery='') {
	$.ajax({
		url:"live_search.php",
		method:"POST",
		dataType: "json",
		data:{query:searchQuery},
		success:function(response) {
			$('tbody').html(response.html);
		}
	});
}
</script>
</body>
</html>