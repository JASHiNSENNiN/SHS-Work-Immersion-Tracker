<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT']
    . '/backend/php/validate_email.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/validate_email.php';


if (checkDuplicateEmail($_SESSION['email']) == true) {
    if (checkEmailPass() === true) {
        $destination = 'https://www.workifyph.online/login.php?error=0AuthDuplicateEmail';
        header("Location: $destination");
        exit();
    } else {
    }
    if (checkAccType() === false) {
        $destination = 'https://www.workifyph.online/get_started.php';
        header("Location: $destination");
        exit();
    }
} else {
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
        $destination = 'https://www.workifyph.online/get_started.php';
        header("Location: $destination");
        exit();
    } else {
    }
}