<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Workify | Student</title>
    <link rel="shortcut icon" href="/shs/favicon.ico">
    <link rel="stylesheet" href="/shs/css/student.css">
    <link rel="stylesheet" href="/shs/css/index.css">
</head>

<body>
    <header class="page-header js-header">
        <div class="page-header__inner">
            <div class="page-header__logo">
                <h1>Workify</h1>
                <a>Student</a>
            </div>
            <nav class="page-header__nav">
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Profile</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Work</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#" onclick="setActive(this)">Settings</a>
                </li>
            </nav>
        </div>
    </header><br><br><br>

    <main>
        <section id="profile">
            <div class="student-info">
                <div class="box">
                    <h2>Student Info</h2>
                    <div class="name">
                        <h3>Name: <span id="student-name">[Student Name]</span></h3>
                    </div>
                    <div class="school">
                        <h3>School: <span id="school">[school]</span></h3>
                    </div>
                    <div class="grade-level">
                        <h3>Grade Level: <span id="grade-level">[Grade Level]</span></h3>
                    </div>
                    <div class="strand">
                        <h3>Strand: <span id="strand">[Strand]</span></h3>
                    </div>
                </div>
            </div>

            <div class="current-work-immersion">
                <div class="box">
                    <h2>Current Work Immersion</h2>
                    <div class="organization-name">
                        <h3>Organization name: <span id="org-name">[Organization name]</span></h3>
                    </div>
                    <div class="organization-strand-category">
                        <h3>Organization strand category: <span id="org-strand">[Strand category]</span></h3>
                    </div>
                    <div class="organization-ratings">
                        <h3>Organization ratings: <span id="org-ratings">[Organization ratings]</span></h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="work">
            <div id="worksContainer"></div>
        </section>

        <section id="settings">
            <h2>Survey Questions</h2>
            <ul class="survey-list" id="survey-list">
                <!-- Survey questions-->
            </ul>
            <form class="add-survey-form" id="add-survey-form">
                <input type="text" id="question" name="question" placeholder="Enter a survey question">
                <button type="button" onclick="addSurvey()">Add</button>
            </form>
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
<script src="/shs/js/student.js"></script>


</html>