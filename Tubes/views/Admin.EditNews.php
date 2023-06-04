<?php
$conn = mysqli_connect("localhost:3306", "root", "", "pwtubes_223040055");
require '../functions.php';
$id_news = $_GET["id"];
$news_item = query("SELECT * FROM news_items WHERE id_news = $id_news")[0];

if (isset($_POST["submit"])) {
    $_POST["id_news"] = $_POST["id"]; // Assign the value to "id_news" key

    if (editNews($_POST) > 0) {
        echo "
            <script>
                alert('Successfully updated!');
                document.location.href = '../AdminNews.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed to update!');
                document.location.href = '../AdminNews.php';
            </script>
        ";
    }
}


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container mt-3">
    <div id="add-news" class="mt-4">
        <h2>EDIT NEWS</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $news_item['id_news']; ?>">
            <div class="mb-3 w-50">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $news_item['title']; ?>" autofocus required>
            </div>
            <div class="mb-3 w-50">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="<?= $news_item['image']; ?>">
            </div>
            <div class="mb-3 w-50">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"><?= $news_item['description']; ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Apply Changes</button>
        </form>
    </div>
</div>