<?php 
require "functions.php";

$result = mysqli_query($conn,"SELECT * FROM question");

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
<body>
    <h1 class="text-center">Respon Jawaban</h1>
<?php while($tampil = mysqli_fetch_assoc($result)) : ?>
<table class="table" style="width: 200px;">
    
    <tr>
        <td> <?php echo $tampil["q1"]; ?> </td>
    </tr>
    <tr>
        <td> <?php echo $tampil["q2"]; ?> </td>
    </tr>
    <tr>
        <td> <?php echo $tampil["q3"]; ?> </td>
    </tr>
    <tr>
        <td> <?php echo $tampil["q4"]; ?> </td>
    </tr>
</table>
<?php endwhile; ?>
</body>
</html>