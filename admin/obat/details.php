<?php
session_start();
if ($_SESSION['role'] != 'admin') {
  header("location:../../index.php");
}
    include "../../koneksi/koneksi.php";
    function tgl_indo($tgl) {
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);
    return $tanggal."/".$bulan."/".$tahun;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rekam Medis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Rekam Medis</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="../index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="../pasien/">
          <i class="bi bi-journal-text"></i><span>Data Pasien</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="../dokter/">
          <i class="bi bi-journal-text"></i><span>Data Dokter</span>
        </a>

      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="../poliklinik">
          <i class="bi bi-journal-text"></i><span>Data Poliklinik</span>
        </a>

      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#charts-nav" href="index.html">
          <i class="bi bi-journal-text"></i><span>Data Obat</span>
        </a>
        
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" href="../rekam-medis/">
          <i class="bi bi-journal-text"></i><span>Rekam Medis</span>
        </a>

      </li><!-- End Icons Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">


  <div class="box">
        <div class="container">
            <div id="loginbox" style="font-size: 14px" class="mainbox col-lg-12">
                <div class="panel panel-light">
                    <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="panel-body" id="myfrm">
                            <div align="center" style="margin-top: 20px;">
                                <div style="color: #292826;font-weight:bold"><b style="color: #083d77"><h2>Informasi Detail Obat</h2></b></div>
                                <br>
                                <br>
                                <div class="col-lg-12">
                                    <div >
                                        <?php
                                        $id = $_GET['id'];
                                        $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat = '$id'") or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_obat);
                                        ?>
                                        <form class="box" align="center">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Kode obat</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['id_obat']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama obat</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['nama_obat']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Harga</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['harga']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Keterangan Obat</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['keterangan']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Dosis</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['dosis']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Jenis Obat</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['jenis']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Stok</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['stok']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Tanggal Kadaluarsa</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['kadaluarsa']?></h3></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-group" align="center">
                                                <a href="edit.php?id=<?=$data['id_obat']?>" class="btn btn-success mt-2"><i class="icon-pencil mr-2"></i>Ubah</a>
                                                <a onclick="myPrint('myfrm')" class="btn btn-light" style="background-color : #f4d35e;color : #1e2425;font-weight:bold">Print</a>
                                            </div>
                                        </form>
                                        <script>
                                            function myPrint(myfrm) {
                                                var printdata = document.getElementById(myfrm);
                                                newwin = window.open("");
                                                newwin.document.write(printdata.outerHTML);
                                                newwin.print();
                                                newwin.close();
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>