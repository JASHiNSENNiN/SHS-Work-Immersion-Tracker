<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, handle the error or redirect to the login page
    exit("User is not logged in");
}

// Get the currently logged-in user_id from the session
$user_id = $_SESSION['user_id'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shs_immersion";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the accept button is clicked
if (isset($_POST['accept'])) {
    $applicant_id = $_POST['applicant_id'];

    // Get the student_id of the accepted applicant
    $sql_student_id = "SELECT student_id FROM applicants WHERE id = $applicant_id";
    $result_student_id = $conn->query($sql_student_id);
    $row_student_id = $result_student_id->fetch_assoc();
    $student_id = $row_student_id['student_id'];

    // Update the current_work and org_name in the student_profiles table for the accepted student
    $sql_update_profile = "UPDATE student_profiles SET current_work = 'Accepted', org_name = 'Your Organization' WHERE user_id = $student_id";
    $conn->query($sql_update_profile);

    // Remove all instances of the student_profile id that applied in other works
    $sql_remove_applications = "DELETE FROM applicants WHERE student_id = $student_id AND id != $applicant_id";
    $conn->query($sql_remove_applications);
}

// Prepare the SQL query to retrieve the applicants' information based on the user_id
$sql = "SELECT applicants.id, student_profiles.first_name, student_profiles.last_name, student_profiles.strand, student_profiles.grade_level, student_profiles.stars, student_profiles.school
        FROM applicants
        INNER JOIN student_profiles ON applicants.student_id = student_profiles.user_id
        WHERE applicants.partner_id = $user_id";

$result = $conn->query($sql);

// Check if there are any applicants
if ($result->num_rows > 0) {
    // Create an array to store the applicants' information
    $applicants = array();

    // Fetch the applicants' information from the result set
    while ($row = $result->fetch_assoc()) {
        $applicants[] = $row;
    }

    // Convert the applicants array to JSON format
    $applicants_json = json_encode($applicants);

    // Send the JSON response
    header('Content-Type: application/json');
    echo $applicants_json;
} else {
    // No applicants found
    echo "No applicants found";
}

// Close the database connection
$conn->close();