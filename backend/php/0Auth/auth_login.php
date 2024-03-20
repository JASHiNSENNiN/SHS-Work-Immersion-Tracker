<?php require_once '../vendor\autoload.php';

// client request sa elgoog
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURL);
$client->addScope('profile');
$client->addScope('email');

$auth0 = new \Auth0\SDK\Auth0([
    'clientId' => $clientID,
    'clientSecret' => $clientSecret,
    'redirectUrl' => $redirectURL,
]);