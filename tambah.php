<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $merek = $_POST["merek"];
    $jumlah = $_POST["jumlah"];

    $query = "
            INSERT INTO barang VALUES (
                '', '$nama', '$merek', '$jumlah'
            )
    ";
    mysqli_query($conn, $query);
    
}
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="merek">Merek :</label>
                <input type="text" name="merek" id="merek">
            </li>
            <li>
                <label for="jumlah">Jumlah :</label>
                <input type="text" name="jumlah" id="jumlah">
            </li>
            <li>
                <button type="submit" name="submit">tambah data!</button>
            </li>
        </ul>


    </form>
</body>
</html>