<!doctype html>
<html>

<head>
    <title>Login | Workify</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/loginform.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- [if lt IE 9]> -->
    <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    <!-- <![endif] -->
    <!--    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/loginform.css"> -->
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->

</head>

<body>
    <!-- <noscript>
        <style>
            html {
                display: none;
            }
        </style>
        <meta http-equiv="refresh" content="0.0;url=https://www.workifyph.online/message.php">
    </noscript> -->
    <div class="row">


        <div id="login-form" class="colm-form">

            <!-- ---------------------------------Logo ---------------------- -->
            <a href="index.php"> <img class="logo-login" src="img/logo-login.svg" alt="Logo"></a>

            <div class="form-container">


                <!-- --------------------------------Google button--------------------- -->

                <!-- <a href="; ?>"><button id="google-login-btn" type="button"
                        class="login-with-google-btn">
                        Sign in with Google
                    </button></a> -->

                <!-- --------------------------------Line OR--------------------------->
                <form id="loginForm" method="POST">
                    <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                            <span role="separator" aria-orientation="horizontal">&nbsp;</span></span>
                        <div class="css-1lfd96m e15p7aqh0"><span class="css-sfm6zc e1wnkr790">or </span></div>
                    </div>
                    <label class="css-ddheu4"> Email address <span aria-hidden="true" class="css-ers2ar es2vvo71">&nbsp;*</span> </label>
                    <input autocomplete="email" type="text" placeholder="" id="login-email" name="login_email" required>

                    <label class="css-ddheu4"> Password <span aria-hidden="true" class="css-ers2ar es2vvo71">&nbsp;*</span>
                    </label>
                    <input autocomplete="current-password" type="password" placeholder="" id="login-password" name="login_password" required>
                    <button class="btn-login" style="height: 40px; font-size: 15px">
                        <span class="hover-underline-animation"> Continue </span>
                        <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16" fill="#fff">
                            <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
                        </svg>
                    </button>

                </form>

                <!-- --------------------------------Line OR--------------------------->

                <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                        <span role="separator" aria-orientation="horizontal"></span></span>

                </div>


                <a href="register.php">
                    <button class="btn-new" id="switch-to-register" style=" font-size: 15px">
                        <span class="hover-underline-animation">
                            Create new account
                        </span>

                    </button>

                </a>
                <a href="index.php" style="text-decoration: none;">
                    << Back</a>
            </div>

        </div>

    </div>
    <footer>
        <p>&copy; 2024 WorkifyPH. All rights reserved. | Junior Philippines Computer Society Students</p>
    </footer>
    <!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
</body>

</html>