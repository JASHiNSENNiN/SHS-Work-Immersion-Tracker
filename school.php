<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Workify | School</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="/shs/css/school.css">
</head>

<body>
    <header class="page-header js-header">
        <div class="page-header__inner">
            <div class="page-header__logo">
                <h1>Workify</h1>
                <a>School</a>
            </div>
            <nav class="page-header__nav">
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Analytics</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Students</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Settings</a>
                </li>
            </nav>
        </div>
    </header><br><br><br>

    <section id="analytics">
        <link rel="stylesheet" href="/shs/css/analytics.css">
        <h1>School Analytics</h1>
        <div class="simple-bar-chart">

            <div class="item" style="--clr: #5EB344; --val: 80">
                <div class="label"> </div>
                <div class="value">50%</div>
            </div>

            <div class="item" style="--clr: #FCB72A; --val: 50">
                <div class="label"> </div>
                <div class="value">27%</div>
            </div>

            <div class="item" style="--clr: #F8821A; --val: 100">
                <div class="label"> </div>
                <div class="value">69%</div>
            </div>

            <div class="item" style="--clr: #E0393E; --val: 15">
                <div class="label"> </div>
                <div class="value">53%</div>
            </div>

            <div class="item" style="--clr: #963D97; --val: 1">
                <div class="label"> </div>
                <div class="value">4%</div>
            </div>

            <div class="item" style="--clr: #069CDB; --val: 90">
                <div class="label"> </div>
                <div class="value">90%</div>
            </div>
        </div>
    </section>

    <section id="students"></section>

    <section id="settings">
        <div class="logout-button-container">
            <button class="logout-button" onclick="logout()">Logout</button>
        </div>
    </section>

</body>
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
<script src="/shs/js/session_handler.js"></script>
<script src="js/navbar.js"></script>

</html>