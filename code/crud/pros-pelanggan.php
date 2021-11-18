<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nopelanggan = $_POST['nopelanggan'];
    $namapelanggan = $_POST['namapelanggan'];
    $alamat = $_POST['alamat'];

    // buat query
    $sql = "INSERT INTO pelanggan (nopelanggan, namapelanggan, alamat) VALUE ('$nopelanggan', '$namapelanggan', '$alamat')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: data-pelanggan.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>