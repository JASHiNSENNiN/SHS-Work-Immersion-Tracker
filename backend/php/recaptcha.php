<?php (Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();

$secretKey = $_ENV['RECAPTCHA_SECRET_KEY'];


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['g-recaptcha-response-register'])) {
    $registerRecaptchaResponse = $_POST['g-recaptcha-response-register'];

    $recaptchaSecretKey = $secretKey;
    $recaptchaResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptchaSecretKey . '&response=' . $registerRecaptchaResponse);
    $recaptchaResult = json_decode($recaptchaResponse);

    if (!$recaptchaResult->success) {
        exit;
    }

    $_SESSION['register_password'] = $register_password;
    $destination = $_SERVER['DOCUMENT_ROOT'] . '/php/one_time_password.php';
    header("Location: $destination");
    exit();
}
