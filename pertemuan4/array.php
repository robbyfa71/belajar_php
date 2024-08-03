<?php

$months = [
    "Januari",
    "Februari",
    "Maret",
    "April"
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>

<body>
    <h1>Looping Array dengan For</h1>
    <table border="1" cellpadding="10">
        <?php for ($i = 0; $i < count($months); $i++) : ?>
            <tr>
                <td><?= $months[$i]; ?></td>
            </tr>
        <?php endfor ?>
    </table>
    <hr>
    <h1>Looping Array dengan Foreach</h1>

    <table border="1" cellpadding="10">
        <?php foreach ($months as $month) : ?>
            <tr>
                <td><?= $month ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>