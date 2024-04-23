<?php
(Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();

$secretKey = $_ENV['RECAPTCHA_SECRET_KEY'];

$recipientEmail = 'workifywebadmin0@workifyph.online';

$postData = $valErr = $statusMsg = '';
$status = 'error';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_form'])) {
    $login_email = trim($_POST['$login_email']);
    $login_password = trim($_POST['$login_password']);

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $api_url = 'https://www.google.com/recaptcha/api/siteverify';
        $resq_data = array(
            'secret' => $_ENV['RECAPTCHA_SECRET_KEY'],
            'response' => $_POST['g-recaptcha-response'],
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );


        $curlConfig = array(
            CURLOPT_URL => $api_url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $resq_data,
            CURLOPT_SSL_VERIFYPEER => false
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            $api_error = curl_error($ch);
        }
        curl_close($ch);


        $responseData = json_decode($response);

        if (!empty($responseData) && $responseData->success >= 0.8 && $responseData['action'] == "login_form_submit") {
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_form'])) {
    $register_email = trim($_POST['$register_email']);
    $register_password = trim($_POST['$register_password']);

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $api_url = 'https://www.google.com/recaptcha/api/siteverify';
        $resq_data = array(
            'secret' => $_ENV['RECAPTCHA_SECRET_KEY'],
            'response' => $_POST['g-recaptcha-response'],
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );


        $curlConfig = array(
            CURLOPT_URL => $api_url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $resq_data,
            CURLOPT_SSL_VERIFYPEER => false
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            $api_error = curl_error($ch);
        }
        curl_close($ch);


        $responseData = json_decode($response);

        if (!empty($responseData) && $responseData->success >= 0.8 && $responseData['action'] == "register_form_submit") {
            $_SESSION['register_email'] = $register_email;
            $_SESSION['register_password'] = $register_password;
            $destination = $_SERVER['DOCUMENT_ROOT'] . '/php/one_time_password.php';
            header("Location: $destination");
            exit();
        }
    }
}
