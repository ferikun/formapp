<?php 
require 'functions.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //cek username
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");

    if(mysqli_num_rows($result) === 1){

        header("Location: create-form.php");
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
<body>
    <div class="container text-center">
    <h1>Login</h1>
    <?php if(isset($error)) :?>
    <p class="text-danger">Maaf, Username atau Password anda salah</p>
    <?php endif; ?>
    <form action="" method="POST">
        <div class="text-center" style="height: 100px;">
            
            <div style="width: 150px; margin-left: 570px;">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" id=username required>
            </div>
        </div>
        <div style="height: 100px;">
            <div style="width: 150px; margin-left: 570px;">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id=password required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Login</button>
    </ul>
    </form>
    <a href="daftar.php">daftar</a>
    </div>
</body>
</html>