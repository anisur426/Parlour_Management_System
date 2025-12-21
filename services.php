<?php 
include_once("Admin/inc/db_config.php");
session_start();
?>

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
                    <?php include('navbar.php') ?>
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
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Offcanvas End -->


        <!-- Page Banner Start -->
        <div class="section page-banner" style="background-image: url(assets/images/page-banner.webp);">
            <div class="container">

                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Our Service</h2>
                    <p>Peerly is the best Spa therapy is the best way of Spa perfectly simple and easy to distinguish power</p>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Service</li>
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

        <!-- Services Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h6 class="sub-title">Peerly Spa Service</h6>
                    <h2 class="title">We provide best Spa Services <br> for our clients <u>satisfaction</u> </h2>
                    <p>Peerly is the best Spa therapy is the best way of Spa cases are some perfectly simple and easy to distinguish free hour</p>
                </div>
                <!-- Section Title End -->

                <!-- Service Wrapper Start -->
                <div class="service-wrapper">
                    <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1">
                        <?php 
                        $sql = "SELECT * FROM tblservices";
                        $rawdata = $conn->query($sql);
                        while($row = $rawdata->fetch_object()){
                        ?>
                        <div class="col">
                            <!-- Services Start -->
                            <div class="single-services text-center" data-aos="fade-up" data-aos-delay="200">
                                <div class="services-image">
                                  <img src="Admin/uploads/<?php echo $row->Image; ?>" width="233" height="233" alt="services">

                                    <span class="price">৳<?php echo $row->Cost; ?></span>
                                    
                                </div>
                                <div class="services-content">
                                    <h4 class="title"><a href="therapy-details.html"><?php echo $row->ServiceName; ?></a></h4>
                                    <p>Hot Stone Spa is the best your health and refresh</p>
                                </div>
                            </div>
                            <!-- Services End -->
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Service Wrapper End -->
            </div>
        </div>
        <!-- Services End -->

        <!-- Call to Action Start -->
        <div class="section call-to-action-serction" style="background-image: url(assets/images/patan-bg-2.webp);">
            <!-- Call to Action bg Start -->
            <div class="call-to-action-bg" style="background-image: url(assets/images/cta-bg.webp);"></div>
            <!-- Call to Action bg End -->

            <!-- Call to Action Content Start -->
            <div class="call-to-action-content section-padding-02">

                <img class="shape-1 movebounce-01" width="194" height="227" src="assets/images/shape/shape-10.webp" alt="Shape">

                <img class="shape-2" src="assets/images/shape/shape-11.webp" width="146" height="145" alt="Shape">

                <!-- Call to Action Wrapper Start -->
                <div class="call-to-action-wrapper text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h6 class="sub-title">Special Offer</h6>
                        <h2 class="title">Spa Weekend!</h2>
                        <p>Peerly is the best Spa therapy is the best way of Spa cases are some perfectly simple and easy to distinguish free hour</p>
                    </div>
                    <!-- Section Title End -->
                    <h4 class="discount">Get up to 65% Discount</h4>
                    <a href="contact.php" class="btn btn-primary btn-hover-dark">Book Now</a>
                </div>
                <!-- Call to Action Wrapper End -->

                <img class="shape-3 movebounce-03" src="assets/images/shape/shape-12.webp" width="216" height="190" alt="Shape">

                <img class="shape-4 movebounce-02" src="assets/images/shape/shape-13.webp" width="363" height="231" alt="Shape">

            </div>
            <!-- Call to Action Content End -->
        </div>
        <!-- Call to Action End -->

        <!-- Spa Pricing Start -->
        <div class="section section-padding">
            <div class="container">
                <!-- Spa Pricing Wrapper Start -->
                <div class="spa-pricing-wrapper">

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Spa Pricing Content Start -->
                            <div class="spa-pricing-content" data-aos="fade-right" data-aos-delay="200">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h6 class="sub-title">Spa Pricing</h6>
                                    <h2 class="title">Our Spa & <br> Therapy Price <img class="shape" src="assets/images/shape/shape-15.webp" alt="Shape"></h2>
                                </div>
                                <!-- Section Title End -->
                                <p class="text">Modern & Latest Spa Therapy is always available for our valuable clients </p>
                                <p>Peerly is the best Spa therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour, power can you for a relaxation and fresh mind with great enjoy take some which of us ever undertakes laborious satisfaction</p>
                                <a href="pricing.html" class="btn btn-primary btn-hover-dark">View more</a>
                            </div>
                            <!-- Spa Pricing Content End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Spa Pricing Table Start -->
                            <div class="spa-pricing-table" data-aos="fade-left" data-aos-delay="200">

                                <img class="shape-4 movebounce-02" src="assets/images/shape/shape-9.webp" width="178" height="138" alt="Shape">

                                <div class="spa-pricing-table-wrapper pricing-active">
                                    <img class="shape-1" src="assets/images/shape/shape-2.webp" alt="Shape">

                                    <img class="shape-3" src="assets/images/shape/shape-3.webp" alt="Shape">

                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="pricing-table-wrapper">

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Aroma Therapy</p>
                                                        <span class="line"></span>
                                                        <p class="price">$75</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Sauna Relax</p>
                                                        <span class="line"></span>
                                                        <p class="price">$60</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Geothermal Spa</p>
                                                        <span class="line"></span>
                                                        <p class="price">$90</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Face Mask</p>
                                                        <span class="line"></span>
                                                        <p class="price">$56</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Manicure Pack</p>
                                                        <span class="line"></span>
                                                        <p class="price">$35</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Hot Ston Spa</p>
                                                        <span class="line"></span>
                                                        <p class="price">$95</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="pricing-table-wrapper">

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Aroma Therapy</p>
                                                        <span class="line"></span>
                                                        <p class="price">$75</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Sauna Relax</p>
                                                        <span class="line"></span>
                                                        <p class="price">$60</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Geothermal Spa</p>
                                                        <span class="line"></span>
                                                        <p class="price">$90</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Face Mask</p>
                                                        <span class="line"></span>
                                                        <p class="price">$56</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Manicure Pack</p>
                                                        <span class="line"></span>
                                                        <p class="price">$35</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Hot Ston Spa</p>
                                                        <span class="line"></span>
                                                        <p class="price">$95</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="pricing-table-wrapper">

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Aroma Therapy</p>
                                                        <span class="line"></span>
                                                        <p class="price">$75</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Sauna Relax</p>
                                                        <span class="line"></span>
                                                        <p class="price">$60</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Geothermal Spa</p>
                                                        <span class="line"></span>
                                                        <p class="price">$90</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Face Mask</p>
                                                        <span class="line"></span>
                                                        <p class="price">$56</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Manicure Pack</p>
                                                        <span class="line"></span>
                                                        <p class="price">$35</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                    <!-- Ssingle Pricing Start -->
                                                    <div class="single-price">
                                                        <p class="title">Hot Ston Spa</p>
                                                        <span class="line"></span>
                                                        <p class="price">$95</p>
                                                    </div>
                                                    <!-- Ssingle Pricing End -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                    <img class="shape-2" src="assets/images/shape/shape-2.webp" alt="Shape">

                                </div>
                            </div>
                            <!-- Spa Pricing Table End -->
                        </div>
                    </div>

                </div>
                <!-- Spa Pricing Wrapper End -->
            </div>
        </div>
        <!-- Spa Pricing End -->

        <!-- Testimonial Start -->
        <div class="section section-padding testimonial-section">

            <img class="shape-1 movebounce-03" src="assets/images/shape/shape-14.webp" width="212" height="191" alt="Shape">

            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h6 class="sub-title">Testimonial</h6>
                    <h2 class="title">Our Client’s Expression</h2>
                    <p>Peerly is the best Spa therapy is the best way of Spa cases are some perfectly simple and easy to distinguish free hour</p>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Wrapper Start -->
                <div class="testimonial-wrapper testimonial-active" data-aos="fade-up" data-aos-delay="200">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col">

                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- Single Testimonial Start -->
                                    <div class="swiper-slide single-testimonial">
                                        <div class="testimonial-author">
                                            <img src="assets/images/author/author-1.webp" width="206" height="206" alt="Author">
                                            <div class="author-quote">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</p>
                                            <h4 class="name">Rose Williams</h4>
                                            <div class="rating">
                                                <div class="rating-star" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->

                                    <!-- Single Testimonial Start -->
                                    <div class="swiper-slide swiper-slide single-testimonial">
                                        <div class="testimonial-author">
                                            <img src="assets/images/author/author-2.webp" width="206" height="206" alt="Author">
                                            <div class="author-quote">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</p>
                                            <h4 class="name">Rose Williams</h4>
                                            <div class="rating">
                                                <div class="rating-star" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->

                                </div>
                            </div>

                        </div>
                        <div class="col">

                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- Single Testimonial Start -->
                                    <div class="swiper-slide swiper-slide single-testimonial">
                                        <div class="testimonial-author">
                                            <img src="assets/images/author/author-2.webp" width="206" height="206" alt="Author">
                                            <div class="author-quote">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</p>
                                            <h4 class="name">Rose Williams</h4>
                                            <div class="rating">
                                                <div class="rating-star" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->

                                    <!-- Single Testimonial Start -->
                                    <div class="swiper-slide single-testimonial">
                                        <div class="testimonial-author">
                                            <img src="assets/images/author/author-1.webp" width="206" height="206" alt="Author">
                                            <div class="author-quote">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</p>
                                            <h4 class="name">Rose Williams</h4>
                                            <div class="rating">
                                                <div class="rating-star" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- Testimonial Wrapper End -->
            </div>
        </div>
        <!-- Testimonial End -->

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
     <?php include ('footer.php');?>
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