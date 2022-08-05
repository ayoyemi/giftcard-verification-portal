<?php
	// require_once 'dbconnect.php';
	
	if(ISSET($_POST['save'])){
		$stud_no = $_POST['email'];
		$front_name = $_FILES['card_front']['name'];
		// $back_name = $_FILES['card_back']['name'];
		$file_type = $_FILES['card_front']['type'];
		$file_temp = $_FILES['card_front']['tmp_name'];
		// $location = "files/".$stud_no."/".$file_name;
		// $location = "files/".$stud_no."/".$file_name;
		// $location = "files/".$front_name;
		$location = "files/".$stud_no." - front - ".$front_name;
		$date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));
		
		
		if(move_uploaded_file($file_temp, $location)){
			// mysqli_query($conn, "INSERT INTO `files` VALUES('', '$front_name', '$back_name', '$file_type', '$date'") or die(mysqli_error());
			header('location: uploadcardback.php');
		}
	}
?>