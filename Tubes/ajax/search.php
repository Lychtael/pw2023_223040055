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
                    <td><img src="img/<?= $news_item["image"]; ?>" style="width : 200; height:100px;"></td>
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