<?php
// $email = $_POST['email'];
// $otp = $_POST['otp'];
// $password = $_POST['password'];

// $to = $email;
// $from = "noreply@workifyph.online";
// $fromName = "Workify OTP Service";
// $subject = "Workify OTP Authentication";
// $message = "Your OTP is: " . $otp;
// $header = 'From: ' . $fromName . '<' . $from . '>';
// if (mail($to, $subject, $message, $header)) {
//     $msg = "Successful";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/loginform.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/otp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
</head>

<body>
    <div class="row">

        <!--TODO if $otp ==  checkotp then redirect -->


        <!-- <div id="otp-form" class="colm-form">
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
        </div> -->

        <div class="container height-100 d-flex justify-content-center align-items-center">
            <!-- <img class="logo-login" src="../img/logo-login.svg" alt="Logo"> -->
            <div class="position-relative">

                <div class="card p-2 text-center">

                    <h6>Please enter the one time password <br> to verify your account</h6>
                    <div> <span>A code has been sent to your email</span> <small>s******@gmail.com</small> </div>
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                    </div>
                    <div class="mt-4"> <button class="btn btn-danger px-4 validate">Verify</button> </div>
                    <div class="mt-4"> <span>Didn't receive code?</span> <a>Request again</a> </div>
                </div>
            </div>
        </div>

        <script src=" ../backend/js/login.js"></script>
    </div>
    <!-- <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
    </footer> -->
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
        console.log("<?php echo $otp ?>")
        console.log("<?php echo $email ?>")
        console.log("<?php echo $password ?>")
    }


    window.onload = printCookies;
</script>
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
</script>