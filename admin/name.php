<?php
	require 'connect.php';
	$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$name = $fetch['name'];
?>