<?php require('partials/Admin.nav.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container mt-3">
    <div id="add-news" class="mt-4">
        <h2>ADD NEWS</h2>
        <form method="POST" action="AddNews.php" enctype="multipart/formdata">
            <div class="mb-3 w-50">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" autofocus required>
            </div>
            <div class="mb-3 w-50">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" required>
            </div>
            <div class="mb-3 w-50">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="tambahNews">Add</button>
        </form>
    </div>
</div>