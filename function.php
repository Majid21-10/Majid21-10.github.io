<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<br>";
    function nama($nama,$alamat){
        echo"hello nama saya adalah $nama , alamat saya di $alamat";
    }
    nama("reza","depok");
    echo"<br>"

    function tambah($nilai1,$nilai2){
        return $nilai1 + $nilai2;
    }
    echo tambah(5,10);
    ?>

</body>
</html>