<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT']
    . '/backend/php/validate_email.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/validate_email.php';


$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

$host = "localhost";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database = $_ENV['MYSQL_DBNAME'];

$conn = new mysqli($host, $username, $password, $database);

$stmt = $conn->prepare("INSERT INTO users (email) VALUES (?)");
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$stmt->close();
$conn->close();
if (checkAccType() === false) {
} else {
}
