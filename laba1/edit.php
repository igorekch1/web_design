<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/signin.css">
</head>
<body>
	

	<?php
		session_start();
		require('connect.php');

		$email = $_SESSION['email'];
		$_SESSION['url'] = "index.php";

		$query = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)){
			echo "

				<form method=post action='update.php' class='login' role='form' style='width:500px'>
    				<p>
      					<label for='firstName'>First name:</label>
      					<input type='text' name='firstName' id='firstName' value='".$row['firstName']."'>
    				</p>

    				<p>
      					<label for='lastName'>Last name:</label>
      					<input type='text' name='lastName' id='lastName' value='".$row['lastName']."'>
    				</p>

    				<p>
      					<label for='email'>Email:</label>
      					<input type='text' name='email' id='email' value='".$row['email']."'>
    				</p>

    				<p>
      					<label for='password'>Password:</label>
      					<input type='password' name='password' id='password' value='".$row['password']."'>
    				</p>

    				<p id='uniq' class='login-submit-1' style='margin: 0 0 20px; right:65px;'>
      					<button type='submit' name='submit' class='login-button-1'>Edit</button>
    				</p>
    				<p class='create-account'>
    					<a href='logout.php'>Log out</a>
    				</p>
    				<input type='hidden' name='id' value='".$row['id']."'>

    				</form>
    			";
		}
	?>
</body>
</html>