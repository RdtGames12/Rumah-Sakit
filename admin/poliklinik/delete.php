<?php
    include "../../koneksi/koneksi.php";

    mysqli_query($con, "DELETE FROM tb_klinik WHERE id_klinik = '$_GET[id]' ") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
?>