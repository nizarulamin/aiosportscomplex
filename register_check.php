<?php 
session_start(); 
include "config.php";

if (isset($_POST['username']) && isset($_POST['email'])
    && isset($_POST['telnum']) && isset($_POST['password']) && isset($_POST['re_pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$email = validate($_POST['email']);
    $telnum = validate($_POST['telnum']);
	$password = validate($_POST['password']);
	$re_pass = validate($_POST['re_pass']);

	$user_data = 'username='. $username. ',email='. $email. '&telnum='. $telnum;


	if (empty($username)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($email)){
        header("Location: register.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($password)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($telnum)){
        header("Location: register.php?error=Phone is required&$user_data");
	    exit();
	}

	else if($password !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		

	    $sql = "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, email, telnum, password) VALUES('$username', '$email', '$telnum','$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}