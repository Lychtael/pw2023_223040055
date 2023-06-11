<?php
define('BASE_URL', '/pw2023_043040055/Tubes/');

function koneksi()
{
    global $conn;
    $conn = mysqli_connect('localhost', 'root', '', 'pwtubes_223040055') or die('gk konek boss');
    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahNews($data)
{
    $conn = koneksi();

    $title = htmlspecialchars($data['title']);
    // $image = htmlspecialchars($data['image']);
    $description = htmlspecialchars($data['description']);

    // upload gambar
    $image = upload();
    if (!$image) {
        return false;
    }

    $query = "INSERT INTO news_items
              VALUES (null,'$title','$image','$description')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // cek gambar 
    if ($error === 4) {
        echo "<script>
                alert('upload image !');
            </script>";
        return false;
    }

    // cek yg diupload apakah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('invalid format !');
            </script>";
        return false;
    }


    // cek ukuran
    if ($ukuranFile > 8000000) {
        echo "<script>
                alert('image cannot exceed 8mb !');
            </script>";
        return false;
    }


    // lolos pengecekan
    move_uploaded_file($tmpName, 'img/' . $namaFile);

    return $namaFile;
}

function hapusNews($id_news)
{
    $conn = koneksi();
    $query = "DELETE FROM news_items WHERE id_news = $id_news";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function editNews($data)
{
    $conn = koneksi();

    if (!isset($data['id_news'])) {
        return "Error: Missing 'id_news' key in the data array.";
    }

    $id_news = $data["id_news"];
    $title = htmlspecialchars($data['title']);
    $image = htmlspecialchars($data['image']);
    $description = htmlspecialchars($data['description']);

    $query = "UPDATE news_items SET 
                title = '$title',
                image = '$image',
                description = '$description'
                WHERE id_news = $id_news
                ";

    $result = mysqli_query($conn, $query);
    if ($result) {
        return "Success: Data has been updated.";
    } else {
        return "Error: Failed to update data. " . mysqli_error($conn);
    }
}
function editUser($data)
{
    $conn = koneksi();

    if (!isset($data['id'])) {
        return "Error: Missing 'id_news' key in the data array.";
    }

    $id = $data["id"];
    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);

    $query = "UPDATE users SET 
                username = '$username',
                email = '$email',
                password = '$password'
                WHERE id = $id
                ";

    $result = mysqli_query($conn, $query);
    if ($result) {
        return "Success: Data has been updated.";
    } else {
        return "Error: Failed to update data. " . mysqli_error($conn);
    }
}
function delUser($id)
{
    $conn = koneksi();
    $query = "DELETE FROM users WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    die;
    echo "</pre>";
}

function urils($url)
{
    return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}

function search($keyword)
{
    global $conn;
    $query = "SELECT * FROM news_items 
    WHERE
    title LIKE '%" . $keyword . "%' or
    description LIKE '%" . $keyword . "%'";
    return query($query);
}
