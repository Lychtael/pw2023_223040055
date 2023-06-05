<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
    exit;
}

require('functions.php');
$name = 'Home';

$news_items = query(
    "SELECT * FROM news_items"
);
// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/Admin.News.View.php');
