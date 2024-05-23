<?php
$host="localhost";
$user="root";
$pass="";
$database="db_rekammedis";
$con = new mysqli($host, $user, $pass, $database);
if ($con->connect_error) {
    echo "Gagal koneksi ke database";
} 
else {
    //koneksi berhasil
    //echo "berhasil";
}
?>