<?php
include '../db.php';

$sql = "DELETE FROM buku WHERE id_buku = '$_GET[id_buku]'";

$conn->query($sql);

header("Location: index.php");
