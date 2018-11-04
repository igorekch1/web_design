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
		//require('file.php');

		$email = $_SESSION['email'];
		$_SESSION['url'] = "index.php";

		$query = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($result)){
			 $_SESSION['id'] = $row['id'];
			echo "

				<form method=post action='update.php' class='login' role='form' style='width:500px' enctype='multipart/form-data'>
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

            <p>
                <input type='file' id='file' name='file'>
                <img src='' alt='' id='ava'>
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

    $t_dir='uploads/';
    $t_file = $t_dir.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'], $t_file)){
      $query = "UPDATE users SET image='".$t_file."' WHERE email='$email'";
      mysqli_query($conn, $query);
    }else{
    }

	?>

<script src="script/file.js"></script>  

</body>
</html>