<?php

// Retrieve the email from the request body
$email = json_decode(file_get_contents('php://input'), true)['email'];

// Connect to the MySQL database
$conn = mysqli_connect($host, $username, "", $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement with placeholders
$sql = "SELECT COUNT(*) AS count FROM users WHERE email = ?";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameter
$stmt->bind_param('s', $email);

// Execute the statement
if (!$stmt->execute()) {
  echo json_encode(['error' => $stmt->error]);
  $stmt->close();
  $conn->close();
  exit();
}

// Get the result
$result = $stmt->get_result();

// Fetch the row
$row = $result->fetch_assoc();

// Check if the email already exists
$emailExists = $row['count'] > 0;

// Close the statement and connection
$stmt->close();
$conn->close();

// Send the response
echo json_encode(['exists' => $emailExists]);
?>