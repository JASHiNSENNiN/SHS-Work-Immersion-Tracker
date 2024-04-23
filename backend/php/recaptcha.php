<?php
(Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] .  '/'))->load();

function validateCaptcha()
{
    if (isset($_POST['register_form'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $recaptcha = $_POST['g-recaptcha-response'];

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $_ENV['RECAPTCHA_SECRET_KEY'],
            'response' => $recaptcha
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response);

        if ($response->success == true) {
            echo '<script src="/backend/js/register.js"></script>';
            echo '<script>validateRegisterForm(' . $response->success . ');</script>';
        } else {
            echo '<script src="/backend/js/register.js"></script>';
            echo '<script>validateRegisterForm(' . json_encode($response->success) . ');</script>';
        }
    }
}
