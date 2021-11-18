<?php
include 'config.php';
$kodebarang				= $_GET['kodebarang'];
$barang	= mysqli_query($db, "select * from barang where kodebarang='$kodebarang'");
$row			= mysqli_fetch_array($barang);

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
            	<h4>Edit barang</h4>
			</header>

			<form method="post" action="edit-barang.php">
				<fieldset>

            	<p>
                	<label for="kodebarang">kodebarang : </label>
                	<input type="text" value="<?php echo $row ['kodebarang'];?>" name="kodebarang" placeholder="kodebarang" />
            	</p>
                <p>
                	<label for="namabarang">namabarang : </label>
                	<input type="text" value="<?php echo $row ['namabarang'];?>" name="namabarang" placeholder="namabarang" />
            	</p>
                <p>
                	<label for="hargabarang">hargabarang : </label>
                	<input type="text" value="<?php echo $row ['hargabarang'];?>" name="hargabarang" placeholder="hargabarang" />
            	</p>
            	<p>
                	<input type="submit" value="Update" name="update" >
				</p>
			</form>
		</body>
	</html>