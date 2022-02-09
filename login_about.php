<?php 
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en" style="height: 420px;">

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

<body style="height: 550px;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="login_index.php" style="color: rgb(5,90,218);">AIO Sports Complex</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="login_booknow.php">Book Now</a></li>
                        <li class="nav-item"><a class="nav-link" href="login_facilities.php">Facilities</a></li>
                        <li class="nav-item"><a class="nav-link" href="login_about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="login_contact.php">Contact Us</a></li>
                        <li class="nav-item dropdown show"><a aria-expanded="true" data-bs-toggle="dropdown" class="dropdown-toggle nav-link" href="#" style="margin-left: 519px;">
                                <?php if (isset($_SESSION['username'])) {
                                    echo "Hello ", $_SESSION['username'];
                                } ?></a>
                            <div class="dropdown-menu" style="margin-left: 519px;"><a class="dropdown-item" href="logout.php">Logout</a></div>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
    <section>
        <section class="highlight-phone" style="background: rgb(255,255,255);">
            <div class="container">
                <div class="row" data-aos="fade-down" data-aos-duration="1450" data-aos-once="true">
                    <div class="col-md-8" style="margin-top: 84px;margin-left: 197px;">
                        <div class="intro">
                            <h2>About us</h2>
                            <p>The story of AIO Sports Complex which opened its first centre in 2020 despite the pandemic outbreak, is a tale of continual innovation, remarkable expansion and a single-minded dedication to the highest of standards. It provides badminton, futsal and tennis courts alongside with physiotherapy services.<br></p>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-top: 87px;">
                        <div class="d-none d-md-block phone-mockup"><img data-aos="fade" data-aos-duration="1250" data-aos-delay="950" data-aos-once="true" class="device" src="assets/img/AIO.png" style="margin-top: -125px;width: 351px;margin-left: 848px;transform: rotate(15deg);"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <section data-aos="fade-down" data-aos-duration="1450" data-aos-delay="1500" data-aos-once="true" class="team-boxed" style="background: linear-gradient(white 0%, rgb(104,198,218) 55%, rgb(255,255,255) 100%);margin-top: -66px;">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Founder</h2>
                    <p class="text-center">3 musketeers<br></p>
                </div>
                <div class="row people">
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><img class="rounded-circle" src="assets/img/syaf.png">
                            <h3 class="name">Syafiq</h3>
                            <p class="title"><strong>CHIEF EXECUTIEVE OFFICER</strong><br></p>
                            <p class="description"></p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><img class="rounded-circle" src="assets/img/IMG-20200117-WA0024.jpg">
                            <h3 class="name">Haziq</h3>
                            <p class="title"><strong>CHIEF OPERATING OFFICER</strong><br></p>
                            <p class="description"></p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><img class="rounded-circle" src="assets/img/1627471243643.jpg">
                            <h3 class="name">Amin</h3>
                            <p class="title"><strong>CHIEF MARKETING OFFICER</strong><br></p>
                            <p class="description"></p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>