<?php include("inc/db_config.php"); ?>

<?php
$message = "";

// Fetch the aboutus page
$query = mysqli_query($conn, "SELECT * FROM tblpage WHERE PageType='aboutus' LIMIT 1");
$row = mysqli_fetch_assoc($query);

// Update handler
if (isset($_POST['update'])) {
  $PageTitle = $_POST['pagetitle'];
  $PageDescription = $_POST['pagedes'];

  $updateQuery = "UPDATE tblpage SET PageTitle='$PageTitle', PageDescription='$PageDescription' WHERE PageType='aboutus'";
  if (mysqli_query($conn, $updateQuery)) {
    $message = "Page Updated Successfully";
    // Refresh row data
    $query = mysqli_query($conn, "SELECT * FROM tblpage WHERE PageType='aboutus' LIMIT 1");
    $row = mysqli_fetch_assoc($query);
  } else {
    $message = "Page Not Updated";
  }
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <title>About Us | Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
</head>

<body>

  <div class="layout-wrapper">
    <?php include('inc/left_Sidebar.php'); ?>
    <div class="page-content">
      <?php include('inc/topbar.php'); ?>

      <div class="px-3">
        <div class="container-fluid">

          <div class="py-3 py-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <h4 class="page-title mb-0">About Us</h4>
              </div>
              <div class="col-lg-6">
                <div class="d-none d-lg-block">
                  <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="header-title">Edit About Us</h4>

                  <?php if ($message != "") { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <i class="mdi mdi-check-all me-2"></i>
                      <?php echo $message; ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php } ?>

                  <form class="form-horizontal" method="post">
                    <div class="mb-2 row">
                      <label class="col-md-2 col-form-label" for="pagetitle">Page Title</label>
                      <div class="col-md-10">
                        <input type="text"
                          id="pagetitle"
                          class="form-control"
                          name="pagetitle"
                          value="<?php echo htmlspecialchars($row['PageTitle']); ?>">
                      </div>
                    </div>

                    <div class="mb-2 row">
                      <label class="col-md-2 col-form-label" for="pagedes">Page Description</label>
                      <div class="col-md-10">
                        <textarea class="form-control"
                          id="pagedes"
                          name="pagedes"
                          rows="5"><?php echo htmlspecialchars($row['PageDescription']); ?></textarea>
                      </div>
                    </div>

                    <div class="mb-2 row">
                      <div class="col-md-10 offset-md-2">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>

        </div>
        <?php include("inc/footer.php"); ?>
      </div>
    </div>
  </div>

  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/js/app.js"></script>

</body>

</html>