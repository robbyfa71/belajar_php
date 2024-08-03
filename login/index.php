<?php

// cek tombol submit sudah di pencet atauu belum
if (isset($_POST["submit"])) {
    // cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "password") {
        header("Location: dashboard.php");
        exit;
    } else {
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Terlebih Dahulu</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red;">username / password salah</p>
    <?php endif ?>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>