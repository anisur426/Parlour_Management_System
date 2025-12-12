<?php include("inc/db_config.php"); ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Form Elements | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <?php include('inc/left_Sidebar.php'); ?>


        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <?php include('inc/topbar.php'); ?>
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">Update About Us</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Update About Us</h4>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-2">
                                                <form class="form-horizontal" role="form">
                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Page Title</label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="simpleinput" class="form-control" value="about as...">
                                                        </div>
                                                    </div>

                                                    <div class="mb-2 row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Page Description</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <div> Admin Panel </div>

                                                        </div>

                                                    </div>


                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->
                                </div>
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
















                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>







                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include("inc/footer.php"); ?>
                <!-- end Footer -->
            </div>
            <!-- End Page content -->


        </div>
        <!-- END wrapper -->

        <!-- App js -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.js"></script>

</body>

</html>