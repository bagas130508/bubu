<?php 
session_start();
include "koneksi.php";


if (!isset($_SESSION['siswa'])) {
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Siswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: Arial;
            color: white;
        }

        .container {
            text-align: center;
            margin-top: 60px;
        }

        .logo {
            width: 300px;
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border: 2px solid white;
            border-radius: 20px;
            color: white;
            text-decoration: none;
            margin: 10px;
            transition: 0.3s;
        }

        .btn:hover {
            background: white;
            color: black;
        }

        .logout {
            background: red;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Selamat Datang, <?= $_SESSION['siswa']; ?> 👋</h2>

    <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/cropped-SMK-MUTU-500-x-160-px.png" class="logo">

    <div>
        <a href="form-pengaduan.php" class="btn">Buat Pengaduan</a>
        <a href="riwayat.php" class="btn">Riwayat Pengaduan</a>
        <a href="logout.php" class="btn logout">Logout</a>
    </div>
</div>

</body>
</html>