<?php

include 'config.php';

error_reporting(0);

if(isset($_POST['submit'])) {
    $admin_username = $_POST['admin_username'];
    $admin_pass = $_POST['admin_pass'];

    $sql = "SELECT * FROM admin WHERE admin_username='$admin_username' AND admin_pass='$admin_pass'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) 
	{
        while($row = mysqli_fetch_assoc($result))
		{
			$admin_id = $row["admin_id"];
			$admin_username = $row["admin_username"];
			session_start();
			$_SESSION['admin_id'] = $admin_id;
			$_SESSION['admin_username'] = $admin_username;
		}
        header("Location: admin_booking.php");
    } 
	else{
        echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sports Complex</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
      <div class="container"><a class="navbar-brand" style="color: rgb(5,90,218);">AIO Sports Complex Booking System</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      </div>
    </nav>
    <section class="highlight-clean" style="background: rgba(255,255,255,0.4);padding: 20px 0px;">
        <h2 class="text-center">ADMINISTRATION PAGE</h2>
        <section class="login-clean" style="background: rgb(93,149,195);">
            <form method="POST" action="admin_login.php">
                <h2 class="text-center">Admin</h2>
                <div class="illustration"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: #12b5e8;">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z" fill="currentColor"></path>
                        <path d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z" fill="currentColor"></path>
                    </svg></div>
                <div class="mb-3"><input class="form-control" type="text" name="admin_username" placeholder="Username"></div>
                <div class="mb-3"><input class="form-control" type="password" name="admin_pass" placeholder="Password"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="submit" style="background: #12b5e8;">Log In</button></div>
                <div class="form-group d-flex w-100 justify-content-between">
                        <a href="./login.php">Go to Public Side</a>
                    </div>
            </form>
        </section>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/time.js"></script>
    <script src="assets/js/timepicker.js"></script>
</body>

</html>