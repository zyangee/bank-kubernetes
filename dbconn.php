<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$serverName = getenv('DB_SERVER');
$database = getenv('DB_NAME');
$uid = getenv('DB_USERNAME');
$pwd = getenv('DB_PASSWORD');

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $uid, $pwd);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error connecting to mysql");
}
?>
