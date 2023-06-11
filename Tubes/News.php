<?php
session_start();
require_once('functions.php');
$news_items = query("SELECT * FROM news_items");

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
  <div class="search">
    <div class="container sm bg-dark text-white text-center">
      <div class="cari p-5">
        <form action="" method="get">
          <input type="text" name="keyword" class="keyword" placeholder="Search something.." data-role="input" autofocus>
          <button type="submit" name="cari" class="button secondary outline tombol-cari"><i class="fas fa-search"></i></button>
        </form>
      </div>
      <?php if ($news_items) : ?>
        <?php foreach ($news_items as $news_item) : ?>
          <div class="berita">
            <div class="card-body py-5">
              <h1 class="card-title text-danger">
                <?= $news_item["title"]; ?>
              </h1>
              <br>
              <img src="img/<?= $news_item["image"]; ?>" class="img-fluid p-5" style="height: 80%; width: 80%;">
              <br>
              <a class="btn btn-danger my-2" href="NewsDetail.php?id=<?= $news_item['id_news']; ?>">Click For Details</a>
            </div>
            <hr>
          </div>
        <?php endforeach ?>
      <?php else : ?>
        <div class="row">
          <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
              Nothing found !
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        const tombolCari = $(".tombol-cari");
        const keyword = $(".keyword");
        const container = $(".berita");

        tombolCari.hide();

        // livesearch admin
        keyword.keyup(function() {
          var keywords = keyword.val().split(" ");
          $.ajax({
            url: "./ajax/user-search.php",
            data: {
              keywords: keywords,
            },
            type: "get",
            success: function(response) {
              container.html(response);
            },
          });
        });
      });
    </script>
  </div>

</body>

</html>