<?php 
session_start();
include 'config.php';

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])){
	
	if (isset($_POST['booknow'])) {

		$date = $_POST['book_date'];
		$time = $_POST['book_time'];
		$duration = $_POST['duration'];
		$court = $_POST['category'];
        
        if($court == 1)
            $price = 10;
        else if($court == 2)
            $price = 70;
        else if($court == 3)
            $price = 15;

        $total = $price * $duration;
        
		$court_id = $court;

		$sql = "INSERT INTO booking(book_date, book_time, duration, category, total_amount, user_id, court_id) VALUES('$date', '$time', '$duration', '$court', '$total', '{$_SESSION['user_id']}', '$court_id')";
		$result = mysqli_query($conn, $sql);
        
		if($result){
			echo "<script>alert('Booking Successful. Total: RM$total Please pay when you arrive. Thank you.')</script>";	
        }
        else{
				
			echo "<script>alert('Booking Failed.')</script>";
		}  
	}

?>
<!DOCTYPE html>
<html lang="en" style="height: 420px;background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">

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
    <section></section>
    <section>
        <section data-aos="fade" data-aos-duration="1050" data-aos-delay="400" data-aos-once="true" class="register-photo" style="background: url(&quot;assets/img/tennis2.jpg&quot;) center / cover;">
            <div class="form-container" style="width: 434px;margin-left: 1138.5px;">
            <form data-aos="fade" data-aos-duration="1300" data-aos-delay="150" data-aos-once="true" method="POST" action="login_booknow.php">       
            <h2 class="text-center"><strong>Booking</strong></h2>
                    <div class="mb-3"><label class="form-label">Date</label><input name="book_date" class="form-control"  type="date" required></div>
                    <div class="mb-3"><label class="form-label">Time</label><select name="book_time" class="form-select" required>
                            <option value="10 a.m.">10 a.m.</option>
                            <option value="11 a.m.">11 a.m.</option>
                            <option value="12 p.m.">12 p.m.</option>
                            <option value="1 p.m.">1 p.m.</option>
                            <option value="2 p.m.">2 p.m.</option>
                            <option value="3 p.m.">3 p.m.</option>
                            <option value="4 p.m.">4 p.m.</option>
                            <option value="5 p.m.">5 p.m.</option>
                            <option value="6 p.m.">6 p.m.</option>
                            <option value="7 p.m.">7 p.m.</option>
                            <option value="8 p.m.">8 p.m.</option>
                            <option value="9 p.m.">9 p.m.</option>
                            <option value="10 p.m.">10 p.m.</option>
                        </select></div>
                    <div class="mb-3"><label class="form-label">Duration</label><select name="duration" class="form-select" required>
                            <option value="1">1 hour</option>
                            <option value="1.5">1.5 hours</option>
                            <option value="2">2 hours</option>
                            <option value="2.5">2.5 hours</option>
                            <option value="3">3 hours</option>
                            <option value="3.5">3.5 hours</option>
                            <option value="4">4 hours</option>
                        </select></div>
                    <div class="mb-3"><label class="form-label">Category</label><select name="category" class="form-select" required>
                            <option value="1">Badminton (RM10)</option>
                            <option value="2">Futsal (RM70)</option>
                            <option value="3">Tennis (RM15)</option>
                        </select></div>
                    <div class="mb-3"><button  type="booknow" name="booknow" style="background: rgb(26,81,222);">Book Now</button></div>
                </form>
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