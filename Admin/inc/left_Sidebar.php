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
                     <a href="forms-elements.php" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                         <span class="menu-icon"><i class="bx bxs-eraser"></i></span>
                         <span class="menu-text"> Forms </span>
                         <span class="menu-arrow"></span>
                     </a>

                 </li>

                 <li class="menu-item">
                     <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                         <span class="menu-icon"><i class="bx bx-table"></i></span>
                         <span class="menu-text"> Tables </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="menuTables">
                         <ul class="sub-menu">

                             <li class="menu-item">
                                 <a href="tables-datatables.php" class="menu-link">
                                     <span class="menu-text">Data Tables</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>





             </ul>
         </div>
     </div>