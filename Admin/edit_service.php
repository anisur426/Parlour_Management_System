<?php include_once('inc/db_config.php'); 
session_start ();
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
    <style>
        .service-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            color: #ff4d79;
        }

        .service-box {
            width: 780px;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .form-title h4 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
            color: #e63b65;
        }

        /* Button Design */
        .btn-add {
            width: 20%;
            background-color: #ff4d79;
            /* pink */
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-add:hover {
            background-color: #e63b65;
        }
    </style>
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

            <div class="container-fluid service-wrapper">

                <div class="service-box">

                    <div class="form-title">
                        <h4>Parlour Services</h4>
                    </div>

                    <form method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Service Name</label>
                            <input type="text" class="form-control" name="sername" required>
                        </div>

                        <div class="form-group">
                            <label>Service Description</label>
                            <textarea class="form-control" name="serdesc" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Cost</label>
                            <input type="text" class="form-control" name="cost" required>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>

                        <!-- ✅ Button class change -->
                        <button type="submit" name="submit" class="btn-add">
                            Update Service
                        </button>

                    </form>

                </div>

            </div>
            <?php
if (isset($_POST['submit'])) {

    $id      = $_GET['id'];  
    $sername = $_POST['sername'];
    $serdesc = $_POST['serdesc'];
    $cost    = $_POST['cost'];

    $image_name = $_FILES['image']['name'];
    $temp_name  = $_FILES['image']['tmp_name'];
    $folder     = "uploads/" . $image_name;

    move_uploaded_file($temp_name, $folder);

    $sql = "UPDATE tblservices SET 
                ServiceName='$sername',
                ServiceDescription='$serdesc',
                Cost='$cost',
                Image='$image_name'
            WHERE id='$id'";

    if ($conn->query($sql)) {
        $_SESSION['msg'] = "✅ Service Successfully Updated!";
        header("Location: add_services.php");
        exit;
    } else {
        $_SESSION['msg'] = "❌ Service Update Failed!";
        header("Location: add_services.php");
        exit;
    }
}
?>


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