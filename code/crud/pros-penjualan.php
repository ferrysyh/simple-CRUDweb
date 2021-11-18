<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $faktur = $_POST['faktur'];
    $nopelanggan = $_POST['nopelanggan'];
    $tanggalpenjualan = $_POST['tanggalpenjualan'];

    // buat query
    $sql = "INSERT INTO penjualan (faktur, nopelanggan, tanggalpenjualan) VALUE ('$faktur', '$nopelanggan', '$tanggalpenjualan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: data-penjualan.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>