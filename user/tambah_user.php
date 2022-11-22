<?php 
require '../function.php';

    
    if(isset($_POST["submit"])){
        if(tambahUser($_POST) > 0){
        echo "
            <script type='text/javascript'>
                alert('Data user berhasil ditambahkan');
                window.location = 'user.php';
            </script>
        ";
        }
    
    else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'user.php';
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
            
        <h3>Tambah data User</h3>

        <form action="" method="POST">
            <label for="nama_lengkap">nama lengkap</label> <br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br />

            <label for="username">username</label> <br />
            <input type="text" name="username" id="username" class="form-control"> <br />

            <label for="password">Password</label> <br />
            <input type="password" name="password" id="Password" class="form-control"><br />

            <label for="roles">Roles</label> <br />
            <select name="roles" class="form-control"> <br/>
                
                <option value="Admin">Admin</option>
                <option value="customer">customer</option>
            </select>
            <button type="submit" name="submit">Kirim</button>

        </form>
        </div>
    </div>
</body>
</html>

    