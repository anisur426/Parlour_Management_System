<?php
include_once('inc/db_config.php');

$message = '';
$messageType = '';

if (isset($_POST['submit'])) {

    $sername = trim($_POST['sername']);
    $serdesc = trim($_POST['serdesc']);
    $cost    = trim($_POST['cost']);

    /* ===== IMAGE UPLOAD ===== */
    $image_name = $_FILES['image']['name'];
    $temp_name  = $_FILES['image']['tmp_name'];
    $ext        = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $allowed    = ['jpg', 'jpeg', 'png', 'webp'];

    if (!in_array($ext, $allowed)) {

        $message = "Invalid image format";
        $messageType = "danger";
    } else {

        $newImage = uniqid('service_', true) . '.' . $ext;
        $folder   = "uploads/" . $newImage;

        if (move_uploaded_file($temp_name, $folder)) {

            $sql = "INSERT INTO tblservices
                    (ServiceName, ServiceDescription, Cost, Image, CreationDate)
                    VALUES (?, ?, ?, ?, NOW())";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssds", $sername, $serdesc, $cost, $newImage);

            if ($stmt->execute()) {
                header("Location: manage_services.php?added=1");
                exit();
            } else {
                $message = "Database error";
                $messageType = "danger";
            }
        } else {
            $message = "Image upload failed";
            $messageType = "danger";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Add Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet">
    <script src="assets/js/config.js"></script>

    <style>
        .page-wrapper {
            padding: 1.25rem;
        }

        .service-card {
            max-width: 760px;
            margin: auto;
        }

        .service-card .card-body {
            padding: 1.5rem;
        }

        .service-card .form-label {
            margin-bottom: 0.25rem;
            font-weight: 500;
        }

        .service-card .form-control {
            padding: 0.45rem 0.6rem;
        }

        .service-card .mb-3 {
            margin-bottom: 0.75rem !important;
        }

        .btn-submit {
            min-width: 160px;
        }
    </style>
</head>

<body>

    <div class="layout-wrapper">

        <?php include('inc/left_Sidebar.php'); ?>

        <div class="page-content">

            <?php include('inc/topbar.php'); ?>

            <div class="container-fluid page-wrapper">

                <div class="card service-card">
                    <div class="card-header">
                        <h5 class="mb-0">Add Parlour Service</h5>
                    </div>

                    <div class="card-body">

                        <?php if ($message): ?>
                            <div class="alert alert-<?= $messageType ?> py-2">
                                <?= htmlspecialchars($message) ?>
                            </div>
                        <?php endif; ?>

                        <form method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label class="form-label">Service Name</label>
                                <input type="text" name="sername" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Service Description</label>
                                <textarea name="serdesc" rows="3" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cost</label>
                                <input type="number" step="0.01" name="cost" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Service Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                            </div>

                            <div class="mt-3">
                                <button type="submit" name="submit" class="btn btn-primary btn-submit">
                                    Add Service
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <?php include('inc/footer.php'); ?>

        </div>

    </div>

    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>