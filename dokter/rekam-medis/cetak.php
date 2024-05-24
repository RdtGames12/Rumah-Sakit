
<?php
include "../../koneksi/koneksi.php";

?>
    <div class="box">
        
    <h1>Dokter</h1>
            
       
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <?php
                            $id = $_GET['id'];
                            echo 'Rekammedis ID :  ';
                            
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
                                <h4>Detail Rekammedis</h4>
                                <form class="form-material">
                                    <!-- Input -->
                                    <div class="body">
                                        <?php
                                        $query = "SELECT * FROM tb_rekammedis 
                                        INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
                                        INNER JOIN tb_dokter ON tb_rekammedis.id_dokter= tb_dokter.id_dokter
                                        INNER JOIN tb_klinik ON tb_rekammedis.id_klinik= tb_klinik.id_klinik WHERE id_rekammedis= '$id'";
                                                    $sql_rekammedis = mysqli_query($con, $query) or die (mysqli_error($con));
                                        foreach ($sql_rekammedis as $data) {
                                            # code...
                                        
                                        ?>
                                        <h6>Nama Dokter</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['id_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Keluhan</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['keluhan']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <h6>Nama Dokter</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_dokter']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Diagnosa</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['diagnosa']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <h6>Nama Klinik</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_klinik']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $sql_obat = mysqli_query($con, "SELECT * FROM tb_rekammedis_obat JOIN tb_obat ON tb_rekammedis_obat.id_obat = tb_obat.id_obat WHERE id_rekammedis = '$data[id_rekammedis]'") or die (mysqli_error($con));
                                            while ($data_obat = mysqli_fetch_array($sql_obat)){
                                               
                                            
                                            ?>
                                        <h6>Obat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data_obat['nama_obat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <h6>Tanggal Periksa</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['tanggal_periksa']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <br>
                                        
                                    </div>
                                    <?php }?>
                                </form>
        
        
       <script>
		window.print();
	</script>

    </div>
    

