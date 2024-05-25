
<?php
session_start();
if ($_SESSION['role'] != 'admin') {
  header("location:../../index.php");
}
include "../../koneksi/koneksi.php";
?>
    <div class="box">
        
    <h1>Rumah Sakit Nabil</h1>
            
       
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <?php
                            $id = $_GET['id'];
                            
                            ?>
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
                                <h4>Detail Pembayaran</h4>
                                <form class="form-material">
                                    <!-- Input -->
                                    <div class="body">
                                        <?php
                                       $query = "SELECT * FROM tb_tarif 
                                       INNER JOIN tb_rekammedis ON tb_tarif.id_rekammedis = tb_rekammedis.id_rekammedis 
                                       INNER JOIN tb_pasien ON tb_tarif.id_pasien= tb_pasien.id_pasien
                                       INNER JOIN tb_obat ON tb_tarif.id_obat= tb_obat.id_obat WHERE id_tarif = '$id'";
                                                   $data1 = mysqli_query($con, $query) or die (mysqli_error($con));
                                                   $data = mysqli_fetch_array($data1);
                                                   
                                                       
                                        ?>
                                        <h6>Nama Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Obat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_obat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Biaya Obat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                    <?=$data['harga']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Biaya Pengobatan</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                    <h5>100000</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Total Biaya</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                    <?=$data['biaya']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Pembayaran</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                    <?=$data['bayar']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Pembayaran</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                    <?=$data['kembalian']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        

       <script>
		window.print();
	</script>

    </div>