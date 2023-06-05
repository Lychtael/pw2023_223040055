<?php
$conn = mysqli_connect("localhost", "root", "", "pwtubes_223040055");

if (isset($_POST["register"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username existed');
                document.location.href = 'Register.php';
             </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
                alert('password does not match');
                document.location.href = 'Register.php';
             </script>";
        return false;
    }


    // enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users
                VALUES
                (null,'$username','$email','$password')
            ";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
                alert('tambah data berhasil!');
                document.location.href = 'Register.php';        
        </script>";
    } else {
        echo "<script>
            alert('Failed To Add !');
            document.location.href = 'Register.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <div class="bg-dark bg-gradient text-white position-absolute top-50 start-50 translate-middle rounded border-danger p-5">
        <h1>Create An Account</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">username :</label><br>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="email">email :</label><br>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <label for="password">password :</label><br>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <label for="password2">re-type password :</label><br>
                    <input type="password" name="password2" id="password2">
                </li>
                <br>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
                <li>
                    <a href="Login.php">Log In</a>
                </li>
            </ul>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>