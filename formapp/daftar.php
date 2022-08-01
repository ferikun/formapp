<?php
require 'functions.php';

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $insert = mysqli_query($conn, "INSERT INTO akun VALUES ('','$nama','$username','$password')");

    if(mysqli_affected_rows($conn) === 1){
        $regist = true;
        echo "<script>
            alert('Anda Berhasil Mendaftar, silahkan mauk ke halaman login!');
        </script>";
        
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>daftar</title>
</head>
<body>
    <div class="container-fluid">
    <h1>Daftar Akun</h1>
    <?php if(isset($regist)): ?>
    <p class="text-primary">Berhasil Daftar</p>
    <?php endif; ?>
    <form action="" method="POST">
        <div>
            <label for="nama">Nama</label>
           <div style="width: 200px;"> <input class="form-control" type="text" name="nama" id="nama" required> </div>

        </div>
        <div>
            <label for="username">Username</label>

           <div style="width: 200px;"> <input class="form-control" type="text" name="username" id="username" required> </div>
            
        </div>
        <div>
            <label for="password">Password</label>
            <div style="width: 200px;"> <input class="form-control" type="password" name="password" id="password" required> </div>
            
        </div>
        <button class="btn-primary" type="submit" name="submit">Daftar</button>
        <br>
        <a href="login.php">Login</a>
    </ul>
    </form>
    </div>
</body>
</html>