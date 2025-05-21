<?php
require_once "mie.php";
$m = new mie_instan();
$table = "mie";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mie Instan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>My Favourite Mie Instan</h1>

    <!-- Tombol Tambah -->
    <p><a href="tambah.php">+ Tambah Mie Baru</a></p>

    <table border="1">
        <tr> 
            <th>ID</th>
            <th>Nama Mie</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $datas = $m->tampil($table);
        foreach ($datas as $data){
            echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['keterangan']."</td>";
            echo "<td>".$data['harga']."</td>";
            echo "<td>
                <a href='edit.php?id=".$data['id']."'>Edit</a> 
               <a href='hapus.php?id=".$data['id']."' class='delete-link'>Delete</a>

            </td>";
            echo "</tr>";
        }
        ?>
    </table>
    <script src="main.js"></script>
</body>
</html>
