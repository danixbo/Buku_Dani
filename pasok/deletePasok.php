<?php
include '../db.php';

$sql = "DELETE FROM pasok WHERE id_pasok = '$_GET[id_pasok]'";

$conn->query($sql);

header("Location: index.php");
