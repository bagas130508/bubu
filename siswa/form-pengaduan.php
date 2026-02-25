<?php
$tanggal = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Pengaduan</title>
    <style>
        body {
            font-family: Arial;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 40px;
        }
        .container {
            background: #9ec7bbd5;
            padding: 25px;
            width: 350px;
            border-radius: 15px;
        }
        h2 { 
            text-align: center;
        }
        label { 
            margin-top: 10px; 
            display: block; 
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        textarea { 
            height: 120px; 
        }
        .btn-submit {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background: #45a049;
        }
        .logout {
            margin-top: 15px;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Halaman Pengaduan</h2>

    <form action="detail_pengaduan.php" method="POST">

        <label>NIS</label>
        <input type="text" name="nis" required>

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Kategori</label>
        <select name="kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Fasilitas">Fasilitas</option>
            <option value="Guru">Guru</option>
            <option value="Lingkungan">Lingkungan</option>
        </select>

        <label>Lokasi</label>
        <input type="text" name="lokasi" required>

        <label>Keterangan</label>
        <textarea name="keterangan" required></textarea>

        <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">

        <button type="submit" name="submit" class="btn-submit">Submit</button>
    </form>

    <div class="logout">
        <a href="index.php">Logout</a>
    </div>
</div>

</body>
</html>