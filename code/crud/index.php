<?php include("../header.php"); ?>

<div class="container" style="margin-top:30px">
  <div class="row">
      <div class="col-sm-8">
        

<?php include("../footer.php"); ?>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal";
            }
        ?>
    </p>
    <?php endif; ?>

    </body>
</html>