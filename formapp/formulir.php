<?php
require"functions.php";

$jawaban = false;

if(isset($_POST["jawab"])){

    //pertanyaan
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];

    $insertQ = "INSERT INTO question VALUES('','$q1','$q2','$q3','$q4')";
    $result = mysqli_query($conn,"$insertQ");

    //jawaban
    $j1 = $_POST["j1"];
    $j2 = $_POST["j2"];
    $j3 = $_POST["j3"];
    $j4 = $_POST["j4"];

    $insertJ = "INSERT INTO question VALUES('','$j1','$j2','$j3','$j4')";
    $result = mysqli_query($conn,"$insertJ");

    if(mysqli_affected_rows($conn)){
        header("Location: respon.php");
        exit;
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
    <title>Document</title>
</head>
<body>
    <?php if(isset($success)) : ?>
        <div class="alert alert-primary" role="alert">
            Data Berhasil Di Jawab!
         </div>
    <?php endif; ?>
    <h2>Isikan Formulir</h2>

    <form action="" method="POST">
        
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <label for="p1"><?= $_POST["q1"]; ?></label>
                <input id="p1" class="form-control" type="text" name="j1"  placeholder="Jawab" required>
            </div>
        </div>
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <label for="p2"><?= $_POST["q2"]; ?></label>
                <input id="p2" class="form-control" type="text" name="j2" placeholder="Jawab" required>
            </div>
        </div>
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <label for="p3"><?= $_POST["q3"]; ?></label>
                <input id="p3" class="form-control" type="text" name="j3"  placeholder="Jawab" required>
            </div>
        </div>
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <label for="p4"><?= $_POST["q4"]; ?></label>
                <input id="p4" class="form-control" type="text" name="j4"  placeholder="Jawab" required>
            </div>
        </div>
        <button class="btn-primary" type="submit" name="jawab" style="margin-top: 50px;">Buat Form</button>
    </form>
</body>
</html>
