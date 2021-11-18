<?php
include 'config.php';
// menyimpan data id kedalam variable
$faktur = $_GET['faktur'];
// query SQL untuk insert data
$query="DELETE from penjualan where faktur='$faktur'";
mysqli_query($db, $query);
// mengalihkan ke halaman index.php
header("location:data-penjualan.php?pesan=deleted");
?>