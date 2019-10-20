<?php
	session_start();
	
	$applicantName = $_GET["c"];
	
	$con = new mysqli("localhost", "root","","sas");

$sql = "select applicant.applicantID,name,qualificationName, overallScore, subjectName, grade, score from result, applicant, qualification, qualiObtained where name = '{$applicantName}' and qualiObtained.applicantID = result.applicantID and qualification.qualificationID = applicant.qualificationID and applicant.applicantID = qualiObtained.applicantID";
$result = $con->query($sql);
$attr = $result->fetch_all();

if($result)
{
	$_SESSION["detail"] = $attr;
	header("location:applicant.php");
	
}
else
{
    echo "Action failed";
}
?>