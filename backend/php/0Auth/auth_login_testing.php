<?php
require_once '../vendor\autoload.php';

(Dotenv\Dotenv::createImmutable(__DIR__))->load();

// Now instantiate the Auth0 class with our configuration:
$auth0 = new \Auth0\SDK\Auth0([
    'domain' => $_ENV['AUTH0_DOMAIN'],
    'clientId' => $_ENV['AUTH0_CLIENT_ID'],
    'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
    'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET']
]);

use Steampixel\Route;

define('ROUTE_URL_INDEX', rtrim($_ENV['AUTH0_BASE_URL'], '/'));
define('ROUTE_URL_LOGIN', ROUTE_URL_INDEX . '/login_form.php');
define('ROUTE_URL_CALLBACK', ROUTE_URL_INDEX . '/test.php');
define('ROUTE_URL_LOGOUT', ROUTE_URL_INDEX . '/logout');



$name = $session->user['name'] ?? $session->user['nickname'] ?? $session->user['email'] ?? 'Unknown';



Route::add('/login', function () use ($auth0) {
    // It's a good idea to reset user sessions each time they go to login to avoid "invalid state" errors, should they hit network issues or other problems that interrupt a previous login process:
    $auth0->clear();

    // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
    header("Location: " . $auth0->login(ROUTE_URL_CALLBACK));
    exit;
});


Route::add('/callback', function () use ($auth0) {
    // Have the SDK complete the authentication flow:
    $auth0->exchange(ROUTE_URL_CALLBACK);

    // Finally, redirect our end user back to the / index route, to display their user profile:
    header("Location: " . ROUTE_URL_INDEX);
    exit;
});

Route::run('/');
