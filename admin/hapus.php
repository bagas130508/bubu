<?php
include "../koneksi.php";

$nis = $_GET['nis'];

mysqli_query($conn, "DELETE FROM laporken WHERE nis='$nis'");

header("Location: index.php");
?>