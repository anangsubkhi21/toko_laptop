<?php 
require '../function.php';

    
    if(isset($_POST["submit"])){
        if(tambahProduk($_POST) > 0){
        echo "
            <script type='text/javascript'>
                alert('Data produk berhasil ditambahkan');
                window.location = 'produk.php';
            </script>
        ";
        }
    
    else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="main">
        <div class="box">
        <h3>Tambah data Produk</h3>

        <form action="" method="POST">
            <label for="nama_produk">Nama Produk</label> <br />
            <input type="text" name="nama_produk" id="nama_produk" class="form-control"> <br />

            <label for="harga">harga</label> <br />
            <input type="text" name="harga" id="harga" class="form-control"> <br />

            <label for="file">foto</label><br />
            <input type="file" name="foto" id="foto" class="form-control"><br />

            <label for="stok">stok</label> <br />
            <input type="stok" name="stok" id="stok" class="form-control"><br />

            <label for="deskripsi">deskripsi</label> <br />
            <input type="deskripsi" name="deskripsi" id="deskripsi" class="form-control"> <br/>

            <button type="submit" name="submit" class=""btn btn-dark>kirim</button>

        </form>
        </div>
    </div>
</body>
</html>

    