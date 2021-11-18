<?php 
 
include 'config.php';
// cek apakah tombol update sudah diklik atau belum
if(isset($_POST['update'])){

    // menyimpan data kedalam variable
    $nopelanggan = $_POST['nopelanggan'];
    $namapelanggan = $_POST['namapelanggan'];
    $alamat = $_POST['alamat'];
    // Query SQL untuk insert data
    $query="UPDATE pelanggan SET nopelanggan='$nopelanggan', namapelanggan='$namapelanggan', alamat='$alamat' where nopelanggan='$nopelanggan'"; 
    mysqli_query($db, $query);
    // mengalihkan ke halaman index.php
    header("location:data-pelanggan.php?pesan=updated");

} else {
    die("Akses dilarang...");
}

?>