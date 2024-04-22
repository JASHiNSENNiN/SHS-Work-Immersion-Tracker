<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/0auth_handler.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/recaptcha.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/loginform.css">
    <script src="../backend/js/session_handler.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="row">


        <div id="login-form" class="colm-form">

            <!-- ---------------------------------Logo ---------------------- -->
            <img class="logo-login" src="../img/logo-login.svg" alt="Logo">



            <div class="form-container">


                <!-- --------------------------------Google button--------------------- -->

                <a href="<?php echo $client->createAuthUrl(); ?>"><button type="button" class="login-with-google-btn">
                        Sign in with Google
                    </button></a>


                <!-- --------------------------------Line OR--------------------------->
                <form method="POST" onsubmit="return validateForm()"
                    action="<?php echo $_SERVER['DOCUMENT_ROOT'] . '/backend/php/recaptcha.php' ?>">
                    <input type="hidden" name="login_form" value="login_form">
                    <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                            <span role="separator" aria-orientation="horizontal">&nbsp;</span></span>
                        <div class="css-1lfd96m e15p7aqh0"><span class="css-sfm6zc e1wnkr790">or </span></div>
                    </div>
                    <label class="css-ddheu4"> Email address <span aria-hidden="true"
                            class="css-ers2ar es2vvo71">&nbsp;*</span> </label>
                    <input autocomplete="email" type="text" placeholder="" id="login-email" name="login_email" required>

                    <label class="css-ddheu4"> Password <span aria-hidden="true"
                            class="css-ers2ar es2vvo71">&nbsp;*</span>
                    </label>
                    <input autocomplete="current-password" type="password" placeholder="" id="login-password"
                        name="login_password" required>
                    <input <button class="g-recaptcha" data-sitekey="6Lfa9MIpAAAAALAoYvFEZ86D6SvXCMeXjJ1ULag6"
                        data-callback='onSubmit' data-action='login_form_submit' class="btn-login"
                        style="height: 40px; font-size: 15px"> <span class="hover-underline-animation"> Continue </span>
                    <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10"
                        viewBox="0 0 46 16" fill="#fff">
                        <path id="Path_10" data-name="Path 10" form
                            d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                            transform="translate(30)"></path>
                        g>
                        </button>
                </form>

                <!-- --------------------------------Line OR--------------------------->

                <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                        <span role="separator" aria-orientation="horizontal"></span></span>

                </div>

                <button class="btn-new" id="switch-to-register" style=" font-size: 15px" onclick="showLoginForm()">
                    <span class="hover-underline-animation">
                        Create new account
                    </span>

                </button>
            </div>

        </div>
        <div id="register-form" class="colm-form">
            <img class="logo-login" src="../img/logo-login.svg" alt="Logo">

            <div class="form-container">
                <a href="<?php echo $client->createAuthUrl(); ?>"><button type="button" class="login-with-google-btn">
                        Register with Google
                    </button></a>

                <form id="registerForm" action="one_time_password.php" method="POST"
                    onsubmit="return validateRegisterForm()">
                    <input type="hidden" name="register_form" value="register_form">
                    <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                            <span role="separator" aria-orientation="horizontal">&nbsp;</span></span>
                        <div class="css-1lfd96m e15p7aqh0"><span class="css-sfm6zc e1wnkr790">or </span></div>
                    </div>
                    <input type="text" for="email" name="register_email" id="email" placeholder="Email address"
                        required>
                    <input type="password" placeholder="Password" id="password" name="register_password" required>
                    <input type="password" placeholder="Confirm Password" id="confirm-password"
                        name="register_confirm_password" required>
                    <button class="g-recaptcha" data-sitekey="6Lfa9MIpAAAAALAoYvFEZ86D6SvXCMeXjJ1ULag6"
                        data-callback='onSubmit' data-action='register_form_submit' type="submit" class="btn-login"
                        onclick="">Register</button>
                    <button class="btn-new" id="switch-to-login" onclick="showLoginForm()">
                        Log in to Existing Account
                    </button>
                </form>
            </div>
        </div>

        <script src="../backend/js/register.js"></script>
    </div>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

    </footer>
</body>

</html>