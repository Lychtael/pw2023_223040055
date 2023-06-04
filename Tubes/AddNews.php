<?php
require 'functions.php';
$name = 'tambahNews';


if (isset($_POST['tambahNews'])) {
    $data = $_POST;

    if (tambahNews($data) > 0) {
        echo "<script>
                alert('tambah data berhasil!');
                document.location.href = 'AdminNews.php';        
        </script>";
    } else {
        echo "<script>
            alert('Failed To Add !');
            document.location.href = 'AdminNews.php';
        </script>";
    }
};


require 'views/Admin.AddNews.php';
