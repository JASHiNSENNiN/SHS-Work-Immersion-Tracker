<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #1bbc9b;

    }

    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .wrapper .loader {
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
    }

    .loader .loading {
        background: #fff;
        width: 30px;
        height: 30px;
        border-radius: 50px;
        margin: 0 10px;
        animation: load 0.7s ease infinite;
    }

    .loader .loading.one {
        animation-delay: 0.3s;
    }

    .loader .loading.two {
        animation-delay: 0.4s;
    }

    .loader .loading.three {
        animation-delay: 0.5s;
    }

    @keyframes load {
        0% {
            width: 30px;
            height: 30px;
        }

        50% {
            width: 20px;
            height: 20px;

        }
    }
    </style>
</head>

<body>
    <section class="wrapper">
        <div class="loader">
            <div class="loading one"></div>
            <div class="loading two"></div>
            <div class="loading three"></div>
            <div class="loading four"></div>
        </div>
    </section>
</body>

</html>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT']
    . '/backend/php/validate_email.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/validate_email.php';


if (isset($_GET['code'])) {
    $_SESSION['code'] = $_GET['code'];
    $token = $client->fetchAccessTokenWithAuthCode($_SESSION['code']);
    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $_SESSION['email'] = $google_account_info->email;

    $accountType = getAccountype($_SESSION['email']);
    switch ($accountType) {
        case 'student':
            header("Location: https://www.student.workifyph.online/");
            exit;
        case 'school':
            header("Location: https://www.school.workifyph.online/");
            exit;
        case 'organization':
            header("Location: https://www.company.workifyph.online/");
            exit;
        default:
            header("Location: https://www.workifyph.online/get_started.php");
            exit;
    }
}
?>