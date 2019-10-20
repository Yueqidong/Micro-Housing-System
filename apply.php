<?php
	session_start();
	$username = $_SESSION['username'];
	$programmeID = $_GET["c"];
	
	$con = new mysqli("localhost", "root","","sas");

	
	$query = "select applicantID from applicant,user where user.username=applicant.username and user.username='{$username}'";
	$applicantResult = $con->query($query);
	$attr = $applicantResult->fetch_array();
	$applicantID = $attr["applicantID"];

	
	
	#Query which creates a new application
	$sql = "insert into application(applicationID,applicationDate,status,applicantID,programmeID) values('APP011', CURRENT_DATE,'NEW','{$applicantID}','{$programmeID}')";
	$result=$con->query($sql);
	

	if($result)
	{
		echo "Apply successfully";
		
	}
	else
	{
		echo "Action failed";
	}
?>