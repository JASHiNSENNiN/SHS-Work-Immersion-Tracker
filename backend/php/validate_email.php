<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/session.php';
function checkDuplicateEmail($email)
{
    global $conn;

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