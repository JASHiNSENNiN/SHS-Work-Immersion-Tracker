<?php
if (isset($_GET['code'])) {
    $_SESSION['code'] = $_GET['code'];
    $token = $client->fetchAccessTokenWithAuthCode($_SESSION['code']);
    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $_SESSION['email'] = $google_account_info->email;
}

if (isset($_SESSION['email'])) {
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
            exit;
    }
}
