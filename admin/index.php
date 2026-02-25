<?php
session_start();
include "../koneksi.php";


if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM laporken ORDER BY nis DESC");
$total = mysqli_num_rows($data);
$belum = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM laporken WHERE status='Belum Diproses'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
        }

        .header {
            background: #007bff;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            width: 95%;
            margin: 20px auto;
        }

        .card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: inline-block;
            width: 250px;
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #343a40;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        .btn {
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-size: 13px;
        }

        .proses { background: #28a745; }
        .belum { background: #ffc107; color: black; }

        .badge {
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 12px;
            color: white;
        }

        .badge-belum { background: #dc3545; }
        .badge-proses { background: #28a745; }

        .logout {
            background: #dc3545;
            padding: 6px 12px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Dashboard Admin</h2>
    <a href="../logout.php" class="logout">Logout</a>
</div>

<div class="container">

    <div class="card">
        <h3>Total Laporan</h3>
        <h2><?= $total; ?></h2>
    </div>

    <div class="card">
        <h3>Belum Diproses</h3>
        <h2><?= $belum; ?></h2>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        mysqli_data_seek($data, 0);
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td><?= $row['lokasi']; ?></td>
            <td><?= $row['keterangan']; ?></td>
            <td>
                <?php if ($row['status'] == "Belum Diproses") { ?>
                    <span class="badge badge-belum">Belum Diproses</span>
                <?php } else { ?>
                    <span class="badge badge-proses">Diproses</span>
                <?php } ?>
            </td>
            <td>
                <?php if ($row['status'] == "Belum Diproses") { ?>
                    <a href="ubah_status.php?nis=<?= $row['nis']; ?>&status=Diproses" class="btn proses">Proses</a>
                <?php } else { ?>
                    <a href="ubah_status.php?nis=<?= $row['nis']; ?>&status=Belum Diproses" class="btn belum">Batalkan</a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>