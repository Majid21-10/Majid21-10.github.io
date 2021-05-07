<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = array("budi","aji","rio");
    $nama[]="putri";
  print_r($nama);
    //menampilkan aji
echo"<br>";
echo $nama[1];
$nama2= ["suci","anto","doni"];
echo "<br>";
echo $nama[0];
?>
</body>
</html>