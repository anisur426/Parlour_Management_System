<?php include_once("Admin/inc/db_config.php");?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Peerly spa & Beauty bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/icofont.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider.css">
    <link rel="stylesheet" href="assets/css/plugins/star-rating.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select2.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="main-wrapper">

        <!-- Header Start -->
        <div id="header" class="section header-area">
            <div class="container">

                <!-- Header Wrapper Start -->
                <div class="header-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo.webp" width="172" height="45" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Navbar Start -->
                   <?php include('navbar.php'); ?>
                    <!-- Header Navbar End -->

                    <!-- Hewader Meta Start -->
                    <div class="header-meta">

                        <!-- dropdown Start -->
                        <div class="dropdown">
                            <button class="shopping-cart" data-bs-toggle="dropdown">
                                <i class="icofont-shopping-cart"></i>
                                <span class="number">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-cart">

                                <!-- Cart Content Start -->
                                <div class="cart-content">
                                    <ul>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/mini-cart/cart-1.webp" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name"><a href="product-details-left-sidebar.html">Madden by Steve Madden Cale 6</a></h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <button class="cart-remove"><i class="icofont-close-line"></i></button>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/mini-cart/cart-2.webp" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name"><a href="product-details-left-sidebar.html">New Balance Fresh Foam LAZR v1 Sport</a> </h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <button class="cart-remove"><i class="icofont-close-line"></i></button>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/mini-cart/cart-3.webp" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name"><a href="product-details-left-sidebar.html">Water and Wind Resistant Insulated Jacket</a></h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <button class="cart-remove"><i class="icofont-close-line"></i></button>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- Cart Content End -->

                                <!-- Cart Price Start -->
                                <div class="cart-price">
                                    <div class="cart-subtotals">
                                        <div class="price-inline">
                                            <span class="label">Subtotal</span>
                                            <span class="value">$42.70</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Shipping</span>
                                            <span class="value">$7.00</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Taxes</span>
                                            <span class="value">$0.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <div class="price-inline">
                                            <span class="label">Total</span>
                                            <span class="value">$49.70</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Price Start -->

                                <div class="checkout-btn">
                                    <a href="checkout.html" class="btn btn-primary btn-hover-dark d-block">Checkout</a>
                                </div>

                            </div>
                        </div>
                        <!-- dropdown End -->

                        <!-- dropdown Start -->
                        <div class="dropdown">
                            <button class="setting" data-bs-toggle="dropdown">
                                <i class="fa fa-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-setting">
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Sign In</a></li>
                            </ul>
                        </div>
                        <!-- dropdown End -->

                        <!-- Hewader Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <button class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Hewader Toggle End -->

                    </div>
                    <!-- Hewader Meta End -->

                </div>
                <!-- Header Wrapper End -->

            </div>
        </div>
        <!-- Header End -->


        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasNavbar">

            <div class="offcanvas-header">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo.webp" width="172" height="45" alt="Logo"></a>
                </div>
                <!-- Logo End -->
                <button type="button" class="close" data-bs-dismiss="offcanvas">
                    <span></span>
                    <span></span>
                </button>
            </div>

            <div class="offcanvas-body">
                <div class="mobile-menu offcanvas-menu">
                    <ul class="navbar-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#">Spa</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Spa Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="spa-service.html">Spa Service</a></li>
                                        <li><a href="hot-stone-spa.html">Hot Stone Spa</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Our Therapy</a>
                                    <ul class="sub-menu">
                                        <li><a href="our-therapy.html">Our Therapy</a></li>
                                        <li><a href="therapy-details.html">Therapy Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="packages.html">Packages</a></li>
                        <li>
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="produtc-details-left-sidebar.html">Product Details Left Sidebar</a></li>
                                <li><a href="produtc-details-right-sidebar.html">Product Details Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="empty-cart.html">Empty Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="packages.html">Packages</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="404-error.html">404 </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Offcanvas End -->


        <!-- Page Banner Start -->
        <div class="section page-banner" style="background-image: url(assets/images/background-photo.jpg);">
            <div class="container">

                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">About Us</h2>
                    <p>Peerly is the best Spa therapy is the best way of Spa perfectly simple and easy to distinguish power</p>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>

            <!-- Page Social Start -->
            <div class="page-social">
                <div class="container">

                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>

                </div>
            </div>
            <!-- Page Social End -->

        </div>
        <!-- Page Banner End -->

        <!-- Packages Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h6 class="sub-title">Details About Us</h6>
                    <h2 class="title">We provide best Spa Packages <br> for our clients <u>satisfaction</u> </h2>
                    <p>Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials & fashion hair colourings.</p>
                </div>
                <!-- Section Title End -->

                <!-- Packages Wrapper Start -->
                <div class="packages-wrapper row row-cols-lg-3 row-cols-lg-2 row-cols-1 justify-content-center">
                    <?php 
                       
                        $sql = "SELECT * FROM  tblpage WHERE PageType='aboutus' ";
                        $rawdata = $conn->query($sql);
                        
                      if($rawdata && $rawdata->num_rows > 0){
                     $row = $rawdata->fetch_object();
                    ?>
                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <!-- Single Package Start -->
                        <div class="single-package">

                            <img class="shape-1  movebounce-02" src="assets/images/shape/shape-19.webp" alt="Shape">

                            <div class="package-header text-center">
                                <h3><?php echo $row->PageTitle;?></h3>


                                <p>Peerly is the best way to make of Spa cases are perfectly</p>
                            </div>
                            <div class="package-body">
                                <ul class="package-list">
                                    <li class="active">Hot Stone Spa</li>
                                    <li class="active">Facial Scrub</li>
                                    <li class="active">Oil Massage</li>
                                    <li>Tea Therapy</li>
                                    <li>Body Treatment</li>
                                    <li>Herbal Massage</li>
                                </ul>
                            </div>
                            <div class="package-footer text-center">
                                <p class="price"><strong><sup>$</sup>125</strong> <span>Per month</span></p>
                                <a class="btn btn-primary btn-hover-dark" href="#">Book Now</a>
                            </div>
                        </div>
                        <!-- Single Package End -->
                    </div>
                  <?php
} else {
    echo "About Us ডাটা পাওয়া যায়নি";
}
?>
                    <div class="col active" data-aos="fade-up" data-aos-delay="400">
                        <!-- Single Package Start -->
                        <div class="single-package">

                            <img class="shape-1 movebounce-03" src="assets/images/shape/shape-19.webp" alt="Shape">

                            <div class="package-header text-center">
                                <h3 class="title">Premium</h3>
                                <p>Peerly is the best way to make of Spa cases are perfectly</p>
                            </div>
                            <div class="package-body">
                                <ul class="package-list">
                                    <li class="active">Hot Stone Spa</li>
                                    <li class="active">Facial Scrub</li>
                                    <li class="active">Oil Massage</li>
                                    <li class="active">Tea Therapy</li>
                                    <li>Body Treatment</li>
                                    <li>Herbal Massage</li>
                                </ul>
                            </div> 
                            <div class="package-footer text-center">
                                <p class="price"><strong><sup>$</sup>140</strong> <span>Per month</span></p>
                                <a class="btn btn-primary btn-hover-dark" href="#">Book Now</a>
                            </div>
                        </div>
                        <!-- Single Package End -->
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="600">
                        <!-- Single Package Start -->
                        <div class="single-package">

                            <img class="shape-1 movebounce-02" src="assets/images/shape/shape-19.webp" alt="Shape">

                            <div class="package-header text-center">
                                <h3 class="title">Luxury</h3>
                                <p>Peerly is the best way to make of Spa cases are perfectly</p>
                            </div>
                            <div class="package-body">
                                <ul class="package-list">
                                    <li class="active">Hot Stone Spa</li>
                                    <li class="active">Facial Scrub</li>
                                    <li class="active">Oil Massage</li>
                                    <li class="active">Tea Therapy</li>
                                    <li class="active">Body Treatment</li>
                                    <li class="active">Herbal Massage</li>
                                </ul>
                            </div>
                            <div class="package-footer text-center">
                                <p class="price"><strong><sup>$</sup>165</strong> <span>Per month</span></p>
                                <a class="btn btn-primary btn-hover-dark" href="#">Book Now</a>
                            </div>
                        </div>
                        <!-- Single Package End -->
                    </div>
                </div>
                <!-- Packages Wrapper End -->
            </div>
        </div>
        <!-- Packages End -->

        <!-- Brand Start -->
        <div class="section section-padding-02">
            <div class="container">
                <!-- Brand Start -->
                <div class="brand-wrapper brand-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-1.webp" height="107" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-2.webp" height="107" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-3.webp" height="107" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-4.webp" height="107" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="swiper-slide single-brand">
                                <img src="assets/images/brand/brand-5.webp" height="107" alt="Brand">
                            </div>
                            <!-- Single Brand End -->
                        </div>
                    </div>
                </div>
                <!-- Brand End -->
            </div>
        </div>
        <!-- Brand End -->

        <!-- Footer Start -->
      <?php include ('footer.php'); ?>
        <!-- Footer End -->

        <!--Back To Start-->
        <button id="backBtn" class="back-to-top"><i class="icofont-simple-up"></i></button>
        <!--Back To End-->



    </div>

    <!-- JS
    ============================================ -->
    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/nouislider.js"></script>
    <script src="assets/js/plugins/star-rating.js"></script>
    <script src="assets/js/plugins/nice-select2.js"></script>
    <script src="assets/js/plugins/glightbox.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>