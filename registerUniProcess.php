<?php 

$servername = "localhost";
$usernameDB = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $usernameDB, $password);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

// There can be many data bases on the server, so we need to specify which 
// database we want to use
/* Assuming we already have created a database named "sas" ; select db  */
$con->select_db("sas");

// In order to insert/query/update date , we should have a table 
// Assume we already have table named "user"
// We will store the user details provided in signup page and store in user 
// table of our database

$id = $_POST['uniname'];
$pass= $_POST['username'];
$fullname= $_POST['password'];
$em= $_POST['adminname'];
$selected_val = $_POST['email'];




// create SQL query: Check the format of Insert query
// INSERT INTO <table_name> VALUES (value1, value2, value3, ...);
// e.g. INSERT INTO user VALUES ('qayoom' , '123')
$sql = "INSERT INTO university VALUES (". "'". $id .  "'" ." , ". "'" . $pass . "'" . ", ". "'" . $fullname . "'" . ", ". "'" . $em . "'" . ", ". "'" . $selected_val . "'" . ")";


if ($con->query($sql) === TRUE) {
    echo "University added successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();



 ?>