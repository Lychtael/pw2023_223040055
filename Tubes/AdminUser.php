<?php
require('functions.php');
$name = 'Home';

$users = query(
    "SELECT * FROM users"
);
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/Admin.User.View.php');
