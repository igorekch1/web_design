<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
	<link rel="stylesheet" href="css/table.css">
</head>
<body>
	<table class="table_col">
		<colgroup>
      		<col style="background:#C7DAF0;">
  		</colgroup>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>	
			<th>Email</th>
			<th>Password</th>
		</tr>

<?php
	
	session_start();
	require('connect.php');



	$sql=" SELECT * FROM users "; 
	$res=mysqli_query($conn, $sql) or die ('no connection');


	while($row=mysqli_fetch_assoc($res)){
		echo "<tr>";
		echo '<td>'.$row['firstName'].'</td>';
		echo '<td>'.$row['lastName'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['password'].'</td>';
		// echo '<td>'.$row['file'].'</td>';
		echo "</tr>";

	}
?>		
	</table>	
</body>

</html> 