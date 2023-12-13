<?php
session_start();

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

    $userSql = "SELECT * FROM users WHERE id = '$userID'";
    $userResult = $conn->query($userSql);

    if ($userResult->num_rows > 0) {
        $currentUser = $userResult->fetch_assoc();
        $response = array("success" => true, "user" => $currentUser);

        $studentSql = "SELECT * FROM student_profiles WHERE user_id = '$userID'";
        $studentResult = $conn->query($studentSql);

        if ($studentResult->num_rows > 0) {
            $studentProfile = $studentResult->fetch_assoc();
            $response["student_profile"] = $studentProfile;

            $currentWork = $studentProfile['current_work'];

            $partnerSql = "SELECT * FROM partner_profiles WHERE user_id = '$currentWork'";
            $partnerResult = $conn->query($partnerSql);

            if ($partnerResult->num_rows > 0) {
                $partnerProfile = $partnerResult->fetch_assoc();
                $response["partner_profile"] = $partnerProfile;
            } else {
                $response["partner_profile"] = null;
            }
        }
    } else {
        $response = array("success" => false, "message" => "");
    }

    $userResult->free_result();
    $studentResult->free_result();
    $partnerResult->free_result();

    $conn->close();
} else {
    $response = array("success" => false, "message" => "User not logged in");
}

header('Content-Type: application/json');
echo json_encode($response);
