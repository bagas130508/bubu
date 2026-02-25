<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "2026_ujikom_12rpl1_junaedi"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>