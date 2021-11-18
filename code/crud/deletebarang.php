<?php
include 'config.php';
// menyimpan data id kedalam variable
$kodebarang = $_GET['kodebarang'];
// query SQL untuk insert data
$query="DELETE from barang where kodebarang='$kodebarang'";
mysqli_query($db, $query);
// mengalihkan ke halaman index.php
header("location:data-barang.php?pesan=deleted");
?>