<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    exit("User is not logged in");
}

$user_id = $_SESSION['user_id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shs_immersion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['accept'])) {
    $applicant_id = $_POST['applicant_id'];

    $sql_student_id = "SELECT student_id FROM applicants WHERE id = $applicant_id";
    $result_student_id = $conn->query($sql_student_id);
    $row_student_id = $result_student_id->fetch_assoc();
    $student_id = $row_student_id['student_id'];

    $sql_update_profile = "UPDATE student_profiles SET current_work = 'Accepted', org_name = 'Your Organization' WHERE user_id = $student_id";
    $conn->query($sql_update_profile);

    $sql_remove_applications = "DELETE FROM applicants WHERE student_id = $student_id AND id != $applicant_id";
    $conn->query($sql_remove_applications);
}

$sql = "SELECT * FROM applicants WHERE applicants.partner_id = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $applicants = array();
    while ($row = $result->fetch_assoc()) {
        $applicants[] = $row;
    }
    $applicants_json = json_encode($applicants);

    header('Content-Type: application/json');
    echo $applicants_json;
} else {
    echo "";
}

$conn->close();
