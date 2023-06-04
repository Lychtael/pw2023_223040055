<?php
require('functions.php');

// Memanggil fungsi koneksi() untuk membuat koneksi ke database
koneksi();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Menggunakan variabel global $conn yang telah didefinisikan di functions.php
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LOG IN</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red;"><i>Username / Password salah</i></p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">LOG IN</button>
            </li>
        </ul>
    </form>
</body>

</html>