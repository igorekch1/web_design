	<?php
		$t_dir='uploads/';
		$t_file = $t_dir.basename($_FILES['avatar']['name']);
		if(move_uploaded_file($_FILES['avatar']['tmp_name'], $t_file)){
			$query = "UPDATE users SET image='".$t_file."' WHERE email='$email'";
			mysqli_query($conn, $query);
		}else{
		}
	?>
