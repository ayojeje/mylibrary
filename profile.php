<?php
session_start();

$id = $_SESSION["id"];



require_once("includes/config.php");
header("content-type:application/json");
header("HTTP/1.1 200 ok");
$method = $_SERVER['REQUEST_METHOD'];

if($method=='GET'){
$query = mysqli_query($conn, "SELECT * FROM lmsreg WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);

echo json_encode($row);
}






?>