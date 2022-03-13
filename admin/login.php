<?php
	if(ISSET ($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['admin_id'] = $fetch['admin_id'];
			header('location:home.php');
		}else{
			echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>