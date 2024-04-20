<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/0Auth/0auth_handler.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>Set Up Account</title>
    <link rel="stylesheet" type="text/css" href="../css/header_landing.css">
    <link rel="stylesheet" type="text/css" href="../css/loginform_landing.css">
    <link rel="stylesheet" type="text/css" href="../css/get_start_log.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>

    <div class="container">

        <div class="overlay">
            <p class="screen">Lets setup your account</p>
            <div class="intro">
                <button class="myBtn" onclick="fadeOut()"> get started</button>
            </div>
        </div>

        <div class="overlay-2"></div>

        <div class="content">
            <div class="row">
                <div id="register-form" class="colm-form">
                    <!-- ---------------------------------Logo ---------------------- -->
                    <img class="logo-login" src="../img/logo-login.svg" alt="Logo">

                    <div class="form-container">

                        <input type="text" for="email" name="email" id="email" placeholder="<?php echo $email ?>" disabled>
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
                        <nav>
                            <a href="login_form.php"><button class="btn-login" id="switch-to-login" onclick="showLoginForm()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" data-name="4-Arrow Left" />
                                    </svg>
                                    <p> Back</p>
                                </button></a>
                            <button class="btn-new" onclick="validateForm()">
                                <p>Submit</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="m31.71 15.29-10-10-1.42 1.42 8.3 8.29H0v2h28.59l-8.29 8.29 1.41 1.41 10-10a1 1 0 0 0 0-1.41z" data-name="3-Arrow Right" />
                                </svg>
                            </button>


                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <!-- <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>        
    </footer> -->
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
<script src="../backend/js/login.js"></script>
<script src="../backend/js/session_handler.js"></script>
<script src="../js/get_start_log.js"></script>