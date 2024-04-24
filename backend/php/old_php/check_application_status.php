<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "shs_immersion";

$conn = mysqli_connect($host, $username, $password, $database);

$workId = $_GET['workId'];

session_status() === PHP_SESSION_NONE ? session_start() : null;
$userId = $_SESSION['user_id'];

$sql = "SELECT * FROM applicants WHERE partner_id = ? AND student_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ii", $workId, $userId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $response = array('status' => 'applied');
} else {
    $response = array('status' => 'not applied');
}

mysqli_free_result($result);

echo json_encode($response);

mysqli_stmt_close($stmt);
mysqli_close($conn);