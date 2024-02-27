<?php
include '../db.php';

$sql = "DELETE FROM penjualan WHERE id_penjualan = '$_GET[id_penjualan]'";

$conn->query($sql);

header("Location: index.php");
