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

$sql = "INSERT INTO applicants (partner_id, student_id) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $workId, $userId);

if (mysqli_stmt_execute($stmt)) {
    echo "Application added successfully.";
} else {
    echo "Error adding application: " . mysqli_error($conn);
}

mysqli_stmt_store_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);