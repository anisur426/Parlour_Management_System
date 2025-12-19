<?php include_once('inc/db_config.php'); ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Form Advanced | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <?php include("inc/left_Sidebar.php"); ?>


        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <?php include("inc/topbar.php"); ?>
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">Update Contact Us</h4>
                            </div>
                                            <php
                        $WE=66;
                        print_r($we)
                        ?>
 
                              
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                       
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Update Contact Us</h4>
                                <form method="post" action="">
                           

                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="mb-3">
                                                <label class="form-label">Page Title</label>
                                                <input type="text" id="selectize-tags" value="Contact Us">
                                            </div>
                                        </div>


                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="text" id="eml" value="info@gmail.com">


                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="mb-3">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="tel" id="selectize-confirm" value="7896541236">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="mb-3 mb-lg-0">
                                                <label class="form-label">Timing</label>
                                                <input type="text" class="selectize-close-btn" value="80:30 am to 10:30 pm">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="mb-3 mb-lg-0">
                                                <label class="form-label">Page Description</label>
                                                <textarea class="form-control" id="example-textarea" name="pagedes" rows="5" value="890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)">
                                                             </textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                                    </div>
         
                                </form>





                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include("inc/footer.php"); ?>
            <!-- end Footer -->

        </div>
        <!-- End Page content -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <!-- App js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Plugins Js -->
    <script src="assets/libs/selectize/js/standalone/selectize.min.js"></script>
    <script src="assets/libs/mohithg-switchery/switchery.min.js"></script>
    <script src="assets/libs/multiselect/js/jquery.multi-select.js"></script>
    <script src="assets/libs/jquery.quicksearch/jquery.quicksearch.min.js"></script>
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- Demo js -->
    <script src="assets/js/pages/form-advanced.js"></script>

</body>

</html>