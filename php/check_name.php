<?php
$host = "localhost";
$username = "root";
$database = "shs_immersion";

$formData = json_decode(file_get_contents('php://input'), true);
$checkName = $formData['checkName'];
$accountType = $formData['accountType'];

if ($accountType === "school") {
  $get_account = "school_profiles";
  $type_name = "school_name";
} else {
  $get_account = "partner_profiles";
  $type_name = "organization_name";
}

$conn = mysqli_connect($host, $username, "", $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) AS count FROM $get_account WHERE $type_name = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param('s', $checkName);

if (!$stmt->execute()) {
  echo json_encode(['error' => $stmt->error]);
  $stmt->close();
  $conn->close();
  exit();
}

$result = $stmt->get_result();

$row = $result->fetch_assoc();

$nameExists = $row['count'] > 0;

$result->free_result();

$stmt->close();
$conn->close();

echo json_encode($nameExists);