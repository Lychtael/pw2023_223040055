<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
    exit;
}

require 'functions.php';

$id = htmlspecialchars($_GET['id']);

if (delUser($id) > 0) {
    echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'AdminUser.php';
        </script>";
} else {
    echo "<script>
            alert('data gagal dihapus!');
            document.location.href = 'AdminUser.php';
        </script>";
};
