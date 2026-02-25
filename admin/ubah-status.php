<?php
include "../koneksi.php";

$nis = $_GET['nis'];
$status = $_GET['status'];

mysqli_query($conn, "UPDATE laporken SET status='$status' WHERE nis='$nis'");

header("Location: index.php");
?>