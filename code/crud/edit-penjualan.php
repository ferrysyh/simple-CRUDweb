<?php 
 
include 'config.php';
// cek apakah tombol update sudah diklik atau belum
if(isset($_POST['update'])){

    // menyimpan data kedalam variable
    $faktur = $_POST['faktur'];
    $nopelanggan = $_POST['nopelanggan'];
    $tanggalpenjualan = $_POST['tanggalpenjualan'];
    // Query SQL untuk insert data
    $query="UPDATE penjualan SET faktur='$faktur', nopelanggan='$nopelanggan', tanggalpenjualan='$tanggalpenjualan' where faktur='$faktur'"; 
    mysqli_query($db, $query);
    // mengalihkan ke halaman index.php
    header("location:data-penjualan.php?pesan=updated");

} else {
    die("Akses dilarang...");
}

?>