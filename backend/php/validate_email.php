<?php
session_start();

function checkDuplicateEmail($email)
{
    $host = "localhost";
    $username = "u487450272_workify_admin";
    $password = "@--Workify000";
    $database = "u487450272_shs_immersion";
    $conn = new mysqli($host, $username, $password, $database);

    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}
