<?php

// pengulangan
//for, while, do while, foreach (untuk array)

//example for
/*
for($i=0; $i<5; $i++){
    echo "Hello World <br>";
}
*/

// example while
// $i=0;
// while($i<5){
//     echo "Hello World <br>";
// $i++;
// }

// example do while
// $i = 10;
// do {

//     echo "Hello World <br>";
//     $i++;
// } while ($i < 5);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 3; $j++) : ?>
                    <?php if($j % 2 == 1): ?>
                    <td style="background-color: red;"><?= "$i,$j" ?></td>
                    <?php else : ?>
                    <td><?= "$i,$j" ?></td>
                    <?php endif?>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
</body>

</html>