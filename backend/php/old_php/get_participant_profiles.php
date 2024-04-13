<?php
session_start();

$user_id = $_SESSION['user_id'];

$host = "localhost";
$username = "root";
$password = "";
$db_name = "shs_immersion";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

$query = "SELECT * FROM student_profiles WHERE current_work = :user_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();

$studentProfiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

$response = [
    'student_profiles' => $studentProfiles
];
header('Content-Type: application/json');
echo json_encode($response);
