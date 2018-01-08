<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//including the database connection file
include_once("config.php");
$action = 0;
$result = mysqli_query($mysqli, "SELECT * FROM User ORDER BY idUser DESC");
if((!empty($_GET['action'])) && (!empty($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    }   
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
        if(($action == 1) && ($id == $res['idUser'])){
            //echo "<tr>";
            //echo "<td>EDIT ROW</td>";
            //echo "<tr>";
    ?>        
        <form name="form1" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td><input type="text" name="Forename" value="<?php echo $res['Forename']?>"></td>
				<td><input type="text" name="Surname" value="<?php echo $res['Surname']?>"></td>
				<td><input type="text" name="Department" value="<?php echo $res['Department'];?>"></td>
				<td><input type="text" name="Catalouging" value="<?php echo $res['Catalouging'];?>"></td>
				<td><input type="text" name="Assessments" value="<?php echo $res['Assessments'];?>"></td>
				<td><input type="text" name="Loans" value="<?php echo $res['Loans'];?>"></td>
				<td><input type="text" name="Admins" value="<?php echo $res['Admins'];?>"></td>
				<td><input type="text" name="UserPassword" value="<?php echo $res['Password'];?>"></td>
				<td><input type="hidden" name="idUser" value="<?php echo $idUser;?>"></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
    </form>
    <?php
        } else{
            echo "<tr>";
            echo "<td>".$res['ForeName']."</td>";
            echo "<td>".$res['SurName']."</td>";
            echo "<td>".$res['Department']."</td>";	
            echo "<td>".$res['Catalouging']."</td>";	
            echo "<td>".$res['Assessments']."</td>";	
            echo "<td>".$res['Loans']."</td>";	
            echo "<td>".$res['Admins']."</td>";	
            echo "<td>".$res['UserPassword']."</td>";	
            echo "<td><a href=\"indexnew.php?id=$res[idUser]&action=1\">Edit</a> | <a href=\"delete.php?id=$res[idUser]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }		
	}
	?>
	</table>
</body>
</html>
