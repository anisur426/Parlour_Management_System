<?php
include_once("inc/db_config.php");
session_start();

/* =====================
   FORCE LIGHT MODE
===================== */
$_SESSION['theme'] = 'light';

/* =====================
   HANDLE LOGIN
===================== */
$error = '';

if (isset($_POST['login'])) {

    $email    = trim($_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM tbladmin WHERE Email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $row = $result->fetch_assoc();

        $_SESSION['admin_id'] = $row['ID'];
        $_SESSION['name']     = $row['AdminName'];
        $_SESSION['email']    = $row['Email'];

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en"
    data-bs-theme="light"
    data-menu-color="brand"
    data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- CSS -->
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet">

    <!-- FORCE LIGHT MODE (OVERRIDE) -->
    <style>
        html[data-bs-theme="dark"] {
            color-scheme: light;
        }
    </style>

    <script src="assets/js/config.js"></script>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">

                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center auth-logo mb-4">
                            <img src="assets/images/logo-dark.png" height="22">
                        </div>

                        <?php if ($error): ?>
                            <div class="alert alert-danger text-center">
                                <?= htmlspecialchars($error) ?>
                            </div>
                        <?php endif; ?>

                        <form method="post" autocomplete="off">

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input name="email" type="email"
                                    class="form-control"
                                    required
                                    placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input name="password" type="password"
                                    class="form-control"
                                    required
                                    placeholder="Enter your password">
                            </div>

                            <div class="d-grid">
                                <button name="login" class="btn btn-primary">
                                    Log In
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <p class="text-white-50 mb-1">
                        <a href="forgot_password.php" class="text-white-50">Forgot your password?</a>
                    </p>
                    <p class="text-white-50">
                        Don’t have an account?
                        <a href="register.php" class="text-white fw-semibold">Sign Up</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>