<?php 
 
include 'config.php';
// cek apakah tombol update sudah diklik atau belum
if(isset($_POST['update'])){

    // menyimpan data kedalam variable
    $kodebarang = $_POST['kodebarang'];
    $kodebarang = $_POST['kodebarang'];
    $namabarang = $_POST['namabarang'];
    $hargabarang = $_POST['hargabarang'];
    // Query SQL untuk insert data
    $query="UPDATE barang SET kodebarang='$kodebarang', namabarang='$namabarang', hargabarang='$hargabarang' where kodebarang='$kodebarang'"; 
    mysqli_query($db, $query);
    // mengalihkan ke halaman index.php
    header("location:data-barang.php?pesan=updated");

} else {
    die("Akses dilarang...");
}

?>