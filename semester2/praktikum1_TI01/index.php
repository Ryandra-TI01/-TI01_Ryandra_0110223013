<?php 
    $nama = 'Ryandra Athaya Saleh';
    $umur = 18;
    echo 'Nama saya '. $nama . ' dan umur saya ' . $umur .'<br>';

    $title = 'Praktikum 1 php';
    define('phi', 3.14);
    $jari = 14 ;
    $keliling =  2*phi* $jari;
    $luas =  phi* $jari* $jari;
    echo 'keliling '.$keliling .'<br>';
    echo 'luas '.$luas;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:gray; color:white">
    <h1><?php echo $title  ?></h1>
    <p>keliling <?php  echo 'keliling lingkaran dari jari jari '. $jari .' = '.$keliling .'<br>' ?></p>
    <p>keliling <?php   echo 'luas lingkaran dari jari jari'. $jari.' = '.$luas ?></p>

</body>
</html>