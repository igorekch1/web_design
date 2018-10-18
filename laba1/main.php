<?php

	require('connect.php');

	$sql='Select * from users';
	$res=mysqli_query($conn, $sql) or die ('no connection');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border=1>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Password</th>
		</tr>

<?php
	while($row=mysqli_fetch_assoc($res)){
		echo '<td>'.$row['firstName'].'</td>';
		echo '<td>'.$row['lastName'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['password'].'</td>';
	}
?>		
	</table>	
</body>

</html>