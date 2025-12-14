<?php
header("Content-Type: application/json");
require_once("dbcon.php");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    $title  = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $genre  = $_POST['genre'] ?? '';
    $categories  = $_POST['categories'] ?? '';

    $fileupload = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $fileName);
        $fileupload = $fileName;
    }

    $query = mysqli_query(
        $conn,
        "INSERT INTO booksreg (title, author, genre,categories, fileupload)
         VALUES ('$title', '$author', '$genre', '$categories', '$fileupload')"
    );

    echo json_encode(["success" => $query]);
    exit;
}

if ($method === 'GET') {

    $qry = mysqli_query($conn, "SELECT * FROM booksreg");
    $data = [];

    while ($row = mysqli_fetch_assoc($qry)) {
        $data[] = $row;
    }

    echo json_encode($data);
}
