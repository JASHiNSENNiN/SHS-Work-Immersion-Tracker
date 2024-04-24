<?php
session_status() === PHP_SESSION_NONE ? session_start() : null;

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
(Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();

$host = "localhost";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database = $_ENV['MYSQL_DBNAME'];

$conn = new mysqli($host, $username, $password, $database);

$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $_SESSION['email'], $_SESSION['password']);
$stmt->execute();

$stmt->close();
$conn->close();

$destination = 'https://www.workifyph.online/get_started.php';
header("Location: $destination");
exit();
