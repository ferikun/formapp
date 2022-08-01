<?php
require'functions.php';
$formId = $_GET['formId'];
$userId = $_GET['userId'];

$result = mysqli_query($conn,"SELECT question_name FROM question WHERE form_id = '$formId' ");
$result2 = mysqli_query($conn,"SELECT answer FROM respon WHERE formId_question = '$formId' ");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Jawaban</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-3 mr-5 mb-lg-0">
                    <li class="nav-item">
                         <a class="nav-link active btn btn-primary" aria-current="page" href="createform.php?userId=<?=$userId;?>">Home</a>
                    </li>
                </ul>
            </div>

        </div> 
    </div>
    <h1 class="text-center textx-light">Jawaban</h1>
    <table class="table table-bordered">
        <tr class="table-primary text-center">
            <th colspan="100">Pertanyaan</th>
        </tr>

        <tr> 
            <?php while($tampil = mysqli_fetch_assoc($result)) : ?>
              <th>  <?= $tampil['question_name'];?> </th>
            <?php endwhile; ?>
        </tr>
        <tr class="table-primary text-center">
            <th colspan="100">Jawaban</th>
        </tr>
        <tr>
        <?php while($tampil2 = mysqli_fetch_assoc($result2)) : ?>
              <th>  <?= $tampil2['answer'];?> </th>
            <?php endwhile; ?>
        </tr>
    </table>
</body>
</html>