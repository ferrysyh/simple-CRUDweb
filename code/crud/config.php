<?php

$server = "localhost";
$user = "root";
$password = "Akucintaallah99";
$nama_database = "penjualanbarang";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
else{
    echo "Database berhasil terhubung";
}

?>