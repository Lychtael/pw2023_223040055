<?php

require '../functions.php';
$conn = koneksi();
$keywords = $_GET['keywords']; // Menggunakan $_GET['keywords'] sebagai array kata kunci
$query = "SELECT * FROM news_items WHERE ";
foreach ($keywords as $key => $keyword) {
    if ($key > 0) {
        $query .= " OR ";
    }
    $query .= "title LIKE '%$keyword%' OR
    description LIKE '%$keyword%'";
}

$news_items = query($query);
?>
<?php if ($news_items) : ?>
    <?php foreach ($news_items as $news_item) : ?>
        <div class="berita">
            <div class="card-body py-5">
                <h1 class="card-title text-danger">
                    <?= $news_item["title"]; ?>
                </h1>
                <br>
                <img src="img/<?= $news_item["image"]; ?>" class="img-fluid p-5" style="height: auto; width:auto;">
                <br>
                <a class="btn btn-danger my-3" href="NewsDetail.php?id=<?= $news_item['id_news']; ?>">Click For Details</a>
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