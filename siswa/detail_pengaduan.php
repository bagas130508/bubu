<?php
if(isset($_POST['submit'])){

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $_POST['tanggal'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Pengaduan</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h2 {
        color: #333;
    }

    p {
        background: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>
<body>

<h2>Detail Pengaduan</h2>

<p><b>Tanggal:</b> <?php echo $tanggal; ?></p>
<p><b>NIS:</b> <?php echo $nis; ?></p>
<p><b>Nama:</b> <?php echo $nama; ?></p>
<p><b>Kategori:</b> <?php echo $kategori; ?></p>
<p><b>Lokasi:</b> <?php echo $lokasi; ?></p>
<p><b>Keterangan:</b> <?php echo $keterangan; ?></p>
<p><b>Status:</b> Proses</p>

<br>
<a href="form-pengaduan.php">Kembali</a>

</body>
</html>
<?php
}
?>