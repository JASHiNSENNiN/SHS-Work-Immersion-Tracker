<?php (Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();


$secretKey = $_ENV['RECAPTCHA_SECRET_KEY'];

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_sercret = $secretKey;
$recaptcha_response = $_POST['g-captcha-response'];

$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_sercret . '&response=' . $recaptcha_response);
$recaptcha = json_decode($recaptcha, true);

if ($recaptcha['success'] == 1 and $recaptcha['score'] >= 0.8 and $recaptcha['action'] == "register") {
    $_SESSION['register_email'] = $_POST['register_email'];
    $_SESSION['register_password'] = $_POST['register_password'];
    $destination = $_SERVER['DOCUMENT_ROOT'] . '/php/one_time_password.php';
    header("Location: $destination");
    exit();
}
