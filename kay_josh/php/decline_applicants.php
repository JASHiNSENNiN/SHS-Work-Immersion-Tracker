<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    exit("User is not logged in");
}

$user_id = $_SESSION['user_id'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "shs_immersion";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$applicant_id = $_POST['applicant_id'];

// Remove applicant from the applicants table
$delete_applicant_query = "DELETE FROM applicants WHERE id = ?";
$stmt = $conn->prepare($delete_applicant_query);
$stmt->bind_param("i", $applicant_id);
$stmt->execute();

$stmt->close();
$conn->close();