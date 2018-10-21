<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin</title>
    <link rel="stylesheet" href="css/signin.css">
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>

	<form method="post" action="" class="login" role="form">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="email" id="email" value="">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <p class="login-submit-1">
      <button type="submit" class="login-button-1">Sign in</button>
    </p>

    <p class="create-account"><a href="signup.php">Create an account?</a></p>
  </form>	


	<?php
		session_start();
		require('connect.php');

		if(isset($_POST["password"]) && isset($_POST["password"])){
			if(($_POST["password"] == "admin@gmail.com") and ($_POST["password"] =="admin")){
				header('Location: admin.php');
			}else{
			$email = $_POST["email"];
			$password = $_POST["password"];
			
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

