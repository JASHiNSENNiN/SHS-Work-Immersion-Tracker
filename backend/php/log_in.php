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
    $user_id = $_SESSION['user_id'];
    $accountType = $row['account_type'];

    switch ($accountType) {
      case 'organization':
        $response = array("success" => true, "redirectUrl" => "/shs/pages/organization.php");
        break;
      case 'school':
        $response = array("success" => true, "redirectUrl" => "/shs/pages/school.php");
        break;
      case 'student':
        $response = array("success" => true, "redirectUrl" => "/shs/pages/student.php");
        $query = "SELECT * FROM student_profiles WHERE user_id = $user_id";
        $result = mysqli_query($conn, $query);
        $profile = mysqli_fetch_assoc($result);
        $_SESSION['student_id'] = $profile['id'];
        $_SESSION['first_name'] = $profile['first_name'];
        $_SESSION['middle_name'] = $profile['middle_name'];
        $_SESSION['last_name'] = $profile['last_name'];
        $_SESSION['school'] = $profile['school'];
        $_SESSION['grade_level'] = $profile['grade_level'];
        $_SESSION['strand'] = $profile['strand'];
        $_SESSION['stars'] = $profile['stars'];
        $_SESSION['current_work'] = $profile['current_work'];
        mysqli_free_result($result);
        mysqli_close($conn);
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

header('Content-Type: application/json');
echo json_encode($response);