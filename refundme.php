<? php 
// connect to database
// first, instantiate MySQLi class
// order:local_host, root, DB_name
// use @ to block error report to user
// detect connecction failure
// close class 

$db = @new MySQLi("local_host","root","","car");
if ($db-> connect_error){
    exit("cannot connect to database");
}
var_dump($db-> connect_error);
if ($db->close()){
    echo "bye";
} else{
    echo "error";
}
?>