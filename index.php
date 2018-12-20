<?php
//connect to the database 
require_once ("./connect.php");
//prepaare the SQL statement 
$SQL = "SELECT `car_info_id` FROM `car_info`WHERE";
//execute the SQL statement using the query() method 
$result = $db->query($sql);
//check for SQL error 
// checking error using sql error()
if($db->error){
    exit("SQL error");
}
//UNPACKING the statement
while($array = $result->fetch_array()) {
    var_dump($array);
}
//check number of rows retrived
echo "number of results: ".$result->num_rows.". <br/>";

//free method and disconnect from database
$result->free();
$db-> close();

?>