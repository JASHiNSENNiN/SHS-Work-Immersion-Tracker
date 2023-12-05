<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "shs_immersion";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, organization_name, stars, user_id FROM partner_profiles");
    $works = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');

    echo json_encode($works);
} catch (PDOException $e) {
    $error = array("error" => "Database connection failed: " . $e->getMessage());
    echo json_encode($error);
}
