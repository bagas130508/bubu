<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
    $user = mysqli_fetch_assoc($data);

    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    if($user['role'] == "admin"){
        header("Location: index.php");
    } else {
        header("Location: siswa.php");
    }
    exit;
}else{
    echo "Login gagal!";
}
?>