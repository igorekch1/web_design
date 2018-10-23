<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<form method="post" enctype="multipart/form-data">
	<input class="btn btn-success" type ="file" name="avatar">
	<input class = "btn-btn-success" type="submit">
	<?php
		$t_dir='uploads/';
		$t_file = $t_dir.basename($_FILES['avatar']['name']);
		if(move_uploaded_file($_FILES['avatar']['tmp_name'], $t_file)){
			echo "Good";
			$query = "UPDATE users SET img='".$t_file."' WHERE email='$email'";
			mysqli_query($conn, $query);
		}else{
			echo "Not good";
		}
	?>
</form>

</body>
</html>