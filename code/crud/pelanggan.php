<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Pendaftaran</title>
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
    <div class="container-fluid">
        <header>
            <h4>Formulir pelanggan</h4>
        </header>

        <form action="pros-pelanggan.php" method="POST">

            <fieldset>

            <p>
                <label for="nopelanggan">No Pelanggan : </label>
                <input type="text" name="nopelanggan" placeholder="no pelanggan " />
            </p>
            <p>
                <label for="namapelanggan">Nama pelanggan : </label>
                <input type="text" name="namapelanggan" placeholder="nama pelanggan" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" placeholder="alamat"></textarea>
            </p>
            <p>
                <input type="submit" value="Input" name="daftar" />
            </p>
        </form>
    </div>       
    </body>
</html>