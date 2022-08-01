<?php
require"functions.php";
$id = $_GET['id'];
$userId = $_GET['userId'];
$judul = $_GET['judul'];

if(!isset($id) || !isset($judul)){

    echo "<script>
    
        alert('Fromulir Belum di buat, anda harus membuat formulir dahulu!!');
        window.location.href='createform.php';

    </script>";
}
$jumlah ="";
if(isset($_POST['tambah'])){
    $jumlah = $_POST['jumlah'];
}
if(isset($_POST["submit"])){

    $question = $_POST['question'];
    foreach($question as $q):
        $qdb = mysqli_query($conn,"INSERT INTO question VALUES('','$id','$q')");
    endforeach;

    header("LOCATION:respon.php?id=$id&judul=$judul&userId=$userId");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-primary text-light">
    <h1 class="text-center">Isikan Formulir</h1>
    <form action="" method="POST">
    
    <label>Berapa Jumlah Pertanyaan yang ingin dibuat</label>    
    <input style="width: 80px;" class=form-control type="text" name ="jumlah" autocomplete="off" required>
    <button class="btn-warning" type="submit" name="tambah" style="margin-top: 10px;">Tambah</button>
    </div>
    </form>
    <br>
    <form action="" method="POST">
    <div style="margin-left: 40%;">
    <?php for($i=0; $i < $jumlah;$i++) : ?>
        <div style="width: 300px;">
        <label>Pertanyaan <?= $i+1 ?></label>
        <input class=form-control type="text" name ="question[]" placeholder="Masukan pertanyan anda" autocomplete="off" required>
        <div>

    <?php endfor; ?>
    </div>
    <br>
    <button class="btn btn-danger" type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>
