<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/config.php';

$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("sss", $_SESSION['email'], $_SESSION['password']);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: get_started.php");
exit();
