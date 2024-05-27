<?php
session_status() === PHP_SESSION_NONE ? session_start() : null;
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/recaptcha/setupRecaptcha.php';
if (isset($_GET['code']) && !empty($_GET['code'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/validate_email.php';
    (Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/'))->load();

    $google_oauth_client_id = $_ENV['AUTH0_CLIENT_ID'];
    $google_oauth_client_secret = $_ENV['AUTH0_CLIENT_SECRET'];
    $google_oauth_redirect_uri = $_ENV['AUTH0_REDIRECT_URI'];
    $google_oauth_version = 'v3';

    $client = new Google_Client();
    $client->setClientId($google_oauth_client_id);
    $client->setClientSecret($google_oauth_client_secret);
    $client->setRedirectUri($google_oauth_redirect_uri);
    $client->addScope("https://www.googleapis.com/auth/userinfo.email");
    $client->addScope("https://www.googleapis.com/auth/userinfo.profile");

    $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($accessToken);

    if (isset($accessToken['access_token']) && !empty($accessToken['access_token'])) {
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        if (isset($google_account_info->email)) {

            session_regenerate_id();
            $_SESSION['email'] = $google_account_info->email;
            $_SESSION['name'] = $google_account_info->name;
            $_SESSION['google_picture'] = $google_account_info->picture;

            if (!checkDuplicateEmail()) {
                $host = "localhost";
                $username = $_ENV['MYSQL_USERNAME'];
                $password = $_ENV['MYSQL_PASSWORD'];
                $database = $_ENV['MYSQL_DBNAME'];

                $conn = new mysqli($host, $username, $password, $database);

                $stmt = $conn->prepare("INSERT INTO users (email) VALUES (?)");
                $stmt->bind_param("s", $_SESSION['email']);
                $stmt->execute();

                $stmt->close();
                $conn->close();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        window.onload = function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/backend/php/ajax/checkAccType.php', true);
            xhr.send();
        };
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>Set Up Account</title>
    <link rel="stylesheet" type="text/css" href="../css/header_landing.css">
    <link rel="stylesheet" type="text/css" href="../css/loginform_landing.css">
    <link rel="stylesheet" type="text/css" href="../css/get_start_log.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("setupForm").submit();
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
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
                        <form id="setupForm" method="POST" onsubmit="return validateSetupForm()">

                            <input type="text" for="email" name="email" id="email" placeholder="<?php echo $_SESSION['email'] ?>" value="<?php echo $_SESSION['email'] ?>" disabled>
                            <select id="account-type" name="account-type" required onchange="toggleFields()">
                                <option value class="null-type">Account Type:</option>
                                <option value="student">Student</option>
                                Studen <option value="school">School</option>
                                <option value="organization">Partner Organization</option>
                            </select>
                            <div id="student-fields">
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
                                <a style="text-decoration: none" href="login.php">
                                    <button class="btn-login" id="switch-to-login" onclick="showLoginForm()">

                                        <p>Back</p>
                                    </button></a>
                                <button class="g-recaptcha btn-new" data-sitekey="6Lfa9MIpAAAAALAoYvFEZ86D6SvXCMeXjJ1ULag6" data-callback="onSubmit" data-action="submit" style="right: 177px;">
                                    <p>Submit</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="m31.71 15.29-10-10-1.42 1.42 8.3 8.29H0v2h28.59l-8.29 8.29 1.41 1.41 10-10a1 1 0 0 0 0-1.41z" data-name="3-Arrow Right" />
                                    </svg>
                                </button>


                            </nav>
                        </form>

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
<script src="/backend/js/register.js"></script>
<script src="/js/get_start_log.js"></script>