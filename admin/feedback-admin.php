<?php
include "../koneksi.php";

$nis = $_GET['nis'];

if (isset($_POST['kirim'])) {
    $feedback = $_POST['feedback'];
    mysqli_query($conn, "UPDATE laporken SET feedback='$feedback' WHERE nis='$nis'");
    header("Location: index.php");
}
?>

<h3>Beri Feedback</h3>

<form method="POST">
    <textarea name="feedback" rows="5" cols="50" required></textarea><br><br>
    <button type="submit" name="kirim">Kirim</button>
</form>