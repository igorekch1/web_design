<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">LABA 1</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href='signup.php'>Regit</a></li>
					<li><a href='signin.php'>Login</a></li>
				</ul>
			</div>
		</nav>
<div class="cointainer">
	<table class="table">
		<tr>
			<th style="padding-right: 100px">Name</th>
			<th style="padding-right: 100px">Surname</th>
			<th style="padding-right: 100px">E-Mail</th>
			<th style="padding-right: 100px"></th>
		</tr>
		<?php
			require('connect.php');

			$query = "SELECT * FROM users";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_array($result)){
				echo "<tr>
					<td> ".$row['firstName']."</td>
					<td> " . $row['lastName']."</td>
					<td><img width=75 height=75 src='".$row['img']."'></td>
				</tr>";}
			echo "</table>";
		?>
</div>
</body>
</html>