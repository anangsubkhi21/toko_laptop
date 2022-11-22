<?php
session_start();

require '../function.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(isset($_POST["submit"])){
    if(editProduk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'produk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal diubah');
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
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
            <?php require '../sidebar/sidebar.php'; ?>
        </div>
        <div class="col-8">
            <div class="main mt-5">
                <div class="box">
                    <h3>Edit Gtk</h3><br>
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_produk" value="<?= $guru["id_produk"]; ?>"> <br>

                        <label for="nama_produk">nama produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="<?= $produk["nama_produk"]; ?>"><br>
            
                        <label for="harga">harga</label>
                        <input type="text" name="harga" class="form-control" value="<?= $produk["harga"]; ?>"><br>
            
                        <label for="foto">foto</label>
                        <input type="file" name="foto" class="form-control" value="<?= $guru["foto"]; ?>"><br>

                        <label for="stok">stok</label>
                        <input type="text" name="stok" class="form-control" value="<?= $produk["stok"]; ?>"><br />

                        <label for="deskripsi">deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="<?= $produk["deskripsi"]; ?>"><br />
            
                        <button type="submit" class="btn btn-dark" name="submit">kirim</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>