<?php
require 'functions.php';

$id_news = htmlspecialchars($_GET['id']);

if (hapusNews($id_news) > 0) {
    echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'AdminNews.php';
        </script>";
} else {
    echo "<script>
            alert('data gagal dihapus!');
            document.location.href = 'AdminNews.php';
        </script>";
};
