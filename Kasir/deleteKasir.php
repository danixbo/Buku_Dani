<?php
include '../db.php';

$sql = "DELETE FROM kasir WHERE id_kasir = '$_GET[id_kasir]'";

$conn->query($sql);

header("Location: index.php");
