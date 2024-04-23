<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/otp_email_handler.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/otp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <noscript>
        <style>
            html {
                display: none;
            }
        </style>
        <meta http-equiv="refresh" content="0.0;url=https://www.workifyph.online/message.php">
    </noscript>
    <div class="row">

        <div class="container height-100 d-flex justify-content-center align-items-center">
            <div class="position-relative">

                <div class="card p-2 text-center">

                    <h6>Please enter the one time password <br> to verify your account</h6>
                    <div> <span>A code has been sent to your email</span>
                        <small><?php echo $_SESSION['email'] ?></small>
                    </div>
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                    </div>
                    <form action="/backend/php/account_registration" onsubmit="return verifyOTPValue();">
                        <div class="mt-4"> <button class="btn btn-danger px-4 validate" type="submit">Verify</button>
                        </div>
                    </form>
                    <div class="mt-4"> <span>Didn't receive code?</span> <a href="">Request
                            again</a> </div>
                </div>
            </div>
        </div>

        <script src=" ../backend/js/login.js"></script>
    </div>
</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('keydown', function(event) {
                    if (event.key === "Backspace") {
                        inputs[i].value = '';
                        if (i !== 0) inputs[i - 1].focus();
                    } else {
                        if (i === inputs.length - 1 && inputs[i].value !== '') {
                            return true;
                        } else if (event.keyCode > 47 && event.keyCode < 58) {
                            inputs[i].value = event.key;
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        } else if (event.keyCode > 64 && event.keyCode < 91) {
                            inputs[i].value = String.fromCharCode(event.keyCode);
                            if (i !== inputs.length - 1) inputs[i + 1].focus();
                            event.preventDefault();
                        }
                    }
                });
            }
        }
        OTPInput();
    });

    function getOTPValue() {
        const otpInputs = document.querySelectorAll('#otp > input');
        let otpValue = '';
        otpInputs.forEach(input => {
            otpValue += input.value;
        });
    }
    const otpInput = document.getElementById("otp");

    function verifyOTPValue() {
        if (getOTPValue() === "<?php getOTP() ?>") {
            return true;
        } else {
            otpInput.setCustomValidity("OTP verification failed, check your email or request a new one.");
            otpInput.reportValidity();
            return false;
        }
    }
</script>