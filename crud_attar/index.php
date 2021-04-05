<?php
    require 'function.php';
    $siswa = query("SELECT * FROM datasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Attar</title>
</head>
<body>
    <h1>Daftar siswa SMK Pesat</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?></td>
        <?php foreach( $siswa as $row) : ?>
        <tr>
            <td><?= $i?></td>
            <td><img src="source/<?= $row ["Gambar"]; ?>" width = "50" alt=""></td>
            <td><?=$row["Nis"];?></td>
            <td><?=$row["Nama"];?></td>
            <td><?=$row["Email"];?></td>
            <td><?=$row["Jurusan"];?></td>
            <td>
                <a href="#">ubah</a>
                <a href="#">hapus</a>
            <td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ;?>
    </table>
</body>
</html>