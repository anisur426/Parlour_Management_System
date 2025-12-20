<?php include_once('inc/db_config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Invoice | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                <h4 class="page-title mb-0">Invoice</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a></li>
                                        <li class="breadcrumb-item active">Invoice</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row my-3">
                        <div class="col-12">
                            <!-- Logo & title -->
                            <div class="clearfix">
                                <div class="float-start">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </div>
                                <div class="float-end">
                                    <h4 class="m-0 d-print-none">Invoice</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <h5 class="mb-2">Hello, Stanley Jones</h5>
                                        <p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
                                            promises to provide high quality products for you as well as outstanding
                                            customer service for every transaction. </p>
                                    </div>

                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mt-3 float-end">
                                        <p class="mb-2"><span class="font-weight-medium">Order Date : </span> <span class="float-end"> &nbsp;&nbsp;&nbsp;&nbsp; Jan 17, 2016</span></p>
                                        <p class="mb-2"><span class="font-weight-medium">Order Status : </span> <span class="float-end"><span class="badge bg-danger">Unpaid</span></span></p>
                                        <p><span class="font-weight-medium">Order No. : </span> <span class="float-end">000028 </span></p>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <h6>Billing Address</h6>
                                    <address>
                                        Stanley Jones<br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div> <!-- end col -->

                                <div class="col-md-6">
                                    <div class="text-md-end">
                                        <h6>Shipping Address</h6>
                                        <address>
                                            Stanley Jones<br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <?php
                                    
                                    $sql = "SELECT * FROM tblinvoice WHERE () "

                                    ?>
                                    <div class="table-responsive">
                                        <table class="table mt-4 table-centered">
                                            <thead class="">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item</th>
                                                    <th style="width: 10%">Hours</th>
                                                    <th style="width: 10%">Hours Rate</th>
                                                    <th style="width: 10%" class="text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <h5>Web Design</h5>
                                                        <p class="text-muted mb-0">2 Pages static website - my website</p>
                                                    </td>
                                                    <td>22</td>
                                                    <td>$30</td>
                                                    <td class="text-end">$660.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <h5>Software Development</h5>
                                                        <p class="text-muted mb-0">Invoice editor software - AB'c Software</p>
                                                    </td>
                                                    <td>112.5</td>
                                                    <td>$35</td>
                                                    <td class="text-end">$3937.50</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="clearfix pt-5">
                                        <h6 class="text-muted">Notes:</h6>

                                        <small class="text-muted">
                                            All accounts are to be paid within 7 days from receipt of
                                            invoice. To be paid by cheque or credit card or direct payment
                                            online. If account is not paid within 7 days the credits details
                                            supplied as confirmation of work undertaken will be charged the
                                            agreed quoted fee noted above.
                                        </small>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="float-end">
                                        <p><span class="font-weight-medium">Sub-total:</span> <span class="float-end">$4597.50</span></p>
                                        <p><span class="font-weight-medium">Discount (10%):</span> <span class="float-end"> &nbsp;&nbsp;&nbsp; $459.75</span></p>
                                        <h3>$4137.75 USD</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="mt-4 mb-1">
                                <div class="text-end d-print-none">
                                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer me-1"></i> Print</a>
                                    <a href="#" class="btn btn-info waves-effect waves-light">Submit</a>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include('inc/footer.php'); ?>
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