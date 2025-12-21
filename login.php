<?php
include_once('Admin/inc/db_config.php');
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Peerly Spa & Beauty - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select2.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="main-wrapper">

    <!-- Header -->
    <div id="header" class="section header-area">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="assets/images/logo.webp" width="172" height="45" alt="Logo">
                    </a>
                </div>

                <?php include("navbar.php"); ?>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Page Banner -->
    <div class="section page-banner" style="background-image: url(assets/images/page-banner.webp);">
        <div class="container">
            <div class="page-banner-content">
                <h2 class="title">Login</h2>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Login Section -->
    <div class="section section-padding-02">
        <div class="container">

            <?php
            if (isset($_POST['login'])) {

                $email = mysqli_real_escape_string($conn, $_POST['Email']);
                $password = md5($_POST['password']);

                $sql = "SELECT * FROM tbluser 
                        WHERE Email='$email' AND Password='$password'";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) == 1) {

                    $row = mysqli_fetch_assoc($result);

                    $_SESSION['ID'] = $row['id'];
                    $_SESSION['UserID'] = $row['id'];

                    
                    header("Location: book.php");
                    exit;

                } else {
                    echo '<div class="alert alert-danger text-center">Invalid Email or Password</div>';
                }
            }
            ?>

            <div class="register-login-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="register-login-form">
                            <h3 class="title">Login <span>Now</span></h3>

                            <div class="form-wrapper">
                                <form method="post">
                                    <div class="single-form">
                                        <input type="email" name="Email" placeholder="Email" required>
                                    </div>

                                    <div class="single-form">
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="single-form">
                                        <button type="submit" name="login"
                                            class="btn btn-primary btn-hover-dark w-100">
                                            Login
                                        </button>
                                    </div>

                                    <p class="text-center">
                                        No account?
                                        <a href="register.php">Create one here</a>
                                    </p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Login Section End -->

    <!-- Footer -->
    <?php include("footer.php"); ?>

</div>

<!-- JS -->
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/nice-select2.js"></script>
<script src="assets/js/plugins/glightbox.min.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
