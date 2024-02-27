<?php
include '../db.php';

$sql = "DELETE FROM distributor WHERE id_distributor = '$_GET[id_distributor]'";

$conn->query($sql);

header("Location: index.php");
