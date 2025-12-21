<?php 
include_once("Admin/inc/db_config.php");
session_start();


if(isset($_SESSION['ID'])) {
    $book_link = "book.php";
} else {
    $book_link = "login.php"; 
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Peerly Spa & Beauty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider.css">
    <link rel="stylesheet" href="assets/css/plugins/star-rating.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select2.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="main-wrapper">

    <!-- Header Start -->
    <div id="header" class="section header-area">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href="index.php"><img src="assets/images/logo.webp" width="172" height="45" alt="Logo"></a>
                </div>
                <!-- Header Navbar Start -->
                <?php include('navbar.php'); ?>
                <!-- Header Navbar End -->
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-start" id="offcanvasNavbar">
        <div class="offcanvas-header">
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo.webp" width="172" height="45" alt="Logo"></a>
            </div>
            <button type="button" class="close" data-bs-dismiss="offcanvas"><span></span><span></span></button>
        </div>
        <div class="offcanvas-body">
            <div class="mobile-menu offcanvas-menu">
                <ul class="navbar-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="<?php echo $book_link; ?>" class="btn btn-primary btn-hover-dark">Book Now</a></li>
                    <li><a href="packages.html">Packages</a></li>
                
                </ul>
            </div>
        </div>
    </div>
    <!-- Offcanvas End -->

    <!-- Slider Start -->
    <div class="section slider-area slider-active">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- Single Slider Start -->
                <div class="swiper-slide animation-style-01 single-slider d-flex align-items-center" style="background-image: url(assets/images/slider/slider-1.webp);">
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="title">Relaxation <br> Bath with the <br> Aroma Therapy</h1>
                            <ul class="slider-meta">
                                <li><a href="<?php echo $book_link; ?>" class="btn btn-primary btn-hover-white">Book Now</a></li>
                                <li><a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="video-play glightbox"><span class="icon"><i class="fa fa-play"></i></span> Watch Video</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide animation-style-01 single-slider d-flex align-items-center" style="background-image: url(assets/images/slider/slider-2.webp);">
                    <div class="container">
                        <div class="slider-content content-white">
                            <h1 class="title">Relaxation <br> Bath with the <br> Aroma Therapy</h1>
                            <ul class="slider-meta">
                                <li><a href="<?php echo $book_link; ?>" class="btn btn-white btn-hover-primary">Book Now</a></li>
                                <li><a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="video-play glightbox"><span class="icon"><i class="fa fa-play"></i></span> Watch Video</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Slider End -->

            </div>
        </div>
    </div>
    <!-- Slider End -->


    <?php include ('footer.php'); ?>

</div>

<!-- JS -->
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/nouislider.js"></script>
<script src="assets/js/plugins/star-rating.js"></script>
<script src="assets/js/plugins/nice-select2.js"></script>
<script src="assets/js/plugins/glightbox.min.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
