<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Log In | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
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

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
 <div id ="page-wapper">
    <div class="main-page">
        <div class="tables">
            <h3 class="title1">Manage Services</h3>
            <div class="table-responsiv bs-example widget-shadow">
                <h4>Update Services:</h4>
                <table class="table table-bordered">
                    
                        <tr>
                            <th>SL No.</th>
                            <th>Service Name</th>
                            <th>Service Price</th>
                            <th>Creation date</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($conn,"SELECT * FROM tblservices");
                      $conn=1;
                      while($row=mysqli_fetch_array($ret)){
                        

                      }
                        ?>
                        <tr>
                            <th scope="row"><?php echo $conn;?></th>
                            <td><?php echo $row ['ServiceName']; ?></td>
                            <td><?php echo $row['Cost'] ;?></td>
                            <td><?php echo $row ['CreationDate'] ;?></td>
                            <td><a href="edit_.php"><?php  ?></a></td>
                            <td></td>

                        </tr>
                   

                </table>
            </div>
        </div>
    </div>
 </div>

    <!-- App js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>