<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Tugas</title>
</head>

<body>
    <form action="nilai.php" method="post">
        <h4>Nilai Tugas:</h4>
        <input type="text" name="nilai">
        <input type="submit" value="Lihat Nilai"><br>
    </form>
</body>

</html>

<?php
    $nilai = $_POST['nilai'];
    if ($nilai >= 86 && $nilai <=100) {
        echo "<br>Nilai Kamu : A";
    } else if ($nilai >=76 && $nilai <=85){
        echo "<br>Nilai Kamu : B";
    } else if ($nilai >=51 && $nilai <=75){
        echo "<br>Nilai Kamu : C";
    } else if ($nilai >=31 && $nilai <=50){
        echo "<br>Nilai Kamu : D";
    } else if ($nilai >=0 && $nilai <=30){
        echo "<br>Nilai Kamu : E";
    } else{
        echo "<br>Error: Input Harus Berupa Nilai (0-100)";
    }
?>