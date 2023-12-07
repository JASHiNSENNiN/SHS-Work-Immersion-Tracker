<?php
require_once 'config.php';

$formData = json_decode(file_get_contents('php://input'), true);
echo "register php started";

$email = $formData['email'];
$password = $formData['password'];
$accountType = $formData['accountType'];

$conn = mysqli_connect($host, $username, "", $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$hashedPassword = hash('sha256', $password);

$encryptedPassword = password_hash($hashedPassword, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (email, password, account_type) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $email, $encryptedPassword, $accountType);

if (!$stmt->execute()) {
  echo "Error: " . $stmt->error;
  $stmt->close();
  $conn->close();
  exit();
}

$userID = $stmt->insert_id;
$stmt->close();

if ($accountType === 'student') {
  $firstName = $formData['firstName'];
  $middleName = $formData['middleName'];
  $lastName = $formData['lastName'];
  $gradeLevel = $formData['gradeLevel'];
  $strand = $formData['strand'];

  $sql = "INSERT INTO student_profiles (first_name, middle_name, last_name, grade_level, strand, user_id) VALUES (?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);

  $stmt->bind_param('sssssi', $firstName, $middleName, $lastName, $gradeLevel, $strand, $userID);

  if (!$stmt->execute()) {
    echo "Error: " . $stmt->error;
    $stmt->close();
    $conn->close();
    exit();
  }
  $stmt->close();
} elseif ($accountType === 'school') {
  $schoolName = $formData['schoolName'];

  $sql = "INSERT INTO school_profiles (school_name, user_id) VALUES (?, ?)";

  $stmt = $conn->prepare($sql);

  $stmt->bind_param('si', $schoolName, $userID);

  if (!$stmt->execute()) {
    echo "Error: " . $stmt->error;
    $stmt->close();
    $conn->close();
    exit();
  }
  $stmt->close();
} elseif ($accountType === 'organization') {
  $organizationName = $formData['organizationName'];
  $strandFocus = $formData['strandFocus'];

  $sql = "INSERT INTO partner_profiles (organization_name, strand, user_id) VALUES (?, ?, ?)";

  $stmt = $conn->prepare($sql);

  $stmt->bind_param('ssi', $organizationName, $strandFocus, $userID);

  if (!$stmt->execute()) {
    echo "Error: " . $stmt->error;
    $stmt->close();
    $conn->close();
    exit();
  }
  $stmt->close();
}

echo "User registered successfully";

$conn->close();