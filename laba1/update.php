<?php
	session_start();
	require('connect.php');

		if(isset($_POST['submit'])){
			$query = "UPDATE users SET firstName='".$_POST['firstName']."', lastName='".$_POST['lastName']."', email='".$_POST['email']."', password='".$_POST['password']."' WHERE id='".$_POST['id']."'";
			echo $query;
		}
		if(isset($_POST['submit_Delete']))
		{
			$query = "DELETE users FROM users WHERE id='".$_POST['id']."'";
		}
	

	$res = mysqli_query($conn, $query);
	echo $res;

	header('Location: '.$_SESSION['url']);
?>