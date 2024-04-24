<?php

session_status() === PHP_SESSION_NONE ? session_start() : null;

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

$applicant_query = "SELECT * FROM applicants WHERE id = ?";
$stmt = $conn->prepare($applicant_query);
$stmt->bind_param("i", $applicant_id);
$stmt->execute();
$applicant_result = $stmt->get_result();
$applicant = $applicant_result->fetch_assoc();

$student_id = $applicant['student_id'];
$partner_id = $applicant['partner_id'];

$update_student_query = "UPDATE student_profiles SET current_work = ? WHERE user_id = ?";
$stmt = $conn->prepare($update_student_query);
$stmt->bind_param("ii", $partner_id, $student_id);
$stmt->execute();

$delete_applicant_query = "DELETE FROM applicants WHERE id = ?";
$stmt = $conn->prepare($delete_applicant_query);
$stmt->bind_param("i", $applicant_id);
$stmt->execute();

$stmt->close();
$conn->close();