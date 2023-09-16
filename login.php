<!-- Cek Login Session -->
<?php
    session_start();

    if (isset($_SESSION['profesi'])) {
        if ($_SESSION['profesi'] == "admin") header("location: views/index-admin.php");
        elseif ($_SESSION['profesi'] == "Dokter Umum") header("location: views/index-umum.php");
        elseif ($_SESSION['profesi'] == "admin_poliklinik") header("location: views/index-poliklinik.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Klinik Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <style>
        #auth #auth-right{
            background:url(assets/images/poliklinik.jpeg), linear-gradient(90deg,#2d499d,#3f5491);
            background-size: cover;
            height:100%;
        }
    </style>
</head>
<body>
    <div id="auth">      
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
                    </div>

                    <h1 class="auth-title">Masuk</h1>

                    <form action="controller/aksi.php?aksi=login" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="uname" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Masuk</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>
    </div>
</body>
</html>
