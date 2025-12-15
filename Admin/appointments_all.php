<?php
include_once('inc/db_config.php');
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>All Appointments | Dashtrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet">
    <script src="assets/js/config.js"></script>
</head>

<body>
    <div class="layout-wrapper">

        <?php include('inc/left_Sidebar.php'); ?>
        <div class="page-content">
            <?php include('inc/topbar.php'); ?>

            <div class="container-fluid pt-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">All Appointments</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Apt Number</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = $conn->query("SELECT * FROM tblbook ORDER BY BookingDate DESC");
                                $sl = 1;
                                while ($row = $query->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>{$sl}</td>";
                                    echo "<td>{$row['UserID']}</td>";
                                    echo "<td>{$row['AptNumber']}</td>";
                                    echo "<td>{$row['AptDate']}</td>";
                                    echo "<td>{$row['AptTime']}</td>";
                                    echo "<td>{$row['Message']}</td>";
                                    echo "<td>{$row['Status']}</td>";
                                    echo "<td>{$row['Remark']}</td>";
                                    $sl++;
                                }
                                ?>
                            </tbody>
                        </table>
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