<?php
require_once "database.php";
$db = new database();
$mysqli = $db->mysqli;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM mie WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
} else {
    die("ID tidak valid.");
}
?>
