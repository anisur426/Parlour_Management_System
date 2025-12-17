<?php include('inc/db_config.php'); ?>

<div class="main-menu">
    <div class="logo-box">
        <a href="dashboard.php" class="logo-light">
            <img src="assets/images/logo-light.png" class="logo-lg" height="28">
            <img src="assets/images/logo-sm.png" class="logo-sm" height="28">
        </a>
        <a href="dashboard.php" class="logo-dark">
            <img src="assets/images/logo-dark.png" class="logo-lg" height="28">
            <img src="assets/images/logo-sm.png" class="logo-sm" height="28">
        </a>
    </div>

    <div data-simplebar>
        <ul class="app-menu list-unstyled">

            <li class="menu-title">Menu</li>

            <!-- Dashboard -->
            <li class="menu-item">
                <a href="dashboard.php" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            <!-- Services -->
            <li class="menu-item">
                <a href="#menuServices" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
  <span class="menu-icon">
    <i class="bx bx-face"></i>

</span>
                    <span class="menu-text">Services</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuServices">
                    <ul class="sub-menu list-unstyled">
                        <li class="menu-item">
                            <a href="add_services.php" class="menu-link">
                                <i class="bx bx-plus-circle me-2"></i>Add Services
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="manage_services.php" class="menu-link">
                                <i class="bx bx-edit me-2"></i>Manage Services
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Pages -->
            <li class="menu-item">
                <a href="#menuPages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text">Pages</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuPages">
                    <ul class="sub-menu list-unstyled">
                        <li class="menu-item">
                            <a href="about_us.php" class="menu-link">
                                <i class="bx bx-info-circle me-2"></i>Update About Us
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="contact_us.php" class="menu-link">
                                <i class="bx bx-phone me-2"></i>Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Appointments -->
            <li class="menu-item">
                <a href="#menuAppointments" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                    <span class="menu-text">Appointments</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuAppointments">
                    <ul class="sub-menu list-unstyled">
                        <li class="menu-item">
                            <a href="appointments_all.php" class="menu-link">
                                <i class="bx bx-list-ul me-2"></i>All Appointments
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="appointments_new.php" class="menu-link">
                                <i class="bx bx-time me-2"></i>New Appointments
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="appointments_accepted.php" class="menu-link">
                                <i class="bx bx-check-circle me-2"></i>Accepted
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="appointments_rejected.php" class="menu-link">
                                <i class="bx bx-x-circle me-2"></i>Rejected
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Enquiry -->
            <li class="menu-item">
                <a href="#menuEnquiry" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-envelope"></i></span>
                    <span class="menu-text">Enquiry</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEnquiry">
                    <ul class="sub-menu list-unstyled">
                        <li class="menu-item">
                            <a href="enquiry_read.php" class="menu-link">
                                <i class="bx bx-envelope-open me-2"></i>Read Enquiry
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="enquiry_unread.php" class="menu-link">
                                <i class="bx bx-envelope me-2"></i>Unread Enquiry
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Customers -->
            <li class="menu-item">
                <a href="customers.php" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-user"></i></span>
                    <span class="menu-text">Customers</span>
                </a>
            </li>
             <!-- Invoice -->
            <li class="menu-item">
                <a href="customers.php" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="fa fa-file-invoice-dollar"></i></span>
                    <span class="menu-text">Invoice</span>
                </a>
            </li>


            <!-- Reports -->
            <li class="menu-item">
                <a href="#menuReports" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-bar-chart"></i></span>
                    <span class="menu-text">Reports</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuReports">
                    <ul class="sub-menu list-unstyled">
                        <li class="menu-item">
                            <a href="report_dates.php" class="menu-link">
                                <i class="bx bx-calendar-event me-2"></i>Between Dates
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="report_sales.php" class="menu-link">
                                <i class="bx bx-line-chart me-2"></i>Sales Reports
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
               <!-- Appointment -->
            <li class="menu-item">
                <a href="customers.php" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <span class="menu-text">Appointment</span>
                </a>
            </li>
                  <!-- Logout -->
            <li class="menu-item">
                <a href="customers.php" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-log-out"></i></span>
                    <span class="menu-text">Logout</span>
                </a>
            </li>


        </ul>
    </div>
</div>