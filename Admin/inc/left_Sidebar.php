     <?php include('inc/db_config.php'); ?>
     <div class="main-menu">
         <!-- Brand Logo -->
         <div class="logo-box">
             <!-- Brand Logo Light -->
             <a href="index.html" class="logo-light">
                 <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="28">
                 <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
             </a>

             <!-- Brand Logo Dark -->
             <a href="index.html" class="logo-dark">
                 <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="28">
                 <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
             </a>
         </div>

         <!--- Menu -->
         <div data-simplebar>
             <ul class="app-menu">

                 <li class="menu-title">Menu</li>

                 <li class="menu-item">
                     <a href="index.html" class="menu-link waves-effect waves-light">
                         <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                         <span class="menu-text"> Dashboards </span>
                         <span class="badge bg-primary rounded ms-auto">01</span>
                     </a>
                 </li>


                 <li class="menu-item">


                     <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                         <span class="menu-icon"><i class="bx bx-file"></i></span>
                         <span class="menu-text"> Services </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="menuExpages">
                         <ul class="sub-menu">

                             <li class="menu-item">
                                 <a href="add_services.php" class="menu-link">
                                     <span class="menu-text">Add Services</span>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="manage_services.php" class="menu-link">
                                     <span class="menu-text">Manage Services</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="menu-item">
    <a href="#menuExpages" 
       data-bs-toggle="collapse" 
       role="button"
       aria-expanded="false"
       class="menu-link waves-effect waves-light">

        <span class="menu-icon"><i class="bx bxs-eraser"></i></span>
        <span class="menu-text"> Pages </span>
        <span class="menu-arrow"></span>
    </a>

    <div class="collapse" id="menuExpages">
        <ul class="sub-menu">

            <li class="menu-item">
                <a href="about_us.php" class="menu-link">
                    <span class="menu-text">Update About Us</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="contact_us.php" class="menu-link">
                    <span class="menu-text">Contact Us</span>
                </a>
            </li>

        </ul>
    </div>
</li>

                

                 <li class="menu-item">
                     <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                         <span class="menu-icon"><i class="bx bx-table"></i></span>
                         <span class="menu-text"> Appointment </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="menuTables">
                         <ul class="sub-menu">

                             <li class="menu-item">
                                 <a href="all_appointment.php" class="menu-link">
                                     <span class="menu-text">All Appointment</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                       <div class="collapse" id="menuTables">
                         <ul class="sub-menu">

                             <li class="menu-item">
                                 <a href="all_appointment.php" class="menu-link">
                                     <span class="menu-text">New Appointment</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                       <div class="collapse" id="menuTables">
                         <ul class="sub-menu">

                             <li class="menu-item">
                                 <a href="all_appointment.php" class="menu-link">
                                     <span class="menu-text">Accepted Appointment</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                       <div class="collapse" id="menuTables">
                         <ul class="sub-menu">

                             <li class="menu-item">
                                 <a href="all_appointment.php" class="menu-link">
                                     <span class="menu-text">Rejected Appointment</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="menu-item">
                        <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-doughnut-chart"></i></span>
                            <span class="menu-text">Enquiry</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuCharts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="charts-apex.html" class="menu-link">
                                        <span class="menu-text"> Read Enquiry</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-morris.html" class="menu-link">
                                        <span class="menu-text"> Unread Enquiry</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </li>
                     <li class="menu-item">
                        <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                            <span class="menu-text"> Customer List</span>
                            <span class="menu-arrow"></span>
                        </a>
                        
                    </li>
                      <li class="menu-item">
                        <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                            <span class="menu-text"> Reports</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMaps">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="maps-google.html" class="menu-link">
                                        <span class="menu-text">Between dates reports</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="maps-vector.html" class="menu-link">
                                        <span class="menu-text">Sales reports</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                      

             </ul>
         </div>
     </div>