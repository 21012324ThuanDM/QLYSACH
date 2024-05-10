<?php
$host = "mysql-3e3d4594-st-cecc.l.aivencloud.com";
$username_db = "avnadmin";
$password_db = "AVNS_uFnemXzvFMzhrYaAi0y";
$database = "QUANLYSACH";
$port = '18458';

$db = new mysqli($host, $username_db, $password_db, $database, $port);

if ($db->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $db->connect_error);
}

$query = "SELECT * FROM Sach";
$result = $db->query($query);

$sachData = array();
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sachData[] = $row;
        }
    }
}

$db->close();

return $sachData;
?>