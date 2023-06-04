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
    $image = htmlspecialchars($data['image']);
    $description = htmlspecialchars($data['description']);

    $query = "INSERT INTO
              news_items
            VALUES (null, '$title','$image','$description')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
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

// function registrasi($data)
// {
//     global $conn;

//     $username = htmlspecialchars($data["username"]);
//     $email = htmlspecialchars($data["email"]);
//     $password = $data["password"];
//     $password2 = $data["password2"];

//     // cek password
//     if ($password !== $password2) {
//         echo "<script>
//                 alert('password does not match');
//              </script>";
//         return false;
//     }

//     // enkripsi pass
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     // tambah user ke db
//     mysqli_query($conn, "INSERT INTO users VALUES(null,'$username','$email','$password')");
//     return mysqli_affected_rows($conn);
// }
