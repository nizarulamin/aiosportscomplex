<?php 
session_start(); 
include "config.php";

if(isset($_POST['submit'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
     $username = validate($_POST['username']);
     $password = validate($_POST['password']);
 
     if (empty($username)) {
         header("Location: index.php?error=User Name is required");
         exit();
     }else if(empty($password)){
         header("Location: index.php?error=Password is required");
         exit();
     }else{
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
            	$_SESSION['user_id'] = $row['user_id'];
            	header("Location: login_index.php");
		        exit();
            }else{
				array_push($errors, "Wrong username or password");
			}
		}else{
			header("Location: index.php?error=Incorect username or password");
	        exit();
		}
	}
}else{
	header("Location: index.php");
	exit();
}
?>