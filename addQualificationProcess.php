<?php

$servername = "localhost";
$usernameDB = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $usernameDB, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// There can be many data bases on the server, so we need to specify which 
// database we want to use
/* Assuming we already have created a database named "sas" ; select db  */
$conn->select_db("sas");

// In order to insert/query/update date , we should have a table 
// Assume we already have table named "user"
// We will store the user details provided in signup page and store in user 
// table of our database

$qname = $_POST['qualificationname'];
$min= $_POST['minscore'];
$max= $_POST['maxscore'];
$desc= $_POST['description'];
$list = $_POST['gradelist'];



// create SQL query: Check the format of Insert query
// INSERT INTO <table_name> VALUES (value1, value2, value3, ...);
// e.g. INSERT INTO user VALUES ('qayoom' , '123')
$sql = "INSERT INTO qualification VALUES (". "'". "Q011" .  "'" ." ,". "'". $qname .  "'" ." , ". "'" . $min . "'" . ", ". "'" . $max . "'" . ", ". "'" . $desc . "'" . ", ". "'" . $list . "'" . ")";


if ($conn->query($sql) === TRUE) {
    echo "Qualification added successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>