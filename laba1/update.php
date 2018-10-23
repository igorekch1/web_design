<?php
	session_start();
	require('connect.php');

		if($_POST['submit']){
			$query = "UPDATE users SET firstName='".$_POST['firstName']."', lastName='".$_POST['lastName']."', email='".$_POST['email']."', password='".$_POST['password']."' WHERE id='".$_POST['id']."'";
		}
		if($_POST['submit_Delete'])
		{
			$query = "DELETE users FROM users WHERE id='".$_POST['id']."'";
		}
	

	mysqli_query($conn, $query);
	header('Location: '.$_SESSION['url']);
?>