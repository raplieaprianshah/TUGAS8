<?php
require_once "database.php";
$db = new database();
$mysqli = $db->mysqli;

$id = $_GET['id'];
$data = $mysqli->query("SELECT * FROM mie WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];

    $stmt = $mysqli->prepare("UPDATE mie SET nama = ?, keterangan = ?, harga = ? WHERE id = ?");
    $stmt->bind_param("ssdi", $nama, $keterangan, $harga, $id);
    $stmt->execute();

    header("Location: index.php");
}
?>

<form method="post" action="">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    Keterangan: <input type="text" name="keterangan" value="<?= $data['keterangan'] ?>"><br>
    Harga: <input type="number" name="harga" step="0.01" value="<?= $data['harga'] ?>"><br>
    <button type="submit">Update</button>
</form>
