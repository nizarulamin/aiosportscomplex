<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

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
        <div class="simple-slider" style="height: 600px;">
            <div class="swiper-container" style="height: 600px;">
                <div class="swiper-wrapper" style="width: 700px;height: 600px;">
                    <div class="swiper-slide" style="background: url(&quot;assets/img/bad2.jpg&quot;) top / contain no-repeat;height: 600px;width: 700;"></div>
                    <div style="background: url(&quot;assets/img/tennis2.jpg&quot;) center / contain no-repeat;height: 600px;width: 700;" class="swiper-slide"></div>
                    <div style="background: url(&quot;assets/img/futsal1.jpg&quot;) bottom / contain no-repeat;height: 600px;width: 700;" class="swiper-slide"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <section class="highlight-clean" style="background: rgba(255,255,255,0.4);">
            <div class="container" style="background: #efefef;max-width: 518px;border-radius: 19px;padding-bottom: 17px;">
                <div class="intro">
                    <h2 class="text-center">Make a Booking</h2>
                </div>
                <div class="buttons"><a class="btn btn-primary" role="button" href="login_booknow.php" style="background: rgb(5, 90, 218);">Go to booking</a></div>
            </div>
        </section>
        <section>
            <section data-aos="fade-down" data-aos-duration="1350" data-aos-delay="100" data-aos-once="true" class="article-list">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Category</h2>
                        <p class="text-center">3 sports, 15 courts. All are professional-graded.</p>
                    </div>
                    <div class="row articles">
                        <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/badminton.png"></a>
                            <h3 class="name">Badminton</h3>
                            <p class="description">10 courts with air-conditioning.</p><a class="action" href="#"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/futsal.png"></a>
                            <h3 class="name">Futsal</h3>
                            <p class="description">2 courts.</p><a class="action" href="#"></a>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/tennis.jpg"></a>
                            <h3 class="name">Tennis</h3>
                            <p class="description">3 courts with a spectator stand.</p><a class="action" href="#"></a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section>
            <section class="features-blue" style="background: #195678;margin-top: 20px;">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Why choose us?</h2>
                        <p class="text-center"></p>
                    </div>
                    <div class="row features" data-aos="fade-down" data-aos-duration="1800" data-aos-delay="200" data-aos-once="true">
                        <div class="col-sm-6 col-md-4 item"><i class="fa fa-map-marker icon" data-bss-hover-animate="tada"></i>
                            <h3 class="name">Easy access</h3>
                            <p class="description">Easily accessible to any form of public transportation – car, bus, train, plane, whatever.&nbsp;<br><br></p>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><i class="fa fa-clock-o icon" data-bss-hover-animate="flash"></i>
                            <h3 class="name">24 hours operated</h3>
                            <p class="description">We operate 24 hours a day, 7 days a week.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><i class="fa fa-heart-o icon" data-bss-hover-animate="rubberBand"></i>
                            <h3 class="name">Family friendly</h3>
                            <p class="description">Single, couple or even family are welcomed to enjoy playing in our courts.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><i class="fa fa-leaf icon" data-bss-hover-animate="swing"></i>
                            <h3 class="name">Go-green environment</h3>
                            <p class="description">We practise go-green in our centre in order to save the planet.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><i class="fa fa-check icon" data-bss-hover-animate="jello"></i>
                            <h3 class="name">Professional-grade approved</h3>
                            <p class="description">All courts in AIO Sports Complex are professionally approved by respected sports organization. That means pro players has had their time in our courts.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><i class="fa fa-medkit icon" data-bss-hover-animate="tada"></i>
                            <h3 class="name">Physiotherapy ready</h3>
                            <p class="description">We provide 24 hours physiotherapy services in case any of you encounter serious injuries. Your safety is our priority.</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section>
            <section class="map-clean" style="margin-top: 29px;">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Location </h2>
                        <p class="text-center">Strategically located in a modern-proven city of Kuala Lumpur.</p>
                    </div>
                </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyBgEG5JhJETlVj-SijSQkjAFfhpJW8Pg4A&amp;center=3.054831136658843%2C+101.68936467459478&amp;zoom=17" width="100%" height="450"></iframe>
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
} else {
    header("Location: index.php");
    exit();
}
?>