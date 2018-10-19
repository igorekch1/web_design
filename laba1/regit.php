<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<form method="post" role="form">
			<div class="login-wrap">
				<div class="login-html">
					<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
					<div class="login-form">
						<div class="sign-in-htm">
				<div class="group">
					<label for="name" class="label">First name</label>
					<input id="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="surname" class="label">Last Name</label>
					<input id="surname" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass-repeat" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="group">
					<a class="button linking"href="login.php">Sign in</a>
				</div>
				<div class="group">
					<a class = "button linking"href="notuser.php">View</a>
				</div>
			</div>
					</div>
				</div>
			</div>

		</form>
	


	<?php
		require('connect.php');

		if(isset($_POST["submit"])){
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$email = $_POST["email"];
			$password = $_POST["pass"];
			$repit_password = $_POST["pass-repeat"];

			if($password == $repit_password){
				$query = mysqli_query($conn, "INSERT INTO users (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')");
			}else{
				die('Error, check password!!!');
			}
			if($query){
				$smsg = "Successful";
				echo $smsg;
			}else{
				$smsf = "Error!";
				echo $smsf;
			}
		}
	?>

</body>
</html>