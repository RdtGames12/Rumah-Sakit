<?php 
include "../../koneksi/koneksi.php";


if(isset($_POST['add'])){
    $uuid = rand();
    $pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
    $keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
    $dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
    $diagnosa = trim(mysqli_real_escape_string($con, $_POST['diagnosa']));
    $klinik = trim(mysqli_real_escape_string($con, $_POST['klinik']));
    $tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
    mysqli_query($con, "INSERT INTO tb_rekammedis (id_rekammedis, id_pasien, keluhan, id_dokter, diagnosa, id_klinik, tanggal_periksa) values ('$uuid','$pasien', '$keluhan','$dokter', '$diagnosa', '$klinik', '$tgl')") or die (mysqli_error($con));
    
    
    
    $obat = $_POST['obat'];
    foreach($obat as $ob){
        mysqli_query($con, "INSERT INTO tb_rekammedis_obat (id_rekammedis, id_obat) values ('$uuid','$ob')") or die (mysqli_error($con));
    }
    echo "<script>window.location='data.php';</script>";

}
?>