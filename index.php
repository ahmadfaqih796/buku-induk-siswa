<?php
session_start();
include "koneksi.php";
error_reporting(0);

if (isset($_SESSION['u_abis'])) {
    $user = $_SESSION['u_abis'];
    $pass = $_SESSION['p_abis'];
    $nama = $_SESSION['n_abis'];
    $id = $_SESSION['i_abis'];
    $level = $_SESSION['l_abis'];
    if ($level == "Wali Kelas") {
        $lwakel = mysqli_query($connect, "select * from tbwali_kelas where username = '$user'");
        $dwakel = $lwakel->fetch_array(MYSQLI_ASSOC);
    }
} else {
    echo "<script>alert('Silahkan Login terlebih dahulu!')
	document.location='login.php'</script>";
}
$bulan = date("m");
if ($bulan >= 7) {
    $th_pelajaran = date("Y") . "/" . (date("Y") + 1);
} else {
    $th_pelajaran = (date("Y") - 1) . "/" . date("Y");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Buku Induk Siswa</title>
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
    <style>
        .nav-tabs a {
            padding: 10px;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav-tabs {
            border-bottom: 1px solid #ddd
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px
        }

        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0
        }

        .nav-tabs>li>a:hover {
            border-color: #eee #eee #ddd
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: #555;
            cursor: default;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom-color: transparent
        }

        .nav-tabs.nav-justified {
            width: 100%;
            border-bottom: 0
        }

        .nav-tabs.nav-justified>li {
            float: none
        }

        .nav-tabs.nav-justified>li>a {
            margin-bottom: 5px;
            text-align: center
        }

        .nav-tabs.nav-justified>.dropdown .dropdown-menu {
            top: auto;
            left: auto
        }

        @media (min-width:768px) {
            .nav-tabs.nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-tabs.nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs.nav-justified>li>a {
            margin-right: 0;
            border-radius: 4px
        }

        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:focus,
        .nav-tabs.nav-justified>.active>a:hover {
            border: 1px solid #ddd
        }

        @media (min-width:768px) {
            .nav-tabs.nav-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs.nav-justified>.active>a,
            .nav-tabs.nav-justified>.active>a:focus,
            .nav-tabs.nav-justified>.active>a:hover {
                border-bottom-color: #fff
            }
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li>a {
            border-radius: 4px
        }

        .nav-pills>li+li {
            margin-left: 2px
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            color: #fff;
            background-color: #337ab7
        }

        .nav-stacked>li {
            float: none
        }

        .nav-stacked>li+li {
            margin-top: 2px;
            margin-left: 0
        }

        .nav-justified {
            width: 100%
        }

        .nav-justified>li {
            float: none
        }

        .nav-justified>li>a {
            margin-bottom: 5px;
            text-align: center
        }

        .nav-justified>.dropdown .dropdown-menu {
            top: auto;
            left: auto
        }

        @media (min-width:768px) {
            .nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs-justified {
            border-bottom: 0
        }

        .nav-tabs-justified>li>a {
            margin-right: 0;
            border-radius: 4px
        }

        .nav-tabs-justified>.active>a,
        .nav-tabs-justified>.active>a:focus,
        .nav-tabs-justified>.active>a:hover {
            border: 1px solid #ddd
        }

        @media (min-width:768px) {
            .nav-tabs-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs-justified>.active>a,
            .nav-tabs-justified>.active>a:focus,
            .nav-tabs-justified>.active>a:hover {
                border-bottom-color: #fff
            }
        }

        .row {
            margin-top: 3%;
        }

        .th-pel {
            font-size: 26px;
            color: #fff;
            font-weight: bold;
            margin-left: 10px;
        }

        legend {
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            font-weight: bold;
            padding-bottom: 5px;
        }

        .bagi-kelas {
            border-left: 1px solid #fff;
            padding: 30px 0px;
            color: #fff;
            background: #f3f3f3;
            margin-top: 2px;
        }

        .bagi-kelas a {
            text-decoration: none;
        }

        .bagi-kelas:hover {
            background: #e6e6e6;
        }
    </style>
    <link rel="stylesheet" href="datepicker/css/datepicker.css">
    <script src="datepicker/js/bootstrap.js"></script>
    <script src="datepicker/js/jquery.js"></script>

    <style>
        .datepicker {
            z-index: 1151;
        }
    </style>
    <script>
        $(function() {
            $("#tanggal").datepicker({
                format: 'yyyy/dd/mm'
            });
        });
        $(function() {
            $("#tanggali").datepicker({
                format: 'yyyy/dd/mm'
            });
        });
        $(function() {
            $("#tanggala").datepicker({
                format: 'yyyy/dd/mm'
            });
        });
        $(function() {
            $("#tanggals").datepicker({
                format: 'yyyy/dd/mm'
            });
        });
    </script>
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/Buku.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>

<body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <!-- Sidebar Header    -->
            <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center"><img src="img/Logo.png" alt="person" class="img-fluid rounded-circle">
                    <h2 class="h5">
                        <?= $nama; ?>
                    </h2><span>
                        <?= $level; ?>
                    </span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.php?hal=" class="brand-small text-center">
                        <strong>AB</strong><strong class="text-primary">IS</strong></a></div>
            </div>
            <!-- Sidebar Navigation Menus-->
            <?php if ($level == "Admin") { ?>
                <div class="main-menu">
                    <h5 class="sidenav-heading">Master</h5>
                    <ul id="side-main-menu" class="side-menu list-unstyled">
                        <li <?= getAktif("data_admin"); ?>><a href="index.php?hal=data_admin"> <i class="icon-user"></i>Admin</a>
                        </li>
                        <li <?= getAktif("data_siswa"); ?>><a href="index.php?hal=data_siswa"> <i class="icon-user"></i>Siswa</a>
                        </li>
                        <li <?= getAktif("data_wakel"); ?>><a href="index.php?hal=data_wakel"> <i class="icon-user"></i>Wali
                                Kelas</a></li>
                        <li <?= getAktif("data_pelajaran"); ?>><a href="index.php?hal=data_pelajaran"> <i class="icon-interface-windows"></i>Pelajaran</a></li>
                        <li <?= getAktif("data_kelas"); ?>><a href="index.php?hal=data_kelas"> <i class="icon-home"></i>Kelas</a>
                        </li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">data</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li> <a href="index.php?hal=buku_induk"> <i class="fa fa-book"> </i>Buku Induk</a></li>
                    </ul>
                </div>
                <div class="lap-menu">
                    <h5 class="sidenav-heading">Pengaturan</h5>
                    <ul id="side-lap-menu" class="side-menu list-unstyled">
                        <li> <a href="index.php?hal="> <i class="fa fa-book"> </i>Profil Sekolah</a></li>
                    </ul>
                </div>
            <?php } ?>
            <?php if ($level == "Kurikulum") { ?>
                <div class="main-menu">
                    <h5 class="sidenav-heading">Master</h5>
                    <ul id="side-main-menu" class="side-menu list-unstyled">
                        <li <?= getAktif("data_siswa"); ?>><a href="index.php?hal=data_siswa"> <i class="icon-user"></i>Siswa</a>
                        </li>
                        <li <?= getAktif("data_kelas"); ?>><a href="index.php?hal=data_kelas"> <i class="icon-home"></i>Kelas</a>
                        </li>
                        <li <?= getAktif("data_pelajaran"); ?>><a href="index.php?hal=data_pelajaran"> <i class="icon-interface-windows"></i>Pelajaran</a></li>
                    </ul>
                </div>
                <div class="Admin-menu">
                    <h5 class="sidenav-heading">Pengolahan</h5>
                    <ul id="side-Admin-menu" class="side-menu list-unstyled">
                        <li> <a href="index.php?hal=pembagian_kelas"> <i class="icon-home"> </i>Pembagian Kelas</a></li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">data</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li> <a href="index.php?hal=buku_induk"> <i class="fa fa-book"> </i>Buku Induk</a></li>
                    </ul>
                </div>

            <?php } ?>
            <?php if ($level == "TU") { ?>
                <div class="main-menu">
                    <h5 class="sidenav-heading">Master</h5>
                    <ul id="side-main-menu" class="side-menu list-unstyled">
                        <li <?= getAktif("data_siswa"); ?>><a href="index.php?hal=data_siswa"> <i class="icon-user"></i>Siswa</a>
                        </li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">data</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li> <a href="index.php?hal=buku_induk"> <i class="fa fa-book"> </i>Buku Induk</a></li>
                    </ul>
                </div>

            <?php } ?>
            <?php if ($level == "Wali Kelas") { ?>
                <div class="main-menu">
                    <h5 class="sidenav-heading">Master</h5>
                    <ul id="side-main-menu" class="side-menu list-unstyled">
                        <li <?= getAktif("buku_induk"); ?>><a href="index.php?hal=buku_induk"> <i class="icon-user"></i>Siswa</a>
                        </li>
                    </ul>
                </div>
                <div class="admin-menu">
                    <h5 class="sidenav-heading">Pengolahan</h5>
                    <ul id="side-admin-menu" class="side-menu list-unstyled">
                        <li> <a href="index.php?hal=input_nilai"> <i class="fa fa-pencil"> </i>Input Nilai Siswa</a></li>
                    </ul>
                </div>

            <?php } ?>
        </div>
    </nav>
    <div class="page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header">
                            <!-- <a id="toggle-btn" href="#" class="menu-btn">
                               <i class="icon-bars">
                               </i>
                           </a> -->
                            <a href="index.php?hal=" class="navbar-brand">
                                <div class="brand-text d-none d-md-inline-block"><span></span>
                                    <strong class="text-light">Aplikasi Buku Induk Siswa
                                        <span class="text-light">
                                            <?= $th_pelajaran; ?>
                                        </span>
                                    </strong>
                                </div>
                            </a>
                        </div>
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Log out-->
                            <li class="nav-item"><a href="logout.php" class="nav-link logout" onclick="return confirm('Anda yakin ingin keluar?')"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?hal=">Home</a></li>
                    <li class="breadcrumb-item active">
                        <?= getAddress(); ?>
                    </li>
                </ul>
            </div>
        </div>
        <section>
            <div class="container-fluid">
                <!-- Page Header-->
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        if (isset($_GET['hal']) and ($_GET['hal'] == "data_admin")) {
                            include "data_admin.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "tambah_data_admin")) {
                            include "tambah_admin.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "edit_admin")) {
                            include "edit_admin.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "data_siswa")) {
                            include "data_siswa.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "tambah_data_siswa")) {
                            include "tambah_siswa.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "edit_siswa")) {
                            include "edit_siswa.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "data_wakel")) {
                            include "data_wakel.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "pilih_kelas")) {
                            include "pilih_kelas.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "edit_wakel")) {
                            include "edit_wakel.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "tambah_wakel")) {
                            include "tambah_wakel.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "data_pelajaran")) {
                            include "data_pelajaran.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "tambah_data_pelajaran")) {
                            include "tambah_pelajaran.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "edit_pelajaran")) {
                            include "edit_pelajaran.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "data_tahun_pel")) {
                            include "data_tahun_pel.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "tambah_data_tahun_pel")) {
                            include "tambah_tahun_pel.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "edit_tahun_pel")) {
                            include "edit_tahun_pel.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "data_kelas")) {
                            include "data_kelas.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "tambah_data_kelas")) {
                            include "tambah_kelas.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "edit_kelas")) {
                            include "edit_kelas.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "pembagian_kelas")) {
                            include "pembagian_kelas.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "masuk_kelas")) {
                            include "masuk_kelas.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "info_kelas")) {
                            include "info_kelas.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "pilih_siswa")) {
                            include "pilih_siswa.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "input_nilai")) {
                            include "input_nilai.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "pilihsiswa")) {
                            include "pilih_siswa_untuk_nilai.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "buku_induk")) {
                            include "buku_induk.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "detail_buku_induk")) {
                            include "detail_buku_induk.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "detail_siswa")) {
                            include "detail_siswa.php";
                        } elseif (isset($_GET['hal']) and ($_GET['hal'] == "data_diri_bukuinduk")) {
                            include "data_diri_bukuinduk.php";
                        } else {
                            include "profil.php";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6  align-text-center">
                        <p> &copy; <i>Aplikasi Buku Induk Siswa Versi 2023</i></p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p> </p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </footer>
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
    <!--javascript here-->
    <script src="datepicker/js/bootstrap-modal.js"></script>
    <script src="datepicker/js/bootstrap-transition.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(function() {
            $("#pilih-semester").change(function() {
                var sm = $(this).val();
                var ids = $("#ids").val();

                $.ajax({
                    type: "GET",
                    url: "ambil_nilai_siswa.php",
                    data: "semester=" + sm + "&ids=" + ids,
                    success: function(msg) {
                        $(".box-nilai-siswa").html(msg);
                    }
                });
            });

            var polaAngka = /[^0-9.]/g;
            var polaHuruf = /[^ a-zA-Z.]/g;

            $("#nama_lengkap").keyup(function() {
                this.value = this.value.replace(polaHuruf, '');
            });
            $("#nip").keyup(function() {
                this.value = this.value.replace(polaAngka, '');
            });
            $("#nisn").keyup(function() {
                this.value = this.value.replace(polaAngka, '');
            });
            $("#nl").keyup(function() {
                this.value = this.value.replace(polaHuruf, '');
            });
            $("#np").keyup(function() {
                this.value = this.value.replace(polaHuruf, '');
            });
            $("#bhs").keyup(function() {
                this.value = this.value.replace(polaHuruf, '');
            });
            $("#pelajaran").keyup(function() {
                this.value = this.value.replace(polaHuruf, '');
            });
            $("#kkm7").keyup(function() {
                this.value = this.value.replace(polaAngka, '');
            });
            $("#kkm8").keyup(function() {
                this.value = this.value.replace(polaAngka, '');
            });
            $("#kkm9").keyup(function() {
                this.value = this.value.replace(polaAngka, '');
            });
            $("#ruang").keyup(function() {
                this.value = this.value.replace(polaHuruf, '');
            });


        });
    </script>

</body>

</html>