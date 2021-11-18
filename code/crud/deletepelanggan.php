<?php
include 'config.php';
// menyimpan data id kedalam variable
$nopelanggan = $_GET['nopelanggan'];
// query SQL untuk insert data
$query="DELETE from pelanggan where nopelanggan='$nopelanggan'";
mysqli_query($db, $query);
// mengalihkan ke halaman index.php
header("location:data-pelanggan.php?pesan=deleted");
?>