<?php
$email = $_POST['email'];
$otp = $_POST['otp'];

$to = $email;
$from = "noreply@workifyph.online";
$fromName = "Workify OTP Service";
$subject = "Workify OTP Authentication";
$message = "Your OTP is: " . $otp;
$header = 'From: ' . $fromName . '<' . $from . '>';
if (mail($to, $subject, $message, $header)) {
    $msg = "Successful";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/loginform.css">
</head>

<body>
    <div class="row">

        <div id="otp-form" class="colm-form">
            <img class="logo-login" src="../img/logo-login.svg" alt="Logo">
            <div class="form-container">
                <form action="../index.php" method="POST">
                    <h2>Enter the verification code we sent to your mobile/email:</h2>
                    <input type="number" name="checkotp" id="email" placeholder="8 Digit OTP" required>
                    <button class="btn-login" onclick="resendOTP()">Resend OTP</button>
                    <button class="btn-login" id="switch-to-login" type="submit"">
                        Send Verification
                    </button>
                </form>
            </div>
        </div>

        <script src=" ../backend/js/login.js"></script>
            </div>
            <footer>
                <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
                <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

            </footer>
</body>

</html>
<script>
function printCookies() {
    const cookies = document.cookie.split(";")
        .map(cookie => cookie.trim());

    console.log("Cookies:");
    cookies.forEach(cookie => {
        console.log(cookie);
    });
}


window.onload = printCookies;
</script>