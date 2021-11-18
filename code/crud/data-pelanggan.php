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
            <center><h3>Data pelanggan</h3></center>
            <div class="row justify-content-center mt-5">
                <nav >
                <a href="index.php">Home</a><a style="color: white"> | </a><a href="pelanggan.php">Tambah baru</a>
                </nav>

                <br>
                <div class="table-responsive">
                    <table id="table-datatables" class="table table-striped table-bordered" style="width:99%">
                        <thead class="thead-dark">
                            <tr>
                                <th>No Pelanggan</th>
                                <th>Nama Pelanggan</th>
                                <th>alamat</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM pelanggan";
                            $query = mysqli_query($db, $sql);

                            while($siswa = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>".$siswa['nopelanggan']."</td>";
                                echo "<td>".$siswa['namapelanggan']."</td>";
                                echo "<td>".$siswa['alamat']."</td>";
                                
                                echo "<td>";
                                echo "<a href='edit-pelangganform.php?nopelanggan=".$siswa['nopelanggan']."'>Edit</a> | ";
                                echo "<a href='deletepelanggan.php?nopelanggan=".$siswa['nopelanggan']."'>Hapus</a>";
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