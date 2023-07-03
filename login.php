<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Aplikasi Buku Induk</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        .background1 {
            background-image: url("img/background.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 60% 30%;
        }
    </style>
</head>

<body>
    <div class="page login-page background1">
        <div class="container">
            <div class="form-outer text-center d-flex align-items-center">
                <div class="form-inner" style="margin:auto;">
                    <img src="img/logo-sekolah.png" width="50%" height="22%">
                    <?php
                    include("koneksi.php");
                    $la = mysqli_query($connect, "select * from tbprofil ");
                    $da = $la->fetch_array(MYSQLI_ASSOC);
                    ?>
                    <!-- <div class="logo text-uppercase"><strong class="text-success">Aplikasi</strong></div> -->

                    <div class="logo text-uppercase" style="margin-top: 20px;">
                        <strong style="color: black;">
                            Buku Induk Login
                        </strong>
                    </div>
                    <!-- <div class="logo text-uppercase text-wrap"> <strong class="text-warning outer-text"><?= strtoupper($da['nama_Sekolah']) ?></strong> </div> -->
                    <form method="post" action="proses_login.php" class="text-left form-validate">
                        <div class="form-group-material">
                            <input id="login-username" type="text" name="user" required data-msg="Please enter your username" class="input-material" style="border-bottom: 2px solid black;">
                            <label for="login-username" class="label-material text-center" style="color: black;">Username</label>
                        </div>
                        <div class="form-group-material">
                            <input id="login-password" type="password" name="pass" required data-msg="Please enter your password" class="input-material" style="border-bottom: 2px solid black;">
                            <label for="login-password" class="label-material text-center" style="color: black;">Password</label>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary" style="min-width:100% !important; background-color: black;" value="Masuk">
                            <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
</body>

</html>