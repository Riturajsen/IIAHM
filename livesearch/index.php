<?php


 include 'DBController.php';
    $db_handle = new DBController();
    $filters = [];

    $filters['filesource'] = array_column($db_handle->runQuery("SELECT DISTINCT filesource FROM studentdetails  ORDER BY filesource ASC"), 'filesource');
    $filters['locationn']  = array_column($db_handle->runQuery("SELECT DISTINCT locationn FROM studentdetails  ORDER BY locationn ASC"), 'locationn');
    $filters['category']   = array_column($db_handle->runQuery("SELECT DISTINCT category FROM studentdetails  ORDER BY category ASC"), 'category');
    $filters['institute']  = array_column($db_handle->runQuery("SELECT DISTINCT institute FROM studentdetails  ORDER BY institute ASC"), 'institute');
    $filters['classname']  = array_column($db_handle->runQuery("SELECT DISTINCT classname FROM studentdetails  ORDER BY classname ASC"), 'classname');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <head>
        <!-- <link href="style.css" type="text/css" rel="stylesheet"/> -->
        <title>IIAHM</title>
    </head>
    <body>
	<div class="container">
        <h2>IIAHM </h2>
        <form method="POST" name="filesource">
	
		<div class="row">

            <!-- <div id="col"> -->
                <div class="search-box col mt-5">
                    
                    <select class="form-select form-control" id="filesource" name="filesource[]" multiple="multiple">
                            <?php
                            if (!empty($filters['filesource'])) {
                                foreach ($filters['filesource'] as $key => $value) {
                                    echo '<option value="' . $value . '">' . $value . '</option>';
                                }
                            }
                            ?>
                    </select>
                    <br>
                    <br>
                </div>
                <div class="search-box col">
                    Select Location<br>     <input type="text" name="" id="SLocation">
                    <select class="form-select form-control" id="locationn" name="locationn[]" multiple="multiple">
                            <?php
                            if (!empty($filters['locationn'])) {
                                foreach ($filters['locationn'] as $key => $value) {
                                    echo '<option value="' . $value . '">' . $value . '</option>';
                                }
                            }
                            ?>
                    </select>
                    <br>
                    <br>
                </div>
                <div class="search-box col">
                    Select Category<br>
                    <input type="text" name="" id="">
                    <select class="form-select form-control" id="category" name="category[]" multiple="multiple">
                            <?php
                            if (!empty($filters['category'])) {
                                foreach ($filters['category'] as $key => $value) {
                                    echo '<option value="' . $value . '">' . $value . '</option>';
                                }
                            }
                            ?>
                    </select>
                    <br>
                    <br>
                </div>
                <div class="search-box col">
                Select Institute<br>
                <input type="text" name="" id="">
                    <select class="form-select form-control" id="institute" name="institute[]" multiple="multiple">
                     
                  
                            <?php
                            if (!empty($filters['institute'])) {
                                foreach ($filters['institute'] as $key => $value) {
                                    echo '<option value="' . $value . '">' . $value . '</option>';
                                }
                            }
                            ?>
                    </select>
                    <br>
                    <br>
                </div>
                <div class="search-box col">
                    Select Class<br>     <input type="text" name="" id="">
                    <select class="form-select form-control" id="classname" name="classname[]" multiple="multiple">
                            <?php
                            if (!empty($filters['classname'])) {
                                foreach ($filters['classname'] as $key => $value) {
                                    echo '<option value="' . $value . '">' . $value . '</option>';
                                }
                            }
                            ?>
                    </select>
                    <br>
                    <br>
                </div>
         
            
                <button id="Filter" type="submit">Search</button>
            <!-- </div> -->
		</div>
        </form>


        <?php
        if (!empty($_POST) && count($_POST)) {
            //filter the array $_POST with the keys representing your filters & fields in your DB that you trust
            $request_filters = array_intersect_key($_POST, array_flip(['filesource','institute','locationn','category','classname']));
            if(count($request_filters)) {
                ?>
                <table  class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>
                        <strong>id</strong>
                    </th>
                    <th>
                        <strong>Name</strong>
                    </th>
                    <th>
                        <strong>filesource</strong>
                    </th>
                    <th>
                        <strong>Location</strong>
                    </th>
                    <th>
                        <strong>category</strong>
                    </th>
                    <th>
                        <strong>institute</strong>
                    </th>
                    <th>
                        <strong>classname</strong>
                    </th>
                   
                </tr>
                </thead>
                <?php
                //then build up your prepare query statement
                $params = [];
                $query = "SELECT * from studentdetails WHERE ";
                $extra_query = [];
                foreach ($request_filters as $field => $values) {
                    $extra_query[] = "{$field} IN (?" . str_repeat(', ?', count($values) - 1) . ")";
                    $params = array_merge($params, $values);
                }
                $query .= implode(' AND ',$extra_query);
                $stmt = $db_handle->conn->prepare($query);
                $stmt->bind_param(str_repeat('s',count($params)), ...$params);
                if($stmt->execute()){
                    $stmt_result = $stmt->get_result();
                    if($stmt_result && $stmt_result->num_rows){
                        ?>
                        <tbody>
                        <?php $i = 1;
                        while($row = $stmt_result->fetch_assoc()){
                            ?>
                            <tr>
                                <td>
                                    <div class="col"><?php echo $i ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['fname']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['filesource']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['locationn']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['category']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['institute']; ?></div>
                                </td>
                                <td>
                                    <div class="col"><?php echo $row['classname']; ?></div>
                                </td>
                              
                            </tr>
                            <?php
							$i++;
                        }
                        ?>
                        </tbody>
                        <?php
                    } else {
                        ?>
                        <tbody>
                            <tr>
                                <td colspan="7" class="text-center"><h3>No results!</h3></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
                ?>
                </table>
                <?php
            }
        }
    ?>
	</div>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
