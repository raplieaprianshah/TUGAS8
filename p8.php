<?php
require_once "mie.php";
$m = new mie_instan();
$table = "mie_instan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mie Instan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> mY favourite Mie Instan</h1>
    <table border ="1"> 
<tr> 
    <th>id_mie</th>
    <th>Nama Mie </th>
    <th>Varian Mie </th>
</tr>
<?php
$no = 1;
$datas = $m->tampil($table);
foreach ($datas as $data){
    echo "<tr>";
    // echo "<td>".$no++."</td>";
    echo "<td>".$data['id_mie']."</td>";
    echo "<td>".$data['nama']. "</td>";
    echo "<td>".$data['varian_mie']. "</td>";

    echo "</tr>";
}
?>
</table>
</body>
</html>
