<?php 
session_start();
require "functions.php";

$userId = $_GET['userId'];
$id = $_GET['id'];
$_SESSION['formId'] = $id;
$formId = $_SESSION['formId'];
$judul = $_GET['judul'];
if(!isset($id) || !isset($judul)){

    echo "<script>
    
        alert('Fromulir Belum di buat, anda harus membuat formulir dahulu!!');
        window.location.href='createform.php';

    </script>";
}

if(isset($_POST['jawab'])){
    $questionIds = $_POST['questionId'];
    $respon = $_POST['respon'];

    if (count($respon) != count($questionIds)) {
        echo "jumlah data tidak sama";
        die();
    }
    
    foreach($respon as $k => $r):
       $input = mysqli_query($conn,"INSERT INTO respon VALUES('','$userId','$formId','$questionIds[$k]','$r') ");
    endforeach;

    if(mysqli_affected_rows($conn) > 0){
        echo"<script>
        
        alert('Anda berhasil menjawab');

        </script>";
        header("Refresh:0");
    }
    
}
$result = mysqli_query($conn,"SELECT question_name, id FROM question WHERE form_id = '$id'");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Respon</title>
</head>
<body class="bg-primary text-light" >
<div class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-3 mr-5 mb-lg-0">
                    <li class="nav-item">
                         <a class="nav-link active btn btn-primary" aria-current="page" href="createform.php?userId=<?=$userId;?>">Home</a>
                    </li>
                    <li style="margin-left: 10px;" class="nav-item">
                         <a class="nav-link active btn btn-primary" aria-current="page" href="jawaban.php?formId=<?=$formId;?>&userId=<?=$userId;?>">Lihat Respon</a>
                    </li>
                </ul>
            </div>

        </div> 
    </div>
    <h1 class="text-center"><?= $judul; ?></h1>
    <br>
    <form action="" method="POST">
    <div style="margin-left: 40%;">
    <?php while($tampil = mysqli_fetch_array($result)): ?>
       
        <div style="width: 300px;">
        <label><?= $tampil['question_name'] ?> </label>
        <input class=form-control type="text" name ="respon[]" placeholder="Masukan pertanyan anda" autocomplete="off" required>
        <input type="hidden" value="<?= $tampil['id'];?>" name="questionId[]">
        </div>
        <?php endwhile; ?>
        <button style="margin-top: 15px;" type="submit" name="jawab" class="btn-danger">Jawab</button>
    </div>
    </form>
</body>
</html>