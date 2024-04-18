<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

(Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../'))->load();

$auth0 = new \Auth0\SDK\Auth0([
    'clientId' => $_ENV['AUTH0_CLIENT_ID'],
    'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
    'redirectUrl' => $_ENV['AUTH0_REDIRECT_URI']
]);

$client = new Google_Client();
$client->setClientId($_ENV['AUTH0_CLIENT_ID']);
$client->setClientSecret($_ENV['AUTH0_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['AUTH0_REDIRECT_URI']);
$client->addScope('profile');
$client->addScope('email');;



// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email =  $google_account_info->email;
    $name =  $google_account_info->name;

    
}