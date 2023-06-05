<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
    exit;
}

require('views/partials/Admin.nav.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container mt-3 p-2">
    <h1>Welcome Admin !</h1>
    <hr>
    <h3>
        <u>Users Management</u>
    </h3>
    <br>
    <a href="AdminUser.php"> Click Here !</a>
    <hr>
    <h3>
        <u>News Management</u>
    </h3>
    <br>
    <a href="AdminNews.php"> Click Here !</a>
</div>