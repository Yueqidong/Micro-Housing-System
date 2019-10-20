<?php
	session_start();
	$applicantID = $_SESSION["applicantID"];
	$status = $_POST['status'];
	
	$con = new mysqli("localhost", "root","","sas");

$sql = "Update application set status = '{$status}' where applicantID ='{$applicantID}' ";
$result = $con->query($sql);

if($result)
{
	echo "Status saved successfully";
	
}
else
{
    echo "Action failed";
}
?>