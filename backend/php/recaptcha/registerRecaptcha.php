<?php (Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();

$secretKey = $_ENV['RECAPTCHA_SECRET_KEY'];

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
} else {
    $captcha = false;
}
$action = "submit";
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secretKey, 'response' => $captcha)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
if ($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    $_SESSION['register_email'] = $_POST['register_email'];
    $_SESSION['register_password'] = $_POST['register_password'];
    $destination = $_SERVER['DOCUMENT_ROOT'] . 'one_time_password.php';
    header("Location: $destination");
    exit();
} else {
    // spam submission
    // show error message
}


        //$_SESSION['register_email'] = $_POST['register_email'];
        //$_SESSION['register_password'] = $_POST['register_password'];
        //$destination = $_SERVER['DOCUMENT_ROOT'] . '/php/one_time_password.php';
        //header("Location: $destination");
        //exit();