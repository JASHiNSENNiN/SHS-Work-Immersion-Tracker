<?php
session_status() === PHP_SESSION_NONE ? session_start() : null;

if (isset($_SESSION['user_id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shs_immersion";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userID = $_SESSION['user_id'];

    $partnerSql = "SELECT * FROM partner_profiles WHERE user_id = '$userID'";
    $partnerResult = $conn->query($partnerSql);

    if ($partnerResult->num_rows > 0) {
        $partnerProfile = $partnerResult->fetch_assoc();
        $response = array("success" => true, "partner_profile" => $partnerProfile);
    } else {
        $response = array("success" => false, "message" => "Partner profile not found");
    }

    $partnerResult->free_result();
    $conn->close();
} else {
    $response = array("success" => false, "message" => "User not logged in");
}

header('Content-Type: application/json');
echo json_encode($response);