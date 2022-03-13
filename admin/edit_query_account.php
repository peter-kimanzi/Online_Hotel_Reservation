<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->mysql_query("UPDATE `admin` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
		header("location:account.php");
	}	