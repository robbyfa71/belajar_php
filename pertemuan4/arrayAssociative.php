<?php

// array associative

$employees = [
    [
        "Nama" => "Robby",
        "Email" => "robby.firdauzy@idwebtech.com",
        "Jabatan" => "IT Project Manager"
    ],
    [
        "Nama" => "Ridho",
        "Email" => "ridho@idwebtech.com",
        "Jabatan" => "Senior Software Engineer"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <h1>Array Assocative</h1>
    <?php foreach($employees as $employee): ?>
    <ul>
        <li>Nama : <?= $employee["Nama"] ?></li>
        <li>Email : <?= $employee["Email"] ?></li>
        <li>Jabatan : <?= $employee["Jabatan"] ?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>