<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>

<body>
    <h1>Belajar function</h1>
    <table border="1" cellpadding="10">
        <tr>
            <td>Nama</td>
            <td>Robby Firdauzy Alfenjy</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <?php
                    $tanggal_lahir = mktime(0,0,0,6,20,2001);
                    echo date('d M Y',$tanggal_lahir);
                ?>
            </td>
        </tr>
    </table>
</body>

</html>