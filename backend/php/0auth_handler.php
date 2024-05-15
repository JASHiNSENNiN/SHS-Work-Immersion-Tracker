<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
(Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/'))->load();
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/validate_email.php';

$auth0 = new \Auth0\SDK\Auth0([
    'clientId' => $_ENV['AUTH0_CLIENT_ID'],
    'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
    'redirectUrl' => $_ENV['AUTH0_REDIRECT_URI']
]);

$client = new Google_Client();
$client->setClientId($_ENV['AUTH0_CLIENT_ID']);
$client->setClientSecret($_ENV['AUTH0_CLIENT_SECRET']);
$client->addScope('profile');
$client->addScope('email');


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
            $client->setRedirectUri('https://www.student.workifyph.online/');
        case 'school':
            $client->setRedirectUri('https://www.school.workifyph.online/');
        case 'organization':
            $client->setRedirectUri('https://www.company.workifyph.online/');
        default:
            $client->setRedirectUri('https://www.workifyph.online/get_started.php');
    }
}