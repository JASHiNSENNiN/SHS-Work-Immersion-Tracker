
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/loginform.css">
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

                <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                        <span role="separator" aria-orientation="horizontal">&nbsp;</span></span>
                    <div class="css-1lfd96m e15p7aqh0"><span class="css-sfm6zc e1wnkr790">or </span></div>
                </div>
                <label class="css-ddheu4"> Email address <span aria-hidden="true" class="css-ers2ar es2vvo71">&nbsp;*</span> </label>
                <input autocomplete="email" type="text" placeholder="" id="login-email" name="login-email" required>

                <label class="css-ddheu4"> Password <span aria-hidden="true" class="css-ers2ar es2vvo71">&nbsp;*</span>
                </label>
                <input autocomplete="current-password" type="password" placeholder="" id="login-password" name="login-password" required>
                <button class="btn-login" style="height: 40px; font-size: 15px" onclick="login()"> <span class="hover-underline-animation"> Continue </span>
                    <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16" fill="#fff">
                        <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
                    </svg>
                </button>

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
            <div class="form-container">
                <input type="text" for="email" name="email" id="email" placeholder="Email address" required>
                <input type="password" placeholder="Password" id="password" name="confirm-password" required>
                <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password" required>
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
                <button class="btn-new" id="switch-to-login" onclick="showLoginForm()">
                    Log in to Existing Account
                </button>
            </div>
        </div>

        <script src="../backend/js/login.js"></script>
    </div>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

    </footer>
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