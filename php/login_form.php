<?php
include_once "../backend/php/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search Portal</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/loginform.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="../index.php">
                <img src="../img/logov3.jpg" alt="Logo">
            </a>

        </div>
        <nav>
            <a href="../index.php">Back</a>
        </nav>
    </header>


    <div class="row">

        <div id="login-form" class="colm-form">
            <div class="form-container">
                <input autocomplete="email" type="text" placeholder="Email address" id="login-email" name="login-email"
                    required>
                <input autocomplete="current-password" type="password" placeholder="Password" id="login-password"
                    name="login-password" required>

                <!-- login button -->
                <button class="btn-login" onclick="login()">Login</button>

                <!-- form switching -->
                <button class="btn-new" id="switch-to-register" onclick="showLoginForm()">Create New
                    Account</button>
            </div>
        </div>
        <div id="register-form" class="colm-form">
            <div class="form-container">
                <input type="text" for="email" name="email" id="email" placeholder="Email address" required>
                <input type="password" placeholder="Password" id="password" name="confirm-password" required>
                <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password"
                    required>
                <select id="account-type" name="account-type" required onchange="toggleFields()">
                    <option value class="null-type">Account Type:</option>
                    <option value="student">Student</option>
                    <option value="school">School</option>
                    <option value="organization">Partner Organization</option>
                </select>
                <div id="student-fields" style="display: none;">
                    <input type="text" placeholder="First Name" id="first-name" name="first-name">
                    <input type="text" placeholder="Middle Name" id="middle-name" name="middle-name">
                    <input type="text" placeholder="Last Name" id="last-name" name="last-name">
                    <select name="grade-level" id="grade-level">
                        <option value class="null-type">Grade Level:</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select name="strand" id="strand">
                        <option value class="null-type">Strand:</option>
                        <option value="stem">STEM</option>
                        <option value="humss">HUMSS</option>
                        <option value="abm">ABM</option>
                        <option value="gas">GAS</option>
                        <option value="tvl">TVL</option>
                    </select>
                </div>
                <div id="school-fields" style="display: none;">
                    <input type="text" placeholder="School Name" id="school-name" name="school-name">
                </div>
                <div id="partner-fields" style="display: none;">
                    <input type="text" placeholder="Organization Name" id="organization-name" name="organization-name">
                    <select name="strand-focus" id="strand-focus">
                        <option value class="null-type">Strand:</option>
                        <option value="stem">STEM</option>
                        <option value="humss">HUMSS</option>
                        <option value="abm">ABM</option>
                        <option value="gas">GAS</option>
                        <option value="tvl">TVL</option>
                    </select>
                </div>
                <button class="btn-login" onclick="validateForm()">Register</button>

                <!-- login button -->
                <button class="btn-new" id="switch-to-login" onclick="showLoginForm()">
                    Log in to Existing Account
                </button>
            </div>
        </div>

        <script src="../backend/js/login.js"></script>
    </div>
</body>

</html>
<script>
function printCookies() {
    const cookies = document.cookie.split(";")
        .map(cookie => cookie.trim());

    console.log("Cookies:");
    cookies.forEach(cookie => {
        console.log(cookie);
    });
}


window.onload = printCookies;
</script>
<script src="../backend/js/session_handler.js"></script>