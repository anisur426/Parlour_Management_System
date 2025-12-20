<?php
include('inc/db_config.php');
if (isset($_GET['delid'])) {
    $sid = intval($_GET['delid']);
    mysqli_query($con, "DELETE FROM tblcontact WHERE ID='$sid'");
    echo "<script>alert('Data Deleted Successfully');</script>";
    echo "<script>window.location.href='readenq.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Google Maps | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                <h4 class="page-title mb-0">Manage Unread Enquiry</h4>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Enquiry</a></li>
                                        <li class="breadcrumb-item active">Manage Unread Enquiry</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mb-3">Manage Read Enquiry</h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Enquiry Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM tblcontact where IsRead = '1'");

                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['ID'] ?></td>
                                                        <td><?php echo $row['FirstName'] . ' ' . $row['LastName']; ?></td>
                                                        <td><?php echo $row['Email']; ?></td>
                                                        <td>
                                                            <span class="badge bg-primary">
                                                                <?php echo $row['EnquiryDate']; ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <a href="view-enquiry.php?viewid=<?php echo $row['ID']; ?>"
                                                                class="btn btn-sm btn-info">
                                                                View
                                                            </a>

                                                            <a href="readenq.php?delid=<?php echo $row['ID']; ?>"
                                                                class="btn btn-sm btn-danger"
                                                                onclick="confirm('Are you sure you want to delete?');">
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php

                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Footer Start -->
                    <?php include('inc/footer.php') ?>
                    <!-- end Footer -->

                </div>
                <!-- End Page content -->


            </div>
            <!-- END wrapper -->

            <!-- App js -->
            <script src="assets/js/vendor.min.js"></script>
            <script src="assets/js/app.js"></script>

            <!-- google maps api -->
            <script src="https://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>

            <!-- gmap js-->
            <script src="assets/libs/gmaps/gmaps.min.js"></script>

            <!-- Demo js-->
            <script src="assets/js/pages/google-maps.js"></script>


</body>

</html>