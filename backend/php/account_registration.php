<?php
session_start();
$host = "localhost";
$username = "u487450272_workify_admin";
$password = "@--Workify000";
$database = "u487450272_shs_immersion";
$conn = mysqli_connect($host, $username, $password, $database);

$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("sss", $_SESSION['email'], $_SESSION['password']);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: get_started.php");
exit();
