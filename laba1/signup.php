<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup</title>
	<link rel="stylesheet" href="css/signin.css">
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>

	<form method="post" action="" class="login" role="form">
    <p>
      <label for="firstName">First name:</label>
      <input type="text" name="firstName" id="firstName" value="">
    </p>

    <p>
      <label for="lastName">Last name:</label>
      <input type="text" name="lastName" id="lastName" value="">
    </p>

    <p>
      <label for="login">Email:</label>
      <input type="text" name="email" id="email" value="">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <p>
      <label for="pass-repeat">Repeat:</label>
      <input type="password" name="pass-repeat" id="pass-repeat" value="">
    </p>

    <p class="login-submit-1">
      <button type="submit" class="login-button-1">Sign up</button>
    </p>


    <p class="login-submit-2">
    	<button class="login-button-2" onclick="window.location.href = 'signin.php'">Sign in</button>  
    </p>

    <p class="create-account"><a href="index.php">View all</a></p>
  </form>


	<?php
		require('connect.php');

		if(isset($_POST["submit"])){
			$name = $_POST["firstName"];
			$surname = $_POST["lastName"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$repit_password = $_POST["pass-repeat"];

			if($password == $repit_password){
				$query = mysqli_query($conn, "INSERT INTO users (firstName, lastName, email, password) VALUES ('$name', '$surname', '$email', '$password')");
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