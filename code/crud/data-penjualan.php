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
            <center><h3>Data penjualan</h3></center>
            <div class="row justify-content-center mt-5">
                <nav>
                <a href="index.php">Home</a><a style="color: white"> | </a><a href="penjualan.php">Tambah baru</a>
                </nav>

                <br>
                <div class="table-responsive">
                    <table id="table-datatables" class="table table-striped table-bordered" style="width:99%">
                        <thead class="thead-dark">
                            <tr>
                                <th>faktur</th>
                                <th>nopelanggan</th>
                                <th>tanggalpenjualan</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM penjualan";
                            $query = mysqli_query($db, $sql);

                            while($siswa = mysqli_fetch_array($query)){
                                echo "<tr>";

                                echo "<td>".$siswa['faktur']."</td>";
                                echo "<td>".$siswa['nopelanggan']."</td>";
                                echo "<td>".$siswa['tanggalpenjualan']."</td>";
                                
                                echo "<td>";
                                echo "<a href='edit-penjualanform.php?faktur=".$siswa['faktur']."'>Edit</a> | ";
                                echo "<a href='deletepenjualan.php?faktur=".$siswa['faktur']."'>Hapus</a>";
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