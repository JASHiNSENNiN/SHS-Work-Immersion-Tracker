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

    $worksArray = [];
    foreach ($works as $work) {
        $worksArray[] = $work;
    }

    header('Content-Type: application/json');
    echo json_encode($worksArray);
} catch (PDOException $e) {
    $error = array("error" => "Database connection failed: " . $e->getMessage());
    echo json_encode($error);
}