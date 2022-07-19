
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Form App</title>
</head>
<body>
    <h2>Masukan Pertanyaan anda</h2>
    <form action="formulir.php" method="POST">
        
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <input class="form-control" type="text" name="q1"  placeholder="Pertanyaan pertama" required>
            </div>
        </div>
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <input class="form-control" type="text" name="q2" placeholder="Pertanyaan kedua" required>
            </div>
        </div>
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <input class="form-control" type="text" name="q3"  placeholder="Pertanyaan Ketiga" required>
            </div>
        </div>
        <div class="form-floating" style="width: 250px; margin-bottom:30px ;">
            <div>
                <input class="form-control" type="text" name="q4"  placeholder="Pertanyaan keempat"required>
            </div>
        </div>
        <button class="btn-primary" type="submit" name="submit" style="margin-top: 50px;">Buat Form</button>
    </form>
</body>
</html>