<?php
session_start();
require('dbconnect.php');

if(ISSET($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$buyemail = $_POST['buyemail'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$aptsuite = $_POST['aptsuite'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$postalcode = $_POST['postalcode'];
		$country = $_POST['country'];
		$card_type = $_POST['bank_card_type'];
		$card_full_name = $_POST['card-full-name'];
		$card_number = $_POST['card-number'];
		$expiry_month = $_POST['expiry-month'];
		$expiry_year = $_POST['expiry-year'];
		$cvv = $_POST['cvv'];
		
		
		mysqli_query($conn, "INSERT INTO `card_details` VALUES ('', '$fname', '$lname', '$buyemail', '$phone', '$address', '$aptsuite', '$city', '$province', '$postalcode', '$country', '$card_type', '$card_full_name', '$card_number', '$expiry_month', '$expiry_year', '$cvv' )") or die(mysqli_error());

		header('location: buysuccess.php');
	}

// $card_type = $_POST['bank_card_type'];
// $card_full_name = $_POST['card-full-name'];
// $card_number = $_POST['card-number'];
// $expiry_month = $_POST['expiry-month'];
// $expiry_year = $_POST['expiry-year'];
// $cvv = $_POST['cvv'];

// // echo " <p> '$card_type', '$card_full_name', '$card_number', '$expiry_month', '$expiry_year', '$cvv' </p> ";

// $sql = "INSERT INTO `card_details` (id, card_type, card_full_name, card_number, expiry_month, expiry_year, cvv) VALUES ('', '$card_type', '$card_full_name', '$card_number', '$expiry_month', '$expiry_year', '$cvv')"

// $query = mysqli_multi_query($conn, $sql);
// if($query)
// {
// 	// alert("Card purchase successfully, kindly check your email within 60mins (1hour).")
// 	header('location: buycards.php');
// 	exit();
// }
// else
// {
// 	// $_SESSION['msg'] = "Oops! Unable to add employer, please check and try again.";
// 	header('location: index.php');
// 	exit();
// }

?>