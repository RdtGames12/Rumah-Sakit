<?php 
session_start();
if ($_SESSION['role'] != 'admin') {
  header("location:../../index.php");
}
include "../../koneksi/koneksi.php";

mysqli_query($con, "DELETE FROM tb_dokter WHERE id_dokter = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>