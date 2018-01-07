<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM User ORDER BY idUser DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Forename</td>
		<td>Surname</td>
		<td>Department</td>
        <td>Catalouging</td>
        <td>Assessments</td>
        <td>Loans</td>
        <td>Admins</td>
        <td>Password</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['ForeName']."</td>";
		echo "<td>".$res['SurName']."</td>";
		echo "<td>".$res['Department']."</td>";	
        echo "<td>".$res['Catalouging']."</td>";	
        echo "<td>".$res['Assessments']."</td>";	
        echo "<td>".$res['Loans']."</td>";	
        echo "<td>".$res['Admins']."</td>";	
        echo "<td>".$res['UserPassword']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[idUser]\">Edit</a> | <a href=\"delete.php?id=$res[idUser]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
