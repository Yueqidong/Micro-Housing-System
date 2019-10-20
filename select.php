<?php
	session_start();
	
	$programmeID = $_GET["c"];
	
	$con = new mysqli("localhost", "root","","sas");

$sql = "select name, status ,qualificationName, overallScore from application, applicant, qualification, qualiObtained where applicant.applicantID=application.applicantID  and programmeID= '{$programmeID}' and qualification.qualificationID = applicant.qualificationID and applicant.applicantID = qualiObtained.applicantID";
$result = $con->query($sql);
$attr = $result->fetch_all();

if($result)
{
	$_SESSION["detail"] = $attr;
	header("location:applications.php");
	
}
else
{
    echo "Action failed";
}
?>