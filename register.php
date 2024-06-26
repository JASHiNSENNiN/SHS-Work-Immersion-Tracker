<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/recaptcha/registerRecaptcha.php';
    ?>
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/loginform.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            if (validateRegisterForm()) {
                document.getElementById("registerForm").submit();
            }
        }
    </script>
</head>

<body>
    <noscript>
        <style>
            html {
                display: none;
            }
        </style>
        <meta http-equiv="refresh" content="0.0;url=https://www.workifyph.online/message.php">
    </noscript>
    <div class="row">
        <div id="register-form" class="colm-form">
            <a href="index.php"><img class="logo-login" src="../img/logo-login.svg" alt="Logo"></a>

            <div class="form-container">
                <a href="/backend/php/0auth_handler.php"><button type="button" class="login-with-google-btn">
                        Register with Google
                    </button></a>

                <form id="registerForm" method="POST" onsubmit="return validateRegisterForm()">
                    <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                            <span role="separator" aria-orientation="horizontal">&nbsp;</span></span>
                        <div class="css-1lfd96m e15p7aqh0"><span class="css-sfm6zc e1wnkr790">or </span></div>
                    </div>
                    <input type="text" for="email" name="register_email" id="email" placeholder="Email address" required>
                    <input type="password" placeholder="Password" id="password" name="register_password" required>
                    <input type="password" placeholder="Confirm Password" id="confirm-password" name="register_confirm_password" required>

                    <button id="register-button" class="g-recaptcha btn-new" data-sitekey="6Lfa9MIpAAAAALAoYvFEZ86D6SvXCMeXjJ1ULag6" data-callback="onSubmit" data-action="submit">Register</button>
                </form>

                <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                        <span role="separator" aria-orientation="horizontal"></span></span>

                </div>
                <a href="login.php"><button class="btn-new" id="switch-to-login">
                        Log in to Existing Account
                    </button>
                </a>


            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 WorkifyPH. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

    </footer>
</body>

</html>
<script src="/backend/js/register.js"></script>