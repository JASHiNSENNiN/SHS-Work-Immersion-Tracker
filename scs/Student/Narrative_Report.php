<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="css/Narrative.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>


</head>

<body>

    <header class="nav-header">
        <div class="logo">
            <a href="index.php">
                <img src="image/logov3.jpg" alt="Logo">
            </a>
            <!-- <nav>
                <a href="../index.php">Home</a>
                <a href="Student_Dashboard.php">Company Review</a>
                <a href="contact.php">Contact</a>
                <a href="aboutUs.php">About</a>

            </nav> -->
        </div>

        <nav>
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <a class="login-btn" href="#" style="margin-left: 20px;">Log out</a>
        </nav>
    </header>


    <img class="logoimg" src="image/background.jpg" alt="" height="300" width="200">

    <div class="profile">
        <img src="image/me.jpg" alt="">
        <div class="name"> Miguel Von Natividad</div>
        <label class="strand" for="">STEM</label>
        <div class="Settings"><button> Edit Profile</button></div>
    </div><br>
    <hr>
    <div class="logo">

        <nav style="position:relative; margin-left:auto; margin-right:auto;">
            <a class="link" id="#area" href="Company_Area.php"> Company Area</a>
            <a class="link" id="#review" href="Company_Review.php">Company review</a>
            <a class="active" id="#narrative" href="Narrative_Report.php">Narrative Report</a>
            <!-- <a class="link" id="#contact">Contact</a> -->
            <a class="link" id="#details">Details</a>
            <!-- <a href="aboutUs.php">About</a> -->

        </nav>
    </div>


    <br>
    <div class="titleEF">
        <b>
            <h1 class="sfa">Evaluation and Feedback Form</h1>
            <div class="box-topic"></div>
        </b>
    </div>


    <div class="sales-boxes">
        <div class="recent-sales box">

            <br>

            <label class="lb" for="studentid">Company name:</label>
            <input type="text" placeholder="Enter Company name" name="studentid" id="studentid" required>
            <!-- <div class="title">Popularity Company </div> -->
            <!-- <div class="title">Student List <div class="icon"><i class="bx bx-user-plus"></i> </div> </div> -->

            <table class="tbl1">
                <!-- <tr>
                                    <th>#</th>
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr> -->
                <tr>
                    <td>5</td>
                    <td>Outstanding</td>
                    <td>Perform exceeds the required standard.</td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>Very Satisfactory</td>
                    <td>Performace fully met job requirements. Was able to perform what was expected
                        of
                        a person in his/her position.</td>


                </tr>
                <tr>
                    <td>3</td>
                    <td>Satisfactory</td>
                    <td>Performance has met the required standard. Can perform duties with minimal
                        supervision.</td>


                </tr>
                <tr>
                    <td>2</td>
                    <td>Fair</td>
                    <td>Performace partially meet the required stantard. Less than satisfactory
                        could be
                        doind better.</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td>Needs Improvement</td>
                    <td>Performance does not meet the required standard. Major improvements needed.
                    </td>
                    <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td> -->

                </tr>
            </table>
            <br>
            <form action="">
                <div class="container">
                    <h3>Evaluation </h3>
                    <p>Please fill in this evaluation form.</p>
                    <hr class="hr1">

                    <table>
                        <tr>
                            <th>#</th>
                            <th>Questioner</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Consistently works with others to accomplish goals and tasks. </td>
                            <td><input type="checkbox" name="fooby[1][]"></td>
                            <td><input type="checkbox" name="fooby[1][]"></td>
                            <td><input type="checkbox" name="fooby[1][]"></td>
                            <td><input type="checkbox" name="fooby[1][]"></td>
                            <td><input type="checkbox" name="fooby[1][]"></td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Treats all team members in a respectful courteous manner.</td>
                            <td><input type="checkbox" name="fooby[2][]"></td>
                            <td><input type="checkbox" name="fooby[2][]"></td>
                            <td><input type="checkbox" name="fooby[2][]"></td>
                            <td><input type="checkbox" name="fooby[2][]"></td>
                            <td><input type="checkbox" name="fooby[2][]"></td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Actively participates in activities and assigned tasks required.
                            </td>
                            <td><input type="checkbox" name="fooby[3][]"></td>
                            <td><input type="checkbox" name="fooby[3][]"></td>
                            <td><input type="checkbox" name="fooby[3][]"></td>
                            <td><input type="checkbox" name="fooby[3][]"></td>
                            <td><input type="checkbox" name="fooby[3][]"></td>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Willing to work with team members to improve team collaboration on
                                continuous basis.</td>
                            <td><input type="checkbox" name="fooby[4][]"></td>
                            <td><input type="checkbox" name="fooby[4][]"></td>
                            <td><input type="checkbox" name="fooby[4][]"></td>
                            <td><input type="checkbox" name="fooby[4][]"></td>
                            <td><input type="checkbox" name="fooby[4][]"></td>

                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Considers the feedback and views of team members when completing an
                                assigned task. </td>
                            <td><input type="checkbox" name="fooby[5][]"></td>
                            <td><input type="checkbox" name="fooby[5][]"></td>
                            <td><input type="checkbox" name="fooby[5][]"></td>
                            <td><input type="checkbox" name="fooby[5][]"></td>
                            <td><input type="checkbox" name="fooby[5][]"></td>

                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Attendance and tardiness. </td>
                            <td><input type="checkbox" name="fooby[6][]"></td>
                            <td><input type="checkbox" name="fooby[6][]"></td>
                            <td><input type="checkbox" name="fooby[6][]"></td>
                            <td><input type="checkbox" name="fooby[6][]"></td>
                            <td><input type="checkbox" name="fooby[6][]"></td>

                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Is cooperative and dependable. </td>
                            <td><input type="checkbox" name="fooby[7][]"></td>
                            <td><input type="checkbox" name="fooby[7][]"></td>
                            <td><input type="checkbox" name="fooby[7][]"></td>
                            <td><input type="checkbox" name="fooby[7][]"></td>
                            <td><input type="checkbox" name="fooby[7][]"></td>

                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Accepts responsibility with initiative. </td>
                            <td><input type="checkbox" name="fooby[8][]"></td>
                            <td><input type="checkbox" name="fooby[8][]"></td>
                            <td><input type="checkbox" name="fooby[8][]"></td>
                            <td><input type="checkbox" name="fooby[8][]"></td>
                            <td><input type="checkbox" name="fooby[8][]"></td>

                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Show interest in work. </td>
                            <td><input type="checkbox" name="fooby[9][]"></td>
                            <td><input type="checkbox" name="fooby[9][]"></td>
                            <td><input type="checkbox" name="fooby[9][]"></td>
                            <td><input type="checkbox" name="fooby[9][]"></td>
                            <td><input type="checkbox" name="fooby[9][]"></td>

                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Grooms appropriately and carries self well. </td>
                            <td><input type="checkbox" name="fooby[10][]"></td>
                            <td><input type="checkbox" name="fooby[10][]"></td>
                            <td><input type="checkbox" name="fooby[10][]"></td>
                            <td><input type="checkbox" name="fooby[10][]"></td>
                            <td><input type="checkbox" name="fooby[10][]"></td>

                        </tr>
                    </table>
                    <hr>
                    <br>

                    <h2>Feedback</h2>
                    <div class="mb-4 small">
                        Please provide your feedback in the form below
                    </div>
                    <form name="feedback_form" id="feedback_form" method="post">
                        <label>How do you rate your overall experience?</label>
                        <div class="mb-3 d-flex flex-row py-1">
                            <div class="form-check mr-3">
                                <input class="form-check-input" type="radio" name="rating" id="rating_bad" value="bad">
                                <label class="form-check-label" for="rating_bad">
                                    Bad
                                </label>
                            </div>

                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="rating" id="rating_good"
                                    value="good">
                                <label class="form-check-label" for="rating_good">
                                    Good
                                </label>
                            </div>

                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="rating" id="rating_excellent"
                                    value="excellent">
                                <label class="form-check-label" for="rating_excellent">
                                    Excellent!
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="feedback_comments">Comments:</label><br>
                            <textarea class="form-control" required rows="6" name="comments"
                                id="feedback_comments"></textarea>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-label" for="feedback_name">Your Name:</label><br>
                                <input type="text" required name="name" class="form-control" id="feedback_name"
                                    placeholder="Name" />
                            </div>

                            <div class="col mb-4">
                                <label class="form-label" for="feedback_email">Email:</label><br>
                                <input type="text" name="email" required class="form-control" id="feedback_email"
                                    placeholder="Your Email" />
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-success btn-lg" style="width: auto;">Post</button>
                    </form>


                    <!-- <button type="submit" class="btn btn-primary" style="width: auto;">Submit</button> -->
                </div>



            </form>
            <!-- <div class="button">
                        <a href="#">See All</a>
                    </div> -->
        </div>

    </div>


    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

    </footer>

    <script>
    $("input:checkbox").on('click', function() {

        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
    </script>

</body>

</html>