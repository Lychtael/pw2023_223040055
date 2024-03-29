<?php
session_start();
require('functions.php');
$id_news = $_GET["id"];
$news_item = query("SELECT * FROM news_items WHERE id_news = $id_news")[0];

if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Etheirys | Unofficial Final Fantasy XIV Forums and news</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.news.css" />
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Sanskrit&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="container-fluid bg-black bg-gradient text-white shadow p-2">
            <div class="top">
                <div class="d-flex">
                    <div class="p-2 flex-grow-1">
                        <div class="logo">
                            <a href="index.php">The Etherys</a>
                        </div>
                    </div>
                    <div class="top-tombol">
                        <div class="tombol-login bg-black bg-gradient p-1">
                            <div class="p-3 fs-5">
                                <span>
                                    <a href="Logout.php">LOG OUT</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main contents -->
    <div class="container sm bg-dark text-white text-center py-5">
        <div class="card-body mb-5">
            <h1 class="card-title text-danger">
                <?= $news_item["title"]; ?>
            </h1>
            <br>
            <img src="img/<?= $news_item["image"]; ?>" class="img-fluid mb-5">
            <p class="card-text">
                <?= $news_item["description"]; ?>
            </p>
        </div>
    </div>
</body>

</html>