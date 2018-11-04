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

	<form method="post" action="" class="login" role="form" >
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
    <p>
      <img src="" alt="" id="ava">
    </p>

    <p>
        <input type='file' id='file' name='file'>
        <img src='' alt='' id='ava' name='ava'>
    </p>

    <p class="login-submit-1">
      <button type="submit" name="submit" class="login-button-1">Sign up</button>
    </p>


    <p class="login-submit-2">
    	<button id="btn-ref" class="login-button-2">Sign in</button>
    </p>

    <p class="create-account"><a href="index.php">View all</a></p>
  </form>


	<?php
		require('connect.php');
    //require('file.php');
		if(isset($_POST["submit"])){
			$firstName = $_POST["firstName"];
			$lastName = $_POST["lastName"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$repit_password = $_POST["pass-repeat"];
      $t_dir='uploads/';
      $t_file = $t_dir.basename($_FILES['file']['name']);

			if($password == $repit_password){
				$query = mysqli_query($conn, "INSERT INTO users (firstName, lastName, email, password, image) VALUES ('$firstName', '$lastName', '$email', '$password', '$t_file')");
        header('Location: edit.php');
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

      // if(move_uploaded_file($_FILES['file']['tmp_name'], $t_file)){
      //   $query = "UPDATE users SET image='".$t_file."' WHERE email='$email'";
      //   mysqli_query($conn, $query);
      // }
		}
	?>
  <script>
    var btn = document.body.querySelector("#btn-ref");
    btn.onclick = function(e){
      e.preventDefault();
      window.location.href = "./signin.php";
    }
  </script>
  <script src="script/file.js"></script>  
</body>
</html>