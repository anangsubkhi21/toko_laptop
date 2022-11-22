<?php 
require '../function.php';

$user = query("SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheeet" href="style.css">

    <style>
        .container{
    margin-top: 80px;
    margin-left: 320px;
    background: black;
}

table {
    width: 80%;
    border: none;
    border-radius: 5px;
    padding: 20px;
    background-color: greenyellow;
    border: 2px solid black;
    margin-top: 20px;
}

th,td{
    text-align: left;
    padding: 10px;
    font-size: 21px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 300px;
}

th{
    color: rgb(16, 16, 26);
}

td{
    color: whitesmoke;

}
    </style>

</head>
<body>
<div class="row">
        <div class="col-3">
            <?php require '../sidebar/sidebar.php'; ?>
        </div>
        <div class="col-9">
    <div class="container mt-5">
    <h3>Data User</h3>
    
    <a href="tambah_user.php" class="tambah">Tambah user</a>
    <table>
        <tr>
            <th>No</th>
            <th>nama lengkap</th>
            <th>username</th>
            <th>password</th>
            <th>Roles</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($user as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["username"]; ?></td>
            <td><?= $data["password"]; ?></td>
            <td><?= $data["roles"]; ?></td>
            <td>
                <a href="edit_user.php?id=<?= $data["id_user"]; ?>"class="edit">edit</a>
                <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    </div>
</div>
</body>
</html>