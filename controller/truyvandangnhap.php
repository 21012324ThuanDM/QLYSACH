<?php
session_start();

require_once ('../model/nguoidung.php');

$host = "mysql-3e3d4594-st-cecc.l.aivencloud.com";
$username_db = "avnadmin";
$password_db = "AVNS_uFnemXzvFMzhrYaAi0y";
$database = "QUANLYSACH";
$port = '18458';

$db = new mysqli($host, $username_db, $password_db, $database, $port);

if ($db->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $userModel = new nguoidung($db);
    $isAuthenticated = $userModel->authenticateUser($username, $password);

    if ($isAuthenticated) {
        $_SESSION["IsLogin"] = true;
        header("Location: ../view/Sach.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
}