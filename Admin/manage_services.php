<?php
include_once('inc/db_config.php');

// ✅ Delete Service
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM tblservices WHERE ID='$id'");
    header("location:manage_services.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Manage Services</title>
    <link href="assets/css/style.min.css" rel="stylesheet">
</head>

<body>

    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Manage Services</h3>

            <div class="table-responsive widget-shadow">
                <h4>Update Services:</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>SL No.</th>
                        <th>Service Name</th>
                        <th>Service Price</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM tblservices");
                    $sl = 1;

                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $sl; ?></td>
                            <td><?php echo $row['ServiceName']; ?></td>
                            <td><?php echo $row['Cost']; ?></td>
                            <td><?php echo $row['CreationDate']; ?></td>
                            <td>
                                <!-- ✅ Edit Button -->
                                <a href="edit_service.php?id=<?php echo $row['ID']; ?>"
                                    class="btn btn-sm btn-primary">
                                    Edit
                                </a>

                                <!-- ✅ Delete Button -->
                                <a href="manage_services.php?del=<?php echo $row['ID']; ?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('delete this service?');">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php
                        $sl++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>