<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Login</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;

      
      background-image: url("https://www.smkmutucikampek.sch.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-29-at-08.20.27-1-e1748585989774.jpeg");
      background-size: cover;        
      background-position: center;   
      background-repeat: no-repeat;  
    }

    .login-box {
      width: 300px;
      padding: 30px;
      border: 2px solid black;
      border-radius: 25px;
      text-align: center;
      height: 400px;

      
      background-color: rgba(255, 255, 255, 0.85);
    }

    .login-box label {
      display: block;
      text-align: left;
      margin-bottom: 5px;
      margin-top: 15px;
      font-size: 14px;
    }

    .login-box input {
      width: 100%;
      padding: 8px;
      border: 2px solid rgb(56, 67, 68);
      border-radius: 10px;
      outline: none;
    }

    .login-box button {
      margin-top: 20px;
      padding: 8px 25px;
      border: 2px solid black;
      border-radius: 12px;
      background-color: rgb(105, 134, 110);
      cursor: pointer;
    }

    .login-box button:hover {
      background-color: #ddd;
    }

    .blogin {
      width: 20x;
    }
  </style>
</head>

<body>
<form action="proses_login-admin.php" method="POST">
  <div class="login-box">
    <label>Username</label>
    <input type="text" name="username" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit" class="blogin">Login</button>
  </div>
</form>

