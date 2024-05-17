<?php
require 'fungsi.php';
$player = query("SELECT * FROM player");
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Daftar Player</h1>
    
    <a href="tambah.php">Tambah Data Player</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>    
        <th>Nama</th>
        <th>NPM</th>
        <th>Email</th>
        <th>Password</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Asal</th>
        <th>No HP</th>
        <th>Hobi</th>
        <th>Skill</th>
        <th>Makanan Kesukaan</th>
        <th>Aksi</th>
        </tr>
    <tr>
        <?php foreach($player as $row) : ?>
        <td><?= $row["nama"];?></td>
        <td><?= $row["npm"];?></td>
        <td><?= $row["email"];?></td>
        <td><?= $row["password"];?></td>
        <td><?= $row["jenis_kelamin"];?></td>
        <td><?= $row["umur"];?></td>
        <td><?= $row["asal"];?></td>
        <td><?= $row["no_hp"];?></td>
        <td><?= $row["hobi"];?></td>
        <td><?= $row["skill"];?></td>
        <td><?= $row["makanan_kesukaan"];?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Update</a>
            <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>

    </table>


</body>
</html>