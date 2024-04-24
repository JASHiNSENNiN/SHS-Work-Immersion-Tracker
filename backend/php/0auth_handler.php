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
$client->setRedirectUri($_ENV['AUTH0_REDIRECT_URI']);
$client->addScope('profile');
$client->addScope('email');


if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $_SESSION['email'] = $google_account_info->email;

    if (checkDuplicateEmail($_SESSION['email']) == true) {
        $destination = 'https://www.workifyph.online/register.php?error=0AuthDuplicateEmail';
        header("Location: $destination");
        exit();
    }
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

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