<?php

// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "shs_immersion";

// Create a connection
$conn = mysqli_connect($host, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database if it does not exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($conn, $sql)) {
    //echo "Database created successfully or already exists\n";
} else {
    //echo "Error creating database: " . mysqli_error($conn) . "\n";
}

// Select the database
mysqli_select_db($conn, $database);

// Create the tables if they do not exist
$sql = "
CREATE TABLE IF NOT EXISTS users (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(255) UNIQUE,
  password VARCHAR(255),
  account_type ENUM('student', 'school', 'partner')
);

CREATE TABLE IF NOT EXISTS student_profiles (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  first_name VARCHAR(255),
  middle_name VARCHAR(255),
  last_name VARCHAR(255),
  grade_level ENUM('11', '12'),
  strand ENUM('stem', 'humss', 'abm', 'gas', 'tvl'),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS school_profiles (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  school_name VARCHAR(255),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS partner_profiles (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  organization_name VARCHAR(255),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS performance_evaluations (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  evaluation_name VARCHAR(255),
  description TEXT,
  start_date DATE,
  end_date DATE,
  location VARCHAR(255),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS feedback_surveys (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  survey_name VARCHAR(255),
  description TEXT,
  start_date DATE,
  end_date DATE,
  location VARCHAR(255),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS risk_assessments (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  assessment_name VARCHAR(255),
  description TEXT,
  start_date DATE,
  end_date DATE,
  location VARCHAR(255),
  user_id INT(11),
  FOREIGN KEY (user_id) REFERENCES users(id)
);
";

if (mysqli_multi_query($conn, $sql)) {
    //echo "Tables created successfully or already exist\n";
} else {
    //echo "Error creating tables: " . mysqli_error($conn) . "\n";
}
?>