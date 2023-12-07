<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "shs_immersion";

$conn = mysqli_connect($host, $username, $password, $database);

$requestData = json_decode(file_get_contents('php://input'), true);
$workId = $requestData['workId'];

session_start();
$userId = $_SESSION['user_id'];

$sql = "DELETE FROM applicants WHERE partner_id = ? AND student_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $workId, $userId);
mysqli_stmt_execute($stmt);

mysqli_close($conn);