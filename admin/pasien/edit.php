<?php
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
              <a class="dropdown-item d-flex align-items-center" href="../index.php">
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
      </li><!-- End Dashboard Navsss -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#components-nav" href="../pasien/">
          <i class="bi bi-journal-text"></i><span>Data Pasien</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Data Dokter</span>
        </a>

      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Data Poliklinik</span>
        </a>

      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Data Obat</span>
        </a>
        
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Rekam Medis</span>
        </a>

      </li><!-- End Icons Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">


  <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            Ubah Data Pasien
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="container-fluid my-3">
                <div class="row">
                    <div class="col-md-8 center">
                        <div class="card shadow-sm">
                            <div class="card-body b-b">
                                <h4>Detail Pasien</h4>
                                <?php
                                $id = $_GET['id'];
                                $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien = '$id'") or die (mysqli_error($con));
                                $data = mysqli_fetch_array($sql_pasien);
                                ?>
                                <form class="form-material" action="proses.php" method="post">
                                    <!-- Input -->
                                    <div class="body">
                                        <h6>Nama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="hidden" name="id" value="<?=$data['id_pasien']?>">
                                                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" value="<?=$data['nama_pasien']?>" autofocus required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.KTP</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="<?=$data['no_ktp']?>" autofocus required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Marga</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="marga" id="marga" class="form-control">
                                                            <option><?=$data['marga']?></option>
                                                            <option>jawa</option>
                                                            <option>batak</option>
                                                            <option>betawi</option>
                                                            <option>sunda</option>
                                                            <option>dayak</option>
                                                            <option>asmat</option>
                                                            <option>minahasa</option>
                                                            <option>melayu</option>
                                                            <option>madura</option>
                                                            <option>bugis</option>
                                                            <option>lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Alamat</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?=$data['alamat']?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="<?=$data['kelurahan']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="<?=$data['kecamatan']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="kota" id="kota" class="form-control" value="<?=$data['kota']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="provinsi" id="provinsi" class="form-control" value="<?=$data['provinsi']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="kode_pos" id="kode_pos" class="form-control" value="<?=$data['kode_pos']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Email</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="email" id="email" class="form-control" value="<?=$data['email']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>No.Telepon Rumah</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="no_telprumah" id="no_telprumah" class="form-control" value="<?=$data['no_telprumah']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>No.Ponsel</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?=$data['no_hp']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Lahir</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?=$data['tempat_lahir']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?=$data['tgl_lahir']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Jenis Kelamin</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                        <option><?=$data['jenis_kelamin']?></option>
                                                        <option>pria</option>
                                                        <option>wanita</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Agama</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="agama" id="agama" class="form-control">
                                                        <option><?=$data['agama']?></option>
                                                        <option>islam</option>
                                                        <option>kristen</option>
                                                        <option>budha</option>
                                                        <option>hindu</option>
                                                        <option>kongucu</option>
                                                        <option>lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Golongan Darah</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="golongan_darah" id="golongan_darah" class="form-control">
                                                        <option><?=$data['golongan_darah']?></option>
                                                        <option>a</option>
                                                        <option>b</option>
                                                        <option>ab</option>
                                                        <option>o</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Status Pasien</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="status_pasien" id="status_pasien" class="form-control">
                                                        <option><?=$data['status_pasien']?></option>
                                                        <option>menikah</option>
                                                        <option>belum menikah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Jenis Pasien</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="jenis_pasien" id="jenis_pasien" class="form-control">
                                                        <option><?=$data['jenis_pasien']?></option>
                                                        <option>pribadi</option>
                                                        <option>bpjs</option>
                                                        <option>allianz</option>
                                                        <option>cigna</option>
                                                        <option>prudential</option>
                                                        <option>cigna</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h4>Kontak Darurat</h4>
                                    <h6>Nama</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="nama_darurat" id="nama_darurat" class="form-control" value="<?=$data['nama_darurat']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Alamat Darurat</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="alamat_darurat" id="alamat_darurat" class="form-control" value="<?=$data['alamat_darurat']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Hubungan</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="hubungan_darurat" id="hubungan_darurat" class="form-control">
                                                        <option><?=$data['hubungan_darurat']?></option>
                                                        <option>orangtua</option>
                                                        <option>saudara</option>
                                                        <option>teman</option>
                                                        <option>sahabat</option>
                                                        <option>rekan kerja</option>
                                                        <option>atasan kerja</option>
                                                        <option>lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>No.Telepon Rumah</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="no_telprumah_darurat" id="no_telprumah_darurat" class="form-control" value="<?=$data['no_telprumah_darurat']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>No.Ponsel</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="no_hp_darurat" id="no_hp_darurat" class="form-control" value="<?=$data['no_hp_darurat']?>" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Sumber Informasi</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="sumber_informasi" id="sumber_informasi" class="form-control">
                                                        <option><?=$data['sumber_informasi']?></option>
                                                        <option>internet</option>
                                                        <option>majalah</option>
                                                        <option>tv</option>
                                                        <option>koran</option>
                                                        <option>radio</option>
                                                        <option>spanduk</option>
                                                        <option>seminar</option>
                                                        <option>event</option>
                                                        <option>referensi teman</option>
                                                        <option>lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="center">
                                            <input type="submit" name="edit" value="Simpan" class="btn btn-primary mt-2">
                                        </div>
                                    </div>
                            </div>
                            </form>
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