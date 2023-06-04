<?php require('partials/Admin.nav.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container mt-3">
    <h1>Members</h1>

    <a href="AddUser.php" class="btn btn-primary">Register New Account</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $user["id"]; ?></th>
                    <td><?= $user["username"]; ?></td>
                    <td><?= $user["email"]; ?></td>
                    <td><?= $user["password"]; ?></td>
                    <td>
                        <a href="views/Admin.EditUser.php?id=<?= $user['id']; ?>">Change</a> |
                        <a href="DeleteUser.php?id=<?= $user['id']; ?>" onclick="return confirm('afkh antum yaqueen?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>