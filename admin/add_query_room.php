<?php
	if(ISSET($_POST['add_room'])){
		$room_type = $_POST['room_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `room` (room_type, price, photo) VALUES('$room_type', '$price', '$photo_name')") or die(mysqli_error());
		header("location:room.php");
	}
?>