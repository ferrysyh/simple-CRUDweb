<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $kodebarang = $_POST['kodebarang'];
    $namabarang = $_POST['namabarang'];
    $hargabarang = $_POST['hargabarang'];

    // buat query
    $sql = "INSERT INTO barang (kodebarang, namabarang, hargabarang) VALUE ('$kodebarang', '$namabarang', '$hargabarang')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: data-barang.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('location: data-barang?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>