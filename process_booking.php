<?php

session_start();
include 'config.php';

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	
	if (isset($_POST['booknow'])) {

		$date = $_POST['book_date'];
		$time = $_POST['book_time'];
		$duration = $_POST['duration'];
		$court = $_POST['category'];

		$court_id = $court;

		$sql = "INSERT INTO booking(book_date, book_time, duration, category, user_id, court_id) VALUES('$date', '$time', '$duration', '$court', '{$_SESSION['user_id']}', '$court_id')";
		$result = mysqli_query($conn, $sql);

		if($result){
			echo "<script>alert('Booking Successful.')</script>";	
			header("Location: login_booknow.php");
			exit();
        }
        else{
				
			echo "<script>alert('Booking Failed.')</script>";
		}  
	}
}
?>