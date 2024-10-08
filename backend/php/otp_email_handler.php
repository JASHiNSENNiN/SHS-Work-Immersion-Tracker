<?php

function getOTP()
{
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    $host = "localhost";
    $username = $_ENV['MYSQL_USERNAME'];
    $password = $_ENV['MYSQL_PASSWORD'];
    $database = $_ENV['MYSQL_DBNAME'];

    $conn = new mysqli($host, $username, $password, $database);
    $email = $_SESSION['email'];
    $stmt = $conn->prepare("SELECT otp_value FROM otp WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($otp);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    return $otp;
}

function insertOTP()
{
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    $host = "localhost";
    $username = $_ENV['MYSQL_USERNAME'];
    $password = $_ENV['MYSQL_PASSWORD'];
    $database = $_ENV['MYSQL_DBNAME'];

    $conn = new mysqli($host, $username, $password, $database);
    $email = $_SESSION['email'];
    $_SESSION['email'] = $email;

    $currentDateTime = date('Y-m-d H:i:s A');
    $otp = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);

    $stmt = $conn->prepare("SELECT COUNT(*) FROM otp WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        $stmt = $conn->prepare("UPDATE otp SET otp_value = ?, timestamp = ? WHERE email = ?");
        $stmt->bind_param("sss", $otp, $currentDateTime, $email);
    } else {
        $stmt = $conn->prepare("INSERT INTO otp (email, otp_value, timestamp) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $otp, $currentDateTime);
    }

    $stmt->execute();
    $stmt->close();
    $conn->close();

    $to = $email;
    $from = "noreply@workifyph.online";
    $fromName = "Workify OTP Service";
    $subject = "Workify OTP Authentication";
    $message = '

    <!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale="1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900 " id="google-fonts-css " media="all " rel="stylesheet " type="text/css " />
    <style>
        svg {
            width: 40%;
            height: 0%;
            position: relative;
            margin-right: auto;
            margin-left: auto;
            align-items: center;
            display: flex;
        }
        
        img {
            width: 30%;
        }
        
        body {
            width: 100vw;
        }
        
        .innermain {
            width: 528px !important;
        }
        
        #hello {
            background-image: url(\'https://res.cloudinary.com/gabbyprecious/image/upload/v1645116374/l0orrgcywgv35eqf4xcl.jpg\') !important;
            background-size: cover;
        }
        
        @media only screen and (device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) {
            .innermain {
                width: 400px !important;
            }
        }
        
        @media only screen and (device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) {
            .innermain {
                width: 400px !important;
            }
        }
        
        @media only screen and (device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) {
            .innermain {
                width: 430px !important;
            }
        }
    </style>

</head>

<body leftmargin="0 " marginwidth="0 " topmargin="0 " marginheight="0 " offset="0 " style="margin: 0pt auto; padding: 0px; ">
    <div id="hello ">
        <table id="main " width="100% " height="100% " cellpadding="0 " cellspacing="0 " border="0 ">
            <tbody>
                <tr>
                    <td valign="top ">
                        <table class="innermain " cellpadding="0 " cellspacing="0 " border="0 " align="center " style="margin:0 auto; table-layout: fixed; ">
                            <tbody>
                                <!-- START of MAIL Content -->
                                <tr>
                                    <td colspan="3 ">
                                        <!-- Logo start here -->
                                        <table class="logo " width="100% " cellpadding="0 " cellspacing="0 " border="0 ">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2 " height="30 "></td>
                                                </tr>
                                                <tr>
                                                    <td valign="top " align="center " width="100% ">
                                                        <a href="https://www.bitnob.com " style="display: block;cursor:pointer;text-align:center;margin-left: auto;margin-right: auto; ">
                                                            <svg xmlns="http://www.w3.org/2000/svg " xmlns:xlink="http://www.w3.org/1999/xlink " width="1280 " zoomAndPan="magnify " viewBox="0 0 960 599.999999 " height="800 " preserveAspectRatio="xMidYMid meet " version="1.0
        "><defs><g/></defs><g fill="#172738 " fill-opacity="1 "><g transform="translate(91.392433, 373.728856) "><g><path d="M 179.765625 -185.671875 L 104.78125 0 L 73.578125 0 L -1.40625 -185.671875 L 26.328125 -185.671875 C 29.316406 -185.671875 31.753906 -184.941406 33.640625 -183.484375
        C 35.523438 -182.035156 36.9375 -180.15625 37.875 -177.84375 L 81.671875 -64.59375 C 83.117188 -60.90625 84.503906 -56.859375 85.828125 -52.453125 C 87.160156 -48.046875 88.425781 -43.445312 89.625 -38.65625 C 90.65625 -43.445312 91.769531 -48.046875
        92.96875 -52.453125 C 94.164062 -56.859375 95.492188 -60.90625 96.953125 -64.59375 L 140.46875 -177.84375 C 141.15625 -179.8125 142.503906 -181.609375 144.515625 -183.234375 C 146.523438 -184.859375 148.988281 -185.671875 151.90625 -185.671875 Z M
        179.765625 -185.671875 "/></g></g></g><g fill="#172738 " fill-opacity="1 "><g transform="translate(269.743848, 373.728856) "><g><path d="M 73.96875 -133.796875 C 83.71875 -133.796875 92.59375 -132.210938 100.59375 -129.046875 C 108.601562 -125.878906
        115.453125 -121.382812 121.140625 -115.5625 C 126.835938 -109.738281 131.226562 -102.632812 134.3125 -94.25 C 137.394531 -85.863281 138.9375 -76.488281 138.9375 -66.125 C 138.9375 -55.6875 137.394531 -46.269531 134.3125 -37.875 C 131.226562 -29.488281
        126.835938 -22.34375 121.140625 -16.4375 C 115.453125 -10.53125 108.601562 -5.992188 100.59375 -2.828125 C 92.59375 0.335938 83.71875 1.921875 73.96875 1.921875 C 64.113281 1.921875 55.164062 0.335938 47.125 -2.828125 C 39.082031 -5.992188 32.210938
        -10.53125 26.515625 -16.4375 C 20.828125 -22.34375 16.421875 -29.488281 13.296875 -37.875 C 10.171875 -46.269531 8.609375 -55.6875 8.609375 -66.125 C 8.609375 -76.488281 10.171875 -85.863281 13.296875 -94.25 C 16.421875 -102.632812 20.828125 -109.738281
        26.515625 -115.5625 C 32.210938 -121.382812 39.082031 -125.878906 47.125 -129.046875 C 55.164062 -132.210938 64.113281 -133.796875 73.96875 -133.796875 Z M 73.96875 -22.46875 C 84.914062 -22.46875 93.019531 -26.148438 98.28125 -33.515625 C 103.550781
        -40.878906 106.1875 -51.664062 106.1875 -65.875 C 106.1875 -80.082031 103.550781 -90.910156 98.28125 -98.359375 C 93.019531 -105.804688 84.914062 -109.53125 73.96875 -109.53125 C 62.832031 -109.53125 54.585938 -105.785156 49.234375 -98.296875 C 43.890625
        -90.804688 41.21875 -80 41.21875 -65.875 C 41.21875 -51.75 43.890625 -40.984375 49.234375 -33.578125 C 54.585938 -26.171875 62.832031 -22.46875 73.96875 -22.46875 Z M 73.96875 -22.46875 "/></g></g></g><g fill="#172738 " fill-opacity="1
        "><g transform="translate(417.2786, 373.728856) "><g><path d="M 45.578125 -108.890625 C 49.691406 -116.765625 54.570312 -122.945312 60.21875 -127.4375 C 65.875 -131.9375 72.550781 -134.1875 80.25 -134.1875 C 86.332031 -134.1875 91.210938 -132.859375 94.890625 -130.203125
        L 92.84375 -106.453125 C 92.414062 -104.910156 91.789062 -103.816406 90.96875 -103.171875 C 90.15625 -102.535156 89.066406 -102.21875 87.703125 -102.21875 C 86.421875 -102.21875 84.515625 -102.429688 81.984375 -102.859375 C 79.460938 -103.285156 77.003906
        -103.5 74.609375 -103.5 C 71.097656 -103.5 67.972656 -102.984375 65.234375 -101.953125 C 62.492188 -100.921875 60.03125 -99.441406 57.84375 -97.515625 C 55.664062 -95.597656 53.738281 -93.269531 52.0625 -90.53125 C 50.394531 -87.789062 48.832031 -84.664062
        47.375 -81.15625 L 47.375 0 L 15.671875 0 L 15.671875 -131.75 L 34.28125 -131.75 C 37.53125 -131.75 39.796875 -131.171875 41.078125 -130.015625 C 42.367188 -128.859375 43.226562 -126.78125 43.65625 -123.78125 Z M 45.578125 -108.890625
        "/></g></g></g><g fill="#172738 " fill-opacity="1 "><g transform="translate(513.067039, 373.728856) "><g><path d="M 47.375 -190.8125 L 47.375 -81.53125 L 53.28125 -81.53125 C 55.425781 -81.53125 57.117188 -81.804688 58.359375 -82.359375 C 59.597656 -82.921875 60.863281
        -84.0625 62.15625 -85.78125 L 94.890625 -126.21875 C 96.265625 -128.019531 97.785156 -129.390625 99.453125 -130.328125 C 101.117188 -131.273438 103.28125 -131.75 105.9375 -131.75 L 134.953125 -131.75 L 94 -82.828125 C 91.082031 -78.972656 87.910156
        -76.019531 84.484375 -73.96875 C 86.285156 -72.675781 87.890625 -71.175781 89.296875 -69.46875 C 90.710938 -67.757812 92.0625 -65.921875 93.34375 -63.953125 L 137.265625 0 L 108.625 0 C 106.144531 0 104.003906 -0.40625 102.203125 -1.21875 C 100.410156
        -2.03125 98.914062 -3.507812 97.71875 -5.65625 L 64.078125 -55.59375 C 62.878906 -57.5625 61.632812 -58.84375 60.34375 -59.4375 C 59.0625 -60.039062 57.140625 -60.34375 54.578125 -60.34375 L 47.375 -60.34375 L 47.375 0 L 15.671875 0 L 15.671875 -190.8125
        Z M 47.375 -190.8125 "/></g></g></g><g fill="#172738 " fill-opacity="1 "><g transform="translate(650.329576, 373.728856) "><g><path d="M 48.53125 -131.75 L 48.53125 0 L 16.6875 0 L 16.6875 -131.75 Z M 52.90625 -170.140625 C 52.90625 -167.398438 52.347656
        -164.832031 51.234375 -162.4375 C 50.117188 -160.039062 48.640625 -157.941406 46.796875 -156.140625 C 44.960938 -154.347656 42.800781 -152.914062 40.3125 -151.84375 C 37.832031 -150.769531 35.179688 -150.234375 32.359375 -150.234375 C 29.617188 -150.234375
        27.03125 -150.769531 24.59375 -151.84375 C 22.15625 -152.914062 20.035156 -154.347656 18.234375 -156.140625 C 16.429688 -157.941406 14.992188 -160.039062 13.921875 -162.4375 C 12.859375 -164.832031 12.328125 -167.398438 12.328125 -170.140625 C 12.328125
        -172.960938 12.859375 -175.613281 13.921875 -178.09375 C 14.992188 -180.582031 16.429688 -182.722656 18.234375 -184.515625 C 20.035156 -186.316406 22.15625 -187.75 24.59375 -188.8125 C 27.03125 -189.882812 29.617188 -190.421875 32.359375 -190.421875
        C 35.179688 -190.421875 37.832031 -189.882812 40.3125 -188.8125 C 42.800781 -187.75 44.960938 -186.316406 46.796875 -184.515625 C 48.640625 -182.722656 50.117188 -180.582031 51.234375 -178.09375 C 52.347656 -175.613281 52.90625 -172.960938 52.90625
        -170.140625 Z M 52.90625 -170.140625 "/></g></g></g><g fill="#172738 " fill-opacity="1 "><g transform="translate(715.558198, 373.728856) "><g><path d="M 24.90625 0 L 24.90625 -107.859375 L 13.484375 -109.65625 C 11.003906 -110.164062 9.015625 -111.039062
        7.515625 -112.28125 C 6.015625 -113.53125 5.265625 -115.3125 5.265625 -117.625 L 5.265625 -130.59375 L 24.90625 -130.59375 L 24.90625 -140.34375 C 24.90625 -147.875 26.039062 -154.632812 28.3125 -160.625 C 30.582031 -166.625 33.832031 -171.71875 38.0625
        -175.90625 C 42.300781 -180.101562 47.457031 -183.316406 53.53125 -185.546875 C 59.613281 -187.773438 66.46875 -188.890625 74.09375 -188.890625 C 80.164062 -188.890625 85.816406 -188.078125 91.046875 -186.453125 L 90.390625 -170.53125 C 90.304688
        -169.320312 89.960938 -168.351562 89.359375 -167.625 C 88.765625 -166.90625 87.972656 -166.351562 86.984375 -165.96875 C 86.003906 -165.582031 84.875 -165.320312 83.59375 -165.1875 C 82.3125 -165.0625 80.941406 -165 79.484375 -165 C 75.710938 -165
        72.347656 -164.59375 69.390625 -163.78125 C 66.441406 -162.96875 63.941406 -161.554688 61.890625 -159.546875 C 59.835938 -157.535156 58.273438 -154.878906 57.203125 -151.578125 C 56.128906 -148.285156 55.59375 -144.203125 55.59375 -139.328125 L 55.59375
        -130.59375 L 89.890625 -130.59375 L 89.890625 -107.984375 L 56.625 -107.984375 L 56.625 0 Z M 24.90625 0 "/></g></g></g><g fill="#172738 " fill-opacity="1 "><g transform="translate(807.622964, 373.728856) "><g><path d="M 135.34375 -131.75 L 63.5625
        36.203125 C 62.625 38.429688 61.40625 40.125 59.90625 41.28125 C 58.40625 42.4375 56.113281 43.015625 53.03125 43.015625 L 29.40625 43.015625 L 54.0625 -9.890625 L 0.765625 -131.75 L 28.640625 -131.75 C 31.117188 -131.75 33.0625 -131.148438 34.46875
        -129.953125 C 35.882812 -128.753906 36.9375 -127.382812 37.625 -125.84375 L 65.609375 -57.53125 C 66.554688 -55.21875 67.347656 -52.90625 67.984375 -50.59375 C 68.628906 -48.28125 69.253906 -45.925781 69.859375 -43.53125 C 70.628906 -45.925781 71.394531
        -48.300781 72.15625 -50.65625 C 72.925781 -53.007812 73.785156 -55.34375 74.734375 -57.65625 L 101.1875 -125.84375 C 101.875 -127.550781 103.007812 -128.960938 104.59375 -130.078125 C 106.175781 -131.191406 107.953125 -131.75 109.921875 -131.75 Z
        M 135.34375 -131.75 "/></g></g></g><g fill="#1bbc9b " fill-opacity="1 "><g transform="translate(7.088537, 368.978018) "><g><path d="M 7.453125 -190.78125 L 21.0625 -190.78125 C 24.820312 -190.78125 28.113281 -189.816406 30.9375 -187.890625 C 33.757812
        -185.972656 35.859375 -183.21875 37.234375 -179.625 L 112.21875 12.203125 L 98.734375 12.203125 C 95.390625 12.203125 92.113281 11.21875 88.90625 9.25 C 85.695312 7.28125 83.363281 4.328125 81.90625 0.390625 Z M 7.453125 -190.78125
        "/></g></g></g><g fill="#1bbc9b " fill-opacity="1 "><g transform="translate(67.761615, 368.978018) "><g><path d="M 37.75 0.390625 C 36.289062 4.328125 33.957031 7.28125 30.75 9.25 C 27.539062 11.21875 24.265625 12.203125 20.921875 12.203125 L 7.453125 12.203125 L 82.421875
        -179.625 C 83.796875 -183.21875 85.894531 -185.972656 88.71875 -187.890625 C 91.539062 -189.816406 94.835938 -190.78125 98.609375 -190.78125 L 112.21875 -190.78125 Z M 37.75 0.390625 "/></g></g></g></svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2 " height="30 "></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Logo end here -->
                                        <!-- Main CONTENT -->
                                        <table cellpadding="0 " align="center " cellspacing="0 " border="0 " bgcolor="#E9FFF8 " style="border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); ">
                                            <tbody>
                                                <tr>
                                                    <td valign="top " align="center ">
                                                        <div style="margin-top: 40px; ">
                                                            <p style=" font-size: 25px; color: #000!important; font-weight: 300; font-family: \'Raleway\', Helevetica, sans-serif; ">
                                                                Hello  <br>' . $email . '!
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="40 "></td>
                                                </tr>
                                                <tr style="font-family: \'Raleway\', Helvetica, Arial, sans-serif;; color:#4E5C6E; font-size:14px; line-height:20px; margin-top:20px; ">
                                                    <td class="content " colspan="2 " valign="top " align="center " style="padding-left:90px; padding-right:90px; ">
                                                        <table width="100% " cellpadding="0 " cellspacing="0 " border="0 " bgcolor="#E9FFF8 ">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center " valign="bottom " colspan="2 " cellpadding="3 ">
                                                                        <img src="https://i.postimg.cc/MKsQFd2w/otq.png " alt="phone " />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30 " &nbsp;=" "></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center ">
                                                                        <div style="font-size: 16px; line-height: 32px; font-weight: 300; margin-left: 20px; margin-right: 20px; margin-bottom: 25px; ">
                                                                            Below is your Email Verification Code.
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="24 " &nbsp;=" "></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="1 " align="center ">
                                                                        <table border="0 " cellspacing="1 " cellpadding="0 ">
                                                                            <tr>

                                                                                <td style="padding: 20px 0; text-align: center; font-size: 30px; font-family: \'Raleway\', Helvetica, Arial, sans-serif; display: flex;
    margin-left: 4%;
    margin-right: auto;">

                                                                                    <h1 style="text-align: center; display: flex; justify-content: center; align-items: center;"> ' . $otp . ' </h1>

                                                                            </tr>
                                                                        </table>
                                                                        </td>

                                                                </tr>
                                                                <tr>
                                                                    <td height="24 " &nbsp;=" "></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td height="60 "></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table id="promo " width="100% " cellpadding="0 " cellspacing="0 " border="0 " style="margin-top:20px; ">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2 " height="20 "></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2 " align="center "> <span style="font-size:14px; font-weight:500; margin-bottom:10px; color:#7E8A98; font-family: -apple-system,BlinkMacSystemFont,sans-serif; ">Do not share this OTP with anyone for security reasons. Thank you.   </span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1" height="20" width="50%" align="center">
                                                        <div style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;margin-top:15px;margin-bottom:20px;width:400px;display:inline-block;color:#9BA6B2; font-size:14px; line-height:24px;">
                                                            © 2024 Workify. All rights reserved. | Junior Philippine Computer Society Students
                                                            <div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" height="20"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                </tr>
            </tbody>
        </table>
        </div>
</body>

</html>

    ';
    $header = 'From: ' . $fromName . ' <' . $from . '>' . "\r\n";
    $header .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    mail($to, $subject, $message, $header);
}