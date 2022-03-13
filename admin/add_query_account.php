<?php
	if(ISSET($_POST['add_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		$valid = $conn->num_rows;
		if($valid > 0){
			echo "<center><label style = 'color:red;'>Username already taken</center></label>";
		}else{
			$conn->query("INSERT INTO `admin` (name, username, password) VALUES('$name', '$username', '$password')") or die(mysqli_error());
			header("location:account.php");
		}
	}
?>