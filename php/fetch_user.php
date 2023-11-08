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

    $sql = "SELECT * FROM users WHERE id = '$userID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $currentUser = $result->fetch_assoc();
        $response = array("success" => true, "user" => $currentUser);
    } else {
        $response = array("success" => false, "message" => "User data not found");
    }

    $conn->close();
    } else {
        $response = array("success" => false, "message" => "User not logged in");
    }

header('Content-Type: application/json');
echo json_encode($response);
?>