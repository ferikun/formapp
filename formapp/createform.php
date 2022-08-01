<?php
session_start();
require'functions.php';
$userId = $_GET['userId'];

if(isset($_POST['buat'])){
    $namaform = $_POST['namaform'];
    $querynamaform = mysqli_query($conn,"INSERT INTO form values('','$namaform')");

    $idform = mysqli_query($conn,"SELECT id,name_form FROM form WHERE name_form = '$namaform'");
    $rowIdForm = mysqli_fetch_assoc($idform);

    $id = $rowIdForm['id'];
    
    $judul = $rowIdForm['name_form'];


    header("LOCATION:formulir.php?id=$id&judul=$judul&userId=$userId");

    if(mysqli_affected_rows($conn)>0){
        header("Refresh:0");
    }

 
}
if(!isset($_SESSION['login'])){
    header("LOCATION: login.php");
    exit;
}
$form = mysqli_query($conn,"SELECT id,name_form FROM form ");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Create Formulir</title>
</head>
<body class="bg bg-primary">
    <div class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                         <a class="nav-link active btn btn-primary" aria-current="page" href="logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>

        </div> 
    </div>
    <h1 class="text-center text-light">Halo, selamat datang <?= $_SESSION['nama'] ; ?></h1>
    <div>
        <form action="" method="post">
            <div class="text-light" style="margin-left: 42%; width: 200px;">
            <label for="namaform">Buat Formulir Baru</label>
            <input autocomplete="off" id="namaform" type="text" class="form-control" placeholder="masukan nama formulir" name="namaform" required>
            <button type="submit" name="buat" class="btn-warning" style="margin-top: 10%;">Buat</button>
            <br>
            </div>
            
        </form>

    <div style="width: 100%; margin-top: 10%;">
    <h2 class="text-center text-light">Daftar Formulir</h2>
        <div class="card-body">
            <div class="list-group" ">
            <?php while($tampil = mysqli_fetch_array($form)) : ?>
                <?php $formulirId = $tampil['id']; ?>
                <?php $formulirJudul = $tampil['name_form']; ?>
                <a href="respon.php?id=<?=$formulirId;?>&userId=<?=$userId;?>&judul=<?=$formulirJudul;?>" class="list-group-item list-group-item-action"><?= $tampil['name_form']; ?></a>
            <?php endwhile; ?>
            </div>
        </div>
    </div>   
    </div>
</body>
</html>