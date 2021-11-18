<?php
include 'config.php';
$nopelanggan = $_GET['nopelanggan'];
$pelanggan	= mysqli_query($db, "select * from pelanggan where nopelanggan='$nopelanggan'");
$row			= mysqli_fetch_array($pelanggan);

?>


	<!DOCTYPE html>
	<html>
		<head>
			<style>
				body{
					overflow-y: hidden;
					margin:0;
					padding: 0;
					font-family: verdana;
					background-color:#0f3057;
				}
				form{
					font-family: arial;
					background-color: #00587a;
					width: 29%;
					margin: auto;
					padding: 30px;
					text-align: left;
					color: #e7e7de;
					border-radius: 40px 10px;
					box-shadow: 2px 2px 7px #393939;
				}
				input{
					margin: 10px;
					font-family: arial;
				}
				h4{
					text-align:center;
					margin: 50px auto;
					margin-top: 10px;
					padding: 10px;
					font-weight: bold;
					color: #e7e7de;
					font-family: verdana;
					background-color: #008891;
					border-radius: 20px;
				}
			</style>
		</head>
		<body>
			<header>
            	<h4>Edit pelanggan</h4>
			</header>

			<form method="post" action="edit-pelanggan.php">
				<fieldset>

            	<p>
                	<label for="nopelanggan">nopelanggan : </label>
                	<input type="text" value="<?php echo $row ['nopelanggan'];?>" name="nopelanggan" placeholder="nopelanggan" />
            	</p>
                <p>
                	<label for="namapelanggan">namapelanggan : </label>
                	<input type="text" value="<?php echo $row ['namapelanggan'];?>" name="namapelanggan" placeholder="namapelanggan" />
            	</p>
                <p>
                	<label for="alamat">alamat : </label>
                	<input type="text" value="<?php echo $row ['alamat'];?>" name="alamat" placeholder="alamat" />
            	</p>
            	<p>
                	<input type="submit" value="Update" name="update" >
				</p>
			</form>
		</body>
	</html>