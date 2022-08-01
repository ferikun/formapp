<?php 
session_start();
require 'functions.php';

if(isset($_SESSION['login'])){
    header("LOCATION: createform.php");
    exit;
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //cek username
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");
    $nama = mysqli_fetch_assoc($result);
    $tampilNama = $nama['nama'];
    $tampilUserId = $nama['id'];
    $nama = $tampilNama;
    $userId = $tampilUserId;

    if(mysqli_num_rows($result) === 1){

        $_SESSION['login'] = 'true';
        $_SESSION['nama'] = $nama;
        header("Location: createform.php?userId=$userId");
        exit;
        
    }
    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>FormApp</title>
</head>
<body class="bg-primary">
<div class="container text-center">

<div class="card" style="margin-top: 10%; width: 300px; margin-left: 42%;">
    <div class="card-header">
    <h1>Login</h1>
    </div>
    <?php if(isset($error)) :?>
    <p class="text-danger">Maaf, Username atau Password anda salah</p>
    <?php endif; ?>
    <p>Masukan Username dan Password anda</p>
    <form action="" method="POST">
        <div class="card-body">
            <div style="width: 100px; margin-left: 80px;">
                <div class="text-center">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id=username required autocomplete="off">
                <div>
                <div>
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id=password required>
                </div>
            </div>
            <div>
            <button style="margin-top: 20px;" class="btn btn-primary" type="submit" name="submit">Login</button>
            </div>
        </div>
            <div style="margin-top: 10%;">
            <a href="daftar.php">daftar</a>
            </div>
    </form>

    </div>
</div>
</body>
</html>