<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signin.css">
</head>
<body>
	<form method="post" role="form">	
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
				<div class="login-form">
						<div class="sign-in-htm">
							<div class="group">
								<label for="email" class="label">Email</label>
								<input id="email" type="text" class="input" name="email" required>
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input id="pass" type="password" class="input" data-type="password" name="pass" required>
							</div>
							<div class="group">
								<input type="submit" class="button" value="Sign In">
							</div>
							<div class="group">
								<!-- <input class="button" value="Registration" onclick="location.href="regit.php"> -->
								<a class ="button linking" href="regit.php">Sign up</a>
							</div>
						</div>
				</div>
			</div>
		</div>
	</form>


	<?php
		session_start();
		require('connect.php');

		if(isset($_POST["pass"]) && isset($_POST["pass"])){
			if(($_POST["pass"] == "admin@admin") and ($_POST["pass"] =="admin")){
				header('Location: admin.php');
			}else{
			$email = $_POST["email"];
			$password = $_POST["pass"];
			
			$query = "SELECT email, password FROM users WHERE email='$email' and password='$password'";
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
			$count = mysqli_num_rows($result);

			if($count == 1){
				$_SESSION['email'] = $email;
			}else{
				$fmsg = "Error";
			}
			if(isset($_SESSION['email'])){
				$email = $_SESSION['email'];
				header('Location: index.php');
			}
		}
	}
	?>



</body>
</html>

