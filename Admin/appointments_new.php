<?php
include_once('inc/db_config.php');

// Handle accept/reject actions
if (isset($_GET['action'], $_GET['id'])) {
  $id = (int)$_GET['id'];
  $action = $_GET['action'];

  if ($action === 'accept') {
    $stmt = $conn->prepare("UPDATE tblbook SET Status='Accepted', Remark='Accepted by admin', RemarkDate=NOW() WHERE ID=?");
  } elseif ($action === 'reject') {
    $stmt = $conn->prepare("UPDATE tblbook SET Status='Rejected', Remark='Rejected by admin', RemarkDate=NOW() WHERE ID=?");
  }
  if (isset($stmt)) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: new_appointments.php");
    exit();
  }
}

// New appointments
$statusFilter = "Pending";
$pageTitle = "New Appointments";
$rowClass = "table-warning"; // yellow row
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
  <meta charset="utf-8">
  <title><?= $pageTitle ?> | Dashtrap</title>
  <link href="assets/css/style.min.css" rel="stylesheet">
  <link href="assets/css/icons.min.css" rel="stylesheet">
</head>

<body>
  <div class="layout-wrapper">

    <?php include('inc/left_Sidebar.php'); ?>

    <div class="page-content">
      <?php include('inc/topbar.php'); ?>

      <div class="container-fluid pt-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0"><?= $pageTitle ?></h5>
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
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $stmt = $conn->prepare("SELECT * FROM tblbook WHERE Status=? ORDER BY BookingDate DESC");
                $stmt->bind_param("s", $statusFilter);
                $stmt->execute();
                $result = $stmt->get_result();
                $sl = 1;

                if ($result->num_rows > 0):
                  while ($row = $result->fetch_assoc()):
                ?>
                    <tr class="<?= $rowClass ?>">
                      <td><?= $sl ?></td>
                      <td><?= $row['UserID'] ?></td>
                      <td><?= $row['AptNumber'] ?></td>
                      <td><?= $row['AptDate'] ?></td>
                      <td><?= $row['AptTime'] ?></td>
                      <td><?= $row['Message'] ?></td>
                      <td><span class="badge bg-warning"><?= $row['Status'] ?></span></td>
                      <td><?= $row['Remark'] ?></td>
                      <td>
                        <!-- Accept/Reject buttons -->
                        <a href="?action=accept&id=<?= $row['ID'] ?>" class="btn btn-sm btn-success" onclick="return confirm('Accept this appointment?')">Accept</a>
                        <a href="?action=reject&id=<?= $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Reject this appointment?')">Reject</a>
                      </td>
                    </tr>
                  <?php
                    $sl++;
                  endwhile;
                else:
                  ?>
                  <tr>
                    <td colspan="9" class="text-center text-muted">No appointments found.</td>
                  </tr>
                <?php endif; ?>
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