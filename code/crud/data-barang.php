<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>List Data</title>
        <link rel="stylesheet" href="list-siswa.css">
        
    </head>
    <body>
        <div class="container">
            <br>
            <center><h3>Data barang</h3></center>
            <div class="row justify-content-center mt-5">
                <nav>
                <a href="index.php">Home</a><a style="color: white"> | </a><a href="barang.php">Tambah baru</a>
                </nav>

                <br>
                <div class="table-responsive">
                    <table id="table-datatables" class="table table-striped table-bordered" style="width:99%">
                        <thead class="thead-dark">
                            <tr>
                                <th>Kode barang</th>
                                <th>Nama barang</th>
                                <th>Harga barang</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM barang";
                            $query = mysqli_query($db, $sql);

                            while($siswa = mysqli_fetch_array($query)){
                                echo "<tr>";

                                echo "<td>".$siswa['kodebarang']."</td>";
                                echo "<td>".$siswa['namabarang']."</td>";
                                echo "<td>".$siswa['hargabarang']."</td>";
                                
                                echo "<td>";
                                echo "<a href='edit-barangform.php?kodebarang=".$siswa['kodebarang']."'>Edit</a> | ";
                                echo "<a href='deletebarang.php?kodebarang=".$siswa['kodebarang']."'>Hapus</a>";
                                echo "</td>";

                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <p id="total">Total : <?php echo mysqli_num_rows($query) ?></p>
            </div>
        </div>

    </body>
</html>