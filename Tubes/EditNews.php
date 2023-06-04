<?php
$conn = mysqli_connect("localhost:3306", "root", "", "pwtubes_223040055");
require 'functions.php';
$id_news = $_GET["id"];
$news_item = query("SELECT * FROM news_items WHERE id_news = $id_news")[0];

if (isset($_POST["submit"])) {
    if (editNews($_POST) > 0) {
        echo "
            <script>
                alert('Succesfully updated !');
                document.location.href = 'AdminNews.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed To update !');
                document.location.href = 'AdminNews.php';
            </script>
        ";
    }
}

require 'views/Admin.EditNews.php';
