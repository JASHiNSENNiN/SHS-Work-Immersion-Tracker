<?php
session_start();

$host = "localhost";
$username = "u487450272_workify_admin";
$password = "@--Workify000";
$database = "u487450272_shs_immersion";
$conn = new mysqli($host, $username, $password, $database);

$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $_SESSION['email'], $_SESSION['password']);
$stmt->execute();

$stmt->close();
$conn->close();

$destination = 'https://www.workifyph.online/get_started.php';
header("Location: $destination");
exit();
exit();
