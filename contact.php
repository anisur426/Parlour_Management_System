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
                  <?php include("navbar.php") ?>
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
        <div class="section page-banner" style="background-image: url(assets/images/page-banner.webp);">
            <div class="container">

                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Contact Us</h2>
                    <p>Peerly is the best Spa therapy is the best way of Spa perfectly simple and easy to distinguish power</p>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
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
         <?php include_once("Admin/inc/db_config.php"); ?>

<!-- Contact Form Wrapper Start -->
<div class="contact-form-wrapper">
    <div class="row flex-row-reverse justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <!-- Contact Form Image Start -->
            <div class="contact-form-image">
                <div class="image">
                    <img src="assets/images/contact-2.webp" width="506" height="527" alt="Choose">
                </div>
            </div>
            <!-- Contact Form Image End -->
        </div>

        <div class="col-lg-6">
            <!-- Contact Form Start -->
            <div class="contact-form">
                <h3 class="form-title">Leave a Reply</h3>

                <?php
                // Form submit হলে ডাটা save হবে
                if(isset($_POST['submit_contact'])){
                    $fname = $conn->real_escape_string($_POST['fname']);
                    $lname = $conn->real_escape_string($_POST['lname']);
                    $phone = $conn->real_escape_string($_POST['phone']);
                    $email = $conn->real_escape_string($_POST['email']);
                    $message = $conn->real_escape_string($_POST['message']);
                    $enquiry_date = date("Y-m-d H:i:s");
                    
                    $sql = "INSERT INTO tblcontact (FirstName, LastName, Phone, Email, Message, EnquiryDate, IsRead)
                            VALUES ('$fname', '$lname', '$phone', '$email', '$message', '$enquiry_date', 0)";
                    
                    if($conn->query($sql)){
                        echo '<div class="alert alert-success">Your message has been sent successfully!</div>';
                    } else {
                        echo '<div class="alert alert-danger">Error: '.$conn->error.'</div>';
                    }
                }
                ?>

                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-form">
                                <input type="text" name="fname" placeholder="First Name*" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-form">
                                <input type="text" name="lname" placeholder="Last Name*" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-form">
                                <input type="text" name="phone" placeholder="Phone*" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email*" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-form">
                                <textarea name="message" placeholder="Write here*" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="btn-margin">
                                <button type="submit" name="submit_contact" class="btn btn-primary btn-hover-dark">Send Now</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- Contact Form End -->
        </div>
    </div>
</div>
<!-- Contact Form Wrapper End -->



        <!-- Footer Start -->
        <?php include("footer.php"); ?>
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