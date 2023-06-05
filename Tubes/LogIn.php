<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
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
            // set session
            $_SESSION["login"] = true;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <style>
        body {
            background-image: url(img/black-concrete-wall.jpg);
        }

        ul li {
            list-style-type: none;
        }
    </style>
</head>

<body>


    <?php if (isset($error)) : ?>
        <p style="color: red;"><i>Username / Password salah</i></p>
    <?php endif; ?>
    <div class="bg-dark bg-gradient text-white position-absolute top-50 start-50 translate-middle rounded border-danger p-5">
        <h1>LOG IN</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" id="username" autofocus>
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <br>
                <li>
                    <button type="submit" name="login">LOG IN</button>
                </li>
                <li>
                    <a href="Register.php">Create Account</a>
                </li>
            </ul>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>