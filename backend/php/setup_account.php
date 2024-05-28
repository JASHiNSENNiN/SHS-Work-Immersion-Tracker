<?php
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
$userRow = $result->fetch_assoc();
$user_id = $userRow["id"];
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

switch ($accountType) {
    case "student":
        header('Location: student.workifyph.online');
        exit;

    case "school":
        header('Location: school.workifyph.online');
        exit;

    case "organization":
        header('Location: company.workifyph.online');
        exit;
}
