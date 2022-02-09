<?php

include "config.php";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $telnum = $_POST['telnum'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `users`(`username`, `email`, 'telnum', `password`) VALUES ('$username','$email','$telnum','$password')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
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
        <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(5,90,218);" data-bs-target="index.php">AIO Sports Complex</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="booknow.php">Book Now</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="register.php" style="background: rgb(5,90,218);">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <section class="register-photo" style="background: #ffffff;margin-top: 31px;">
        <div class="form-container" style="max-height: 450px;">
            <div class="image-holder" style="background: url(&quot;assets/img/bad.jpg&quot;) center / cover;"></div>
            <form method="POST" action="register_check.php" style="height: 456px;">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="mb-3"><input class="form-control" type="tel" name="telnum" placeholder="Phone Number" required></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <div class="mb-3"><input class="form-control" type="password" name="re_pass" placeholder="Password (repeat)" required></div>

                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="submit" style="background: rgb(1,174,230);">Sign Up</button></div><a class="already">Already have an account?</a><a class="already" href="login.php"><b>Login here.</b></a>
            </form>
        </div>
    </section>
    <section style="margin-top: 179px;">
        <footer class="footer-dark" style="background: rgb(23,60,88);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Badminton Court</a></li>
                            <li><a href="#">Futsal Court</a></li>
                            <li><a href="#">Tennis Court</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>AIO Sports Complex</h3>
                        <p>All-in-one sports complex serve badminton, futsal and tennis courts.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">AIO Sports Complex © 2022</p>
            </div>
        </footer>
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