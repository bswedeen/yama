<?php
//Display error messages on page for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// including the database connection file
include_once("config.php");

//getting id from url
$idUser = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM User WHERE idUser=$idUser");

while($res = mysqli_fetch_array($result))
{
	$Forename = $res['ForeName'];
	$Surname = $res['SurName'];
	$Department = $res['Department'];
    $Catalouging = $res['Catalouging'];
    $Assessments= $res['Assessments'];
    $Loans = $res['Loans'];
    $Admins = $res['Admins'];
    $Password = $res['UserPassword'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>	
<meta charset="UTF-8">	
	<title>Edit Data</title>
</head>
<body>
	<form name="form1" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Forename</td>
				<td><input type="text" name="Forename" value="<?php echo $Forename;?>"></td>
			</tr>
			<tr> 
				<td>Surname</td>
				<td><input type="text" name="Surname" value="<?php echo $Surname;?>"></td>
			</tr>
			<tr> 
				<td>Department</td>
				<td><input type="text" name="Department" value="<?php echo $Department;?>"></td>
			</tr>
            <tr> 
				<td>Catalouging</td>
				<td><input type="text" name="Catalouging" value="<?php echo $Catalouging;?>"></td>
			</tr>
            <tr> 
				<td>Assessments</td>
				<td><input type="text" name="Assessments" value="<?php echo $Assessments;?>"></td>
			</tr>
            <tr> 
				<td>Loans</td>
				<td><input type="text" name="Loans" value="<?php echo $Loans;?>"></td>
			</tr>
            <tr> 
				<td>Admins</td>
				<td><input type="text" name="Admins" value="<?php echo $Admins;?>"></td>
			</tr>
            <tr> 
				<td>Password</td>
				<td><input type="text" name="UserPassword" value="<?php echo $Password;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="idUser" value="<?php echo $idUser;?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>