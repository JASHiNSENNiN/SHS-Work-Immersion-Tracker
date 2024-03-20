<?php require_once '../vendor\autoload.php';

$clientID = '228321911034-th9gclqk8osq7trccfhahtitpjm9972s.apps.googleusercontent.com';
$clientSecret = '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';
$redirectURL = 'http://localhost/shs/php/login_form.php';

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


$session = $auth0->getCredentials();

if (null === $session || $session->accessTokenExpired) {
    // Redirect to Auth0 to authenticate the user.
    header('Location: ' . $auth0->login());
    exit;
} else {

    if ($auth0->getExchangeParameters()) {
        // If they're present, we should perform the code exchange.
        $auth0->exchange();
    }

    header("Location: http://localhost/shs/test.php", true, 301);
}
