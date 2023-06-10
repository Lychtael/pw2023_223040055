<?php
$conn = mysqli_connect("localhost:3306", "root", "", "pwtubes_223040055");
require '../functions.php';
$id = $_GET["id"];
$user = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST["editUser"])) {
    $_POST["id"] = $_POST["id"];

    if (editUser($_POST) > 0) {
        echo "
            <script>
                alert('Successfully updated!');
                document.location.href = '../AdminUser.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed to update!');
                document.location.href = '../AdminUser.php';
            </script>
        ";
    }
}


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container mt-3">
    <div id="add-news" class="mt-4">
        <h2>Edit Account</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <div class="mb-3 w-50">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" autofocus required>
            </div>
            <div class="mb-3 w-50">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" required>
            </div>
            <div class="mb-3 w-50">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= $user['password']; ?>" required>
            </div>
            <button class="btn btn-primary" type="submit" name="editUser">Done</button>
        </form>
    </div>
</div>