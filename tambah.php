<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "database.php";
    $db = new database();
    $mysqli = $db->mysqli;

    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];

    $stmt = $mysqli->prepare("INSERT INTO mie (nama, keterangan, harga) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $nama, $keterangan, $harga);
    $stmt->execute();

    header("Location: index.php");
}
?>
<form method="post" action="">
    Nama: <input type="text" name="nama" required><br>
    Keterangan: <input type="text" name="keterangan"><br>
    Harga: <input type="number" name="harga" step="0.01"><br>
    <button type="submit">Tambah</button>
</form>
