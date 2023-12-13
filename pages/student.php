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
                    <a href="#profile" onclick="setActive(this)">Profile</a>
                </li>
                <li class="page-header__nav-link">
                    <a href="#work" onclick="setActive(this)">Work</a>
                </li>
                <li class="page-header__nav-link">
                    <div class="logout-button-container">
                        <button class="logout-button" onclick="session_logout()">Logout</button>
                    </div>
                    <!-- <a href="#settings" onclick="setActive(this)">Settings</a> -->
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
            <div id="workProfile">
                <div class="current-work-immersion">
                    <div class="box">
                        <h2>Current Work Immersion</h2>
                        <div class="work-immersion-info">
                            <h3>Work Immersion Name: <span id="work-immersion-name">[Work Immersion Name]</span></h3>
                            <h3>Work Immersion Strand: <span id="work-immersion-strand">[Work Immersion Strand]</span>
                            </h3>
                            <h3>Work Immersion Stars: <span id="work-immersion-stars">[Work Immersion Stars]</span></h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="evaluation-scores">
                            <h2>Evaluation Scores/Ratings</h2>
                            <div class="skills-assessment">
                                <h3>Skills Assessment: <span>[Skills Assessment]</span></h3>
                            </div>
                            <div class="attendance-records">
                                <h3>Attendance Records: <span>[Attendance Records]</span></h3>
                            </div>
                            <div class="work-ethics-evaluation">
                                <h3>Work Ethics Evaluation: <span>[Work Ethics Evaluation]</span></h3>
                            </div>
                            <div class="supervisor-feedback">
                                <h3>Supervisor Feedback: <span>[Supervisor Feedback]</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="feedback">
                            <h2>Feedback</h2>
                            <div class="student-feedback">
                                <h3>Student Feedback on Work Immersion Experience: <span>[Student Feedback]</span></h3>
                            </div>
                            <div class="partner-feedback">
                                <h3>Industry Partner Feedback on Student Performance: <span>[Partner Feedback]</span>
                                </h3>
                            </div>
                            <div class="teacher-feedback">
                                <h3>Teacher/Coordinator Feedback on Student Progress: <span>[Teacher Feedback]</span>
                                </h3>
                            </div>
                            <div class="industry-metrics">
                                <h3>Industry-Specific Metrics:</h3>
                                <ul>
                                    <li>Key Performance Indicators (KPIs) for specific industries: <span>[KPIs]</span>
                                    </li>
                                    <li>Project Milestones and Deliverables: <span>[Milestones]</span></li>
                                    <li>Industry Partner Performance Metrics: <span>[Partner Metrics]</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="work-immersion-activities">
                            <h2>Work Immersion Activities</h2>
                            <div class="placement-details">
                                <h3>Work Placement Details:</h3>
                                <ul>
                                    <li>Company Name: <span>[Company Name]</span></li>
                                    <li>Address: <span>[Address]</span></li>
                                    <li>Contact Information: <span>[Contact Information]</span></li>
                                </ul>
                            </div>
                            <div class="duration">
                                <h3>Duration of Work Immersion: <span>[Duration]</span></h3>
                            </div>
                            <div class="tasks-responsibilities">
                                <h3>Tasks and Responsibilities Assigned to Students:</h3>
                                <ul>
                                    <li><span>[Task 1]</span></li>
                                    <li><span>[Task 2]</span></li>
                                    <li><span>[Task 3]</span></li>
                                </ul>
                            </div>
                            <div class="schedule">
                                <h3>Work Immersion Schedule: <span>[Schedule]</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="settings">
            <h2>Survey Questions</h2>
            <ul class="survey-list" id="survey-list">
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