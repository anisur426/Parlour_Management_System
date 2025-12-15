<?php
include_once('inc/db_config.php');

/* ===== DELETE SERVICE ===== */
if (isset($_GET['del'])) {
    $id = intval($_GET['del']);

    $stmt = $conn->prepare("DELETE FROM tblservices WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: manage_services.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8">
    <title>Manage Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet">
    <script src="assets/js/config.js"></script>

    <style>
        .page-wrapper {
            padding: 1.25rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .service-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid #eee;
        }

        .action-btns .btn {
            padding: 0.25rem 0.5rem;
        }
    </style>
</head>

<body>

    <div class="layout-wrapper">

        <!-- Sidebar -->
        <?php include('inc/left_Sidebar.php'); ?>

        <div class="page-content">

            <!-- Topbar -->
            <?php include('inc/topbar.php'); ?>

            <div class="container-fluid page-wrapper">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Manage Services</h5>

                        <a href="add_services.php" class="btn btn-sm btn-primary">
                            <i class="bx bx-plus"></i> Add Service
                        </a>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th width="50">#</th>
                                        <th width="80">Image</th>
                                        <th>Service Name</th>
                                        <th width="120">Cost</th>
                                        <th width="160">Created</th>
                                        <th width="140">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM tblservices ORDER BY ID DESC");
                                    $sl = 1;

                                    if (mysqli_num_rows($query) > 0):
                                        while ($row = mysqli_fetch_assoc($query)):

                                            $imagePath = (!empty($row['Image']) && file_exists("uploads/" . $row['Image']))
                                                ? "uploads/" . $row['Image']
                                                : "assets/images/no-image.png";
                                    ?>
                                            <tr>
                                                <td><?= $sl++; ?></td>

                                                <td>
                                                    <a href="<?= $imagePath; ?>" target="_blank">
                                                        <img src="<?= $imagePath; ?>" class="service-img" alt="">
                                                    </a>
                                                </td>

                                                <td><?= htmlspecialchars($row['ServiceName']); ?></td>

                                                <td>৳ <?= number_format($row['Cost'], 2); ?></td>

                                                <td><?= date('d M Y', strtotime($row['CreationDate'])); ?></td>

                                                <td class="action-btns">
                                                    <a href="edit_service.php?id=<?= $row['ID']; ?>"
                                                        class="btn btn-sm btn-outline-primary"
                                                        title="Edit">
                                                        <i class="bx bx-edit"></i>
                                                    </a>

                                                    <a href="manage_services.php?del=<?= $row['ID']; ?>"
                                                        class="btn btn-sm btn-outline-danger"
                                                        title="Delete"
                                                        onclick="return confirm('Delete this service permanently?');">
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        endwhile;
                                    else:
                                        ?>
                                        <tr>
                                            <td colspan="6" class="text-center py-4 text-muted">
                                                No services found
                                            </td>
                                        </tr>
                                    <?php endif; ?>

                                </tbody>
                            </table>

                        </div>
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