<?php
require "function.php";

$barang = query("SELECT * fROM barang");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Welcome Admin</h1>

    <h2>List Barang</h2>

    <a href="tambah.php">Tambah data barang</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Merek</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach($barang as $thing) : ?>
        <tr>
            <td><?= $thing["id"] ?></td>
            <td><?= $thing["nama"]?></td>
            <td><?= $thing["merek"] ?></td>
            <td><?= $thing["jumlah"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>