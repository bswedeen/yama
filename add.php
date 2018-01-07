<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">	
<head>
	<title>Add Data</title>
</head>

<body>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	//including the database connection file
	include_once("config.php");

	$Forename = mysqli_real_escape_string($mysqli, $_REQUEST['Forename']);
	$Surname = mysqli_real_escape_string($mysqli, $_REQUEST['Surname']);
	$Department = mysqli_real_escape_string($mysqli, $_REQUEST['Department']);
	$Catalouging = mysqli_real_escape_string($mysqli, $_REQUEST['Catalouging']);
	$Assessments = mysqli_real_escape_string($mysqli, $_REQUEST['Assessments']);
	$Loans = mysqli_real_escape_string($mysqli, $_REQUEST['Loans']);
	$Admins = mysqli_real_escape_string($mysqli, $_REQUEST['Admins']);
	$Password = mysqli_real_escape_string($mysqli, $_REQUEST['Password']);
		
	//echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	//insert data to database	
	$result = mysqli_query($mysqli, "INSERT INTO User (ForeName,SurName,Department,Catalouging,Assessments,Loans,Admins,UserPassword) VALUES('$Forename','$Surname','$Department','$Catalouging','$Assessments','$Loans','$Admins','$Password')");
		
	//display success message
	echo "<font color='green'>Data added successfully.";
	echo "<br/><a href='index.php'>View Result</a>";

?>
</body>
</html>