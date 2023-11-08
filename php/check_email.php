<?php

$email = json_decode(file_get_contents('php://input'), true)['email'];

$conn = mysqli_connect($host, $username, "", $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) AS count FROM users WHERE email = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param('s', $email);

if (!$stmt->execute()) {
  echo json_encode(['error' => $stmt->error]);
  $stmt->close();
  $conn->close();
  exit();
}

$result = $stmt->get_result();

$row = $result->fetch_assoc();

$emailExists = $row['count'] > 0;

$stmt->close();
$conn->close();

echo json_encode(['exists' => $emailExists]);
?>