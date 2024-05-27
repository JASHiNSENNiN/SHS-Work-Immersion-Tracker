<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
(Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/otp_email_handler.php';

$secretKey = $_ENV['RECAPTCHA_SECRET_KEY'];

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
} else {
    $captcha = false;
}
$action = "submit";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secretKey, 'response' => $captcha)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

if ($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.7) {

    $accountType = $_POST["account-type"];

    $email = $_POST["email"];
    $firstName = "";
    $middleName = "";
    $lastName = "";
    $gradeLevel = "";
    $strand = "";
    $schoolName = "";
    $organizationName = "";
    $strandFocus = "";

    (Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();
    $host = "localhost";
    $username = $_ENV['MYSQL_USERNAME'];
    $password = $_ENV['MYSQL_PASSWORD'];
    $database = $_ENV['MYSQL_DBNAME'];

    $conn = new mysqli($host, $username, $password, $database);


    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $userRow = $result->fetch_assoc();
        $user_id = $userRow["id"];
    } else {
        header('Location: workifyph.online');
        exit;
    }

    $stmt->close();

    switch ($accountType) {
        case "student":
            $firstName = $_POST["first-name"];
            $middleName = $_POST["middle-name"];
            $lastName = $_POST["last-name"];
            $gradeLevel = $_POST["grade-level"];
            $strand = $_POST["strand"];

            $stmt = $conn->prepare("INSERT INTO student_profiles (first_name, middle_name, last_name, school, grade_level, strand, user_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssi", $firstName, $middleName, $lastName, $schoolName, $gradeLevel, $strand, $user_id);
            break;

        case "school":
            $schoolName = $_POST["school-name"];

            $stmt = $conn->prepare("INSERT INTO school_profiles (school_name, user_id) VALUES (?, ?)");
            $stmt->bind_param("si", $schoolName, $user_id);
            break;

        case "organization":
            $organizationName = $_POST["organization-name"];
            $strandFocus = $_POST["strand-focus"];

            $stmt = $conn->prepare("INSERT INTO partner_profiles (organization_name, strand, user_id) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $organizationName, $strandFocus, $user_id);
            break;
    }

    $stmt->execute();
    $stmt->close();
    $conn->close();
}
