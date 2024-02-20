<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "shs_immersion";


$conn = mysqli_connect($host, $username, $password);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($conn, $sql)) {
  //echo "Database created successfully or already exists\n";
} else {
  //echo "Error creating database: " . mysqli_error($conn) . "\n";
}


mysqli_select_db($conn, $database);

$sql = "
CREATE TABLE IF NOT EXISTS users (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(255) UNIQUE,
  password VARCHAR(255),
  account_type ENUM('student', 'school', 'organization')
);

CREATE TABLE IF NOT EXISTS school_profiles (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  school_name VARCHAR(255),
  stars INT(10),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS student_profiles (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  first_name VARCHAR(255),
  middle_name VARCHAR(255),
  last_name VARCHAR(255),
  grade_level ENUM('11', '12'),
  strand ENUM('STEM', 'HUMSS', 'ABM', 'GAS', 'TVL'),
  stars INT(10),
  current_work INT(11),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS partner_profiles (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  organization_name VARCHAR(255),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS works (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  partner_id INT(11),
  date_of_publication DATE,
  employment_type VARCHAR(255),
  work_name VARCHAR(255),
  work_description TEXT,
  work_address VARCHAR(255),
  work_ratings DECIMAL(3,2),
  FOREIGN KEY (partner_id) REFERENCES partner_profiles(id)
);

CREATE TABLE IF NOT EXISTS student_statistics (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  student_profile_id INT(11),
  total_feedbacks INT(11),
  total_evaluations INT(11),
  average_rating DECIMAL(3,2),
  FOREIGN KEY (student_profile_id) REFERENCES student_profiles(id)
);

CREATE TABLE IF NOT EXISTS school_statistics (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  school_profile_id INT(11),
  total_students INT(11),
  average_student_rating DECIMAL(3,2),
  FOREIGN KEY (school_profile_id) REFERENCES school_profiles(id)
);

CREATE TABLE IF NOT EXISTS partner_statistics (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  partner_profile_id INT(11),
  total_works INT(11),
  average_work_rating DECIMAL(3,2),
  FOREIGN KEY (partner_profile_id) REFERENCES partner_profiles(id)
);

CREATE TABLE IF NOT EXISTS work_evaluation_criteria (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  criteria_name VARCHAR(255),
  description TEXT
);

CREATE TABLE IF NOT EXISTS work_evaluations (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  work_id INT(11),
  student_id INT(11),
  FOREIGN KEY (work_id) REFERENCES works(id),
  FOREIGN KEY (student_id) REFERENCES student_profiles(id)
);

CREATE TABLE IF NOT EXISTS work_evaluation_ratings (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  work_evaluation_id INT(11),
  criteria_id INT(11),
  rating DECIMAL(3,2),
  FOREIGN KEY (work_evaluation_id) REFERENCES work_evaluations(id),
  FOREIGN KEY (criteria_id) REFERENCES work_evaluation_criteria(id)
);

CREATE TABLE IF NOT EXISTS student_evaluation_criteria (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  criteria_name VARCHAR(255),
  description TEXT
);

CREATE TABLE IF NOT EXISTS student_evaluations (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  evaluator_id INT(11),
  student_id INT(11),
  FOREIGN KEY (evaluator_id) REFERENCES users(id),
  FOREIGN KEY (student_id) REFERENCES student_profiles(id)
);

CREATE TABLE IF NOT EXISTS student_evaluation_ratings (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  student_evaluation_id INT(11),
  criteria_id INT(11),
  rating DECIMAL(3,2),
  FOREIGN KEY (student_evaluation_id) REFERENCES student_evaluations(id),
  FOREIGN KEY (criteria_id) REFERENCES student_evaluation_criteria(id)
);

";

if (mysqli_multi_query($conn, $sql)) {
  //echo "Tables created successfully or already exist\n";
} else {
  //echo "Error creating tables: " . mysqli_error($conn) . "\n";
}
