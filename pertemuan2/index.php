<?php

// Pertemuan 2 - PHP Dasar (Sintaks PHP)

// Standar Output
// echo, print

// untuk debgugging
// print_r = untuk array
// var_dump

// Variable
// tidak boleh diawali denan angka (tetapi boleh mengandung angka) 
$pertemuan = 2;
$nama = "Robby Firdauzy Alfenjy";

// Penggabung string / concatination / concat
$nama_depan = "Robby Firdauzy";
$nama_belakang = "Alfenjy";

// echo $nama_depan . $nama_belakang;

/* 
operator aritmatika
+ - * / %
*/
$x = 5;
$y = 4;


/*
Assignment
=, +=, -=, *=, .=, /=, %=
$data_1 = 11;
$data_1 += 5;
*/

/*
operator perbandingan
== < > <= >= !=
*/

/*
operator identitas
=== !==

Logika
&&, ||, !
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan ke <?php echo $pertemuan; ?> </title>
</head>
<body>
    <h1>Sintaks Output</h1>
    <h3>Selamat datang <?= $nama; ?></h3>
    <hr>
    <h1>Penggabung string </h1>
    <h3>Nama = <?= $nama_depan . $nama_belakang ?> </h3>
    <hr>
    <h1>Operator aritmatika</h1>
    <h3><?php $z = $x + $y; echo $x . "+". $y . "= " . $z ?></h3>
    <h3><?php $a = $x - $y; echo $x . "-". $y . "= " . $a ?></h3>
    <h3><?php $b = $x / $y; echo $x . "/". $y . "= " . $b ?></h3>
    <h3><?php $c = $x % $y; echo $x . "%". $y . "= " . $c ?></h3>
    <h3><?php $c = $x * $y; echo $x . "*". $y . "= " . $c ?></h3>
    <hr>
    <h1>Assignment</h1>
    <h3>
        <?php 
        $data_1 = 11;
        $data_2 = 5;
        $data_3 = $data_1 + $data_2;
        echo "data_1 = ".$data_1;
        echo "<br>";
        echo "data_1 += $data_2";
        echo "<br>";
        echo "hasilnya = $data_3 ($data_1 + $data_2)"

        ?>
    </h3>
    <hr>
    <h1>Perbandingan</h1>
    <?php
    $var_1 = 5;
    $var_2 = 3;
    echo "apakah $var_1 > $var_2 ? <br>";
    var_dump($var_1>$var_2);
    echo "<br>";
    echo "apakah $var_1 < $var_2 ? <br>";
    var_dump($var_1<$var_2);
    ?>
    <hr>
    <h1>Identitas</h1>
    <?php
    $variable1 = "1";
    $variable2 = 1;

    echo "variable1 = '1' ";
    echo "<br>";
    echo "variable2 = $variable2 ";
    echo "<br>";
    echo "Apakah $variable1 === $variable2 ? ";
    var_dump($variable1===$variable2);
    ?>
    <hr>
    <h1>Logika</h1>
    <?php
    $d=7;
    $e=11;
    
    echo "Apakah $d > $e ?";
    echo "<br>";
    var_dump($d>$e);
    echo "<br>";
    echo "Apakah $d < $e dan $e > $d ?";
    echo "<br>";
    var_dump($d<$e && $d>$e);
    echo "<br>";
    echo "Apakah $d <= $d ?";
    echo "<br>";
    var_dump($d<=$d);
    echo "<br>";
    echo "Apakah $d >= $d ?";
    echo "<br>";
    var_dump($d>=$d);
    
    
    ?>
</body>
</html>