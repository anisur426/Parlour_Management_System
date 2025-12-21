
<div class="header-navbar d-none d-lg-block">
    <ul class="navbar-menu">
        <!-- সাধারণ লিঙ্ক -->
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Service</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php if (!isset($_SESSION['ID'])) { ?>
            <!-- 🔴 লগইন না থাকলে -->
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        <?php } else { ?>
            <!-- 🟢 লগইন হলে -->
            <li><a href="packages.php">Book Salon</a></li>
            <li><a href="my-bookings.php">My Booking</a></li>
            <li><a href="invoice.php">My Invoice</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php } ?>

        <!-- অ্যাডমিন লিঙ্ক সর্বদা দেখাবে -->
        <li><a href="admin.php">Admin</a></li>
    </ul>
</div>
