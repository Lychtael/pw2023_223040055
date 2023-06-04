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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container mt-3">
    <h1>Admin News Page</h1>

    <a href="AddNews.php" class="btn btn-primary mb-3">Add To News</a>

    <form action="" method="get">
        <input type="text" name="keyword" size="40" autofocus placeholder="looking for something ?" autocomplete="off">
        <button type="submit" name="search" class="btn btn-primary">search</button>
    </form>
    <table class="table">
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
</div>