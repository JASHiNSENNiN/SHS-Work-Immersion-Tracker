<?php
require_once 'config.php';

$formData = json_decode(file_get_contents('php://input'), true);
$email = $formData['email'];
$password = $formData['password'];

$conn = mysqli_connect($host, $username, "", $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  $hashedPassword = hash('sha256', $password);
  if (password_verify($hashedPassword, $row['password'])) {
    session_start();

    $_SESSION['user_id'] = $row['id'];
    $accountType = $row['account_type'];
    switch ($accountType) {
      case 'organization':
        $response = array("success" => true, "redirectUrl" => "/shs/organization.php");
        break;
      case 'school':
        $response = array("success" => true, "redirectUrl" => "/shs/school.php");
        break;
      case 'student':
        $response = array("success" => true, "redirectUrl" => "/shs/student.php");
        break;
      default:
        $response = array("success" => false, "message" => "Invalid account type");
        break;
    }
  } else {
    $response = array("success" => false, "message" => "Invalid password");
  }
} else {
  $response = array("success" => false, "message" => "User not found");
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
exit;
?>