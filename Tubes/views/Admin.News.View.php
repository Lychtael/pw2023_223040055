<?php
require_once('functions.php');
$news_items = query("SELECT * FROM news_items");

if (isset($_GET["search"])) {
    $keyword = $_GET["keyword"];
    $news_items = search($keyword);
}
// stfu lemme work

require('partials/Admin.nav.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin news</title>
</head>

<body>
    <div class="search-container">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <div class="container mt-3 search-container">
            <h1>Admin News Page</h1>

            <a href="AddNews.php" class="btn btn-primary mb-3">Add To News</a>

            <div class="col-6 col-lg-2  py-5 mobile ">
                <div class="cari">
                    <form action="" method="get">
                        <input type="text" name="keyword" class="keyword" placeholder="Cari disini.." data-role="input" autofocus>
                        <button type="submit" name="cari" class="button secondary outline tombol-cari"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <?php if ($news_items) : ?>
                    <table class="table admin-container">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($news_items as $news_item) : ?>
                                <tr>
                                    <th scope="row"><?= $news_item["id_news"]; ?></th>
                                    <td><img src="img/Endwalker.jpg" width="150"></td>
                                    <td><?= $news_item["title"]; ?></td>
                                    <td><?= $news_item["description"]; ?></td>
                                    <td>
                                        <a href="views/Admin.EditNews.php?id=<?= $news_item['id_news']; ?>">Change</a> |
                                        <a href="DeleteNews.php?id=<?= $news_item['id_news']; ?>" onclick="return confirm('afkh antum yaqueen?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-danger" role="alert">
                                Nothing found !
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                const tombolCari = $(".tombol-cari");
                const keyword = $(".keyword");
                const container = $(".admin-container");

                tombolCari.hide();

                // livesearch admin
                keyword.keyup(function() {
                    var keywords = keyword.val().split(" ");
                    $.ajax({
                        url: "./ajax/search.php",
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

</body>

</html>