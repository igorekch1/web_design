<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="table.css">
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">ADMIN</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href='logout.php'>Logout</a></li>
				</ul>
			</div>
		</nav>
<div class="container">
<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>E-Mail</th>
		<th>Password</th>
	</tr>
<?php
		session_start();
		require('connect.php');

		$email = $_SESSION['email'];
		$_SESSION['url'] = "admin.php";

		$query = "SELECT * FROM users";
		$result = mysqli_query($conn, $query);
		echo "<h1>Edit</h1>
			  <p>Введите в поля данные, которые хотите изменить</p>";

		while($row = mysqli_fetch_array($result)){
			if($row['id'] == "1"){
				"<tr><form method=post>
					<td><input type=text  name=firstName placeholder=Name value='".$row['firstName']."' readonly></td>
					<td><input type=text name=lastName placeholder=Surname value='".$row['lastName']."' readonly></td>
					<td><input type=email name=email placeholder=Email value='".$row['email']."' readonly></td>
					<td><input type=password name=password placeholder=Password value='".$row['password']."' readonly></td>
					<input type=hidden name=id value='".$row['id']."'>
				</form></tr>";
			}else{
			echo "<tr><form method=post action='update.php'>
					<td><input type=text  name=firstName placeholder=Name value='".$row['firstName']."'></td>
					<td><input type=text name=lastName placeholder=Surname value='".$row['lastName']."'></td>
					<td><input type=email name=email placeholder=Email value='".$row['email']."'></td>
					<td><input type=password name=password placeholder=Password value='".$row['password']."'></td>
					
					<td><input type=submit value=Edit name=submit></td>
					<td><input type=submit value=Delete name=submit_Delete></td>
					<input type=hidden name=id value='".$row['id']."'>
				</form></tr>";
			}
		}
	?>
</table>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
