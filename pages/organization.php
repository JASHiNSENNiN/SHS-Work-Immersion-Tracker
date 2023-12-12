<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Workify | Partner Organization</title>
    <link rel="shortcut icon" href="/shs/favicon.ico">
    <link rel="stylesheet" href="/shs/css/index.css">
    <link rel="stylesheet" href="/shs/css/work.css">
</head>

<body>
    <header class="page-header js-header">
        <div class="page-header__inner">
            <div class="page-header__logo">
                <h1>Workify</h1>
                <a>Partner Organization</a>
            </div>
            <nav class="page-header__nav">
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Profile</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Participants</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Applicants</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Settings</a>
                </li>
            </nav>
        </div>
    </header><br><br><br>
    <main>
        <section id="profile">
        </section>

        <section id="participants"></section>

        <section id="applicants">
            <div id="applicantsContainer"></div>
        </section>

        <section id="settings">
            <div class="logout-button-container">
                <button class="logout-button" onclick="session_logout()">Logout</button>
            </div>
        </section>
    </main>

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
<script src="/shs/js/navbar.js"></script>
<script src="/shs/js/organization.js"></script>

</html>