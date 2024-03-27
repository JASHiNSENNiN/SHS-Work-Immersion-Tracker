<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/Faculty_report.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>


</head>

<body>

    <header class="nav-header">
        <div class="logo">
            <a href="#">
                <img src="image/logov3.jpg" alt="Logo">
        </div>

        <nav>
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <a class="login-btn" href="#" style="margin-left: 20px;">Log out</a>
        </nav>
    </header>


    <img class="logoimg" src="image/background.jpg" alt="" height="300" width="200">

    <div class="profile">
        <img src="image/NIA.png" alt="">
        <div class="name">National Irrigation Administration</div>
        <label class="strand" for="">NIA</label>
        <div class="Settings"><button> Edit Profile</button></div>
    </div><br>
    <hr>
    <div class="logo">

        <nav style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Job_ads.php"> Job Ads</a>
            <a href="Job_request.php">Job Request</a>
            <a href="Faculty_report.php">Faculty Report</a>
            <a href="Details.php">Details</a>


        </nav>
    </div>


    <div class="sales-boxes">
        <div class="recent-sales box">
            <b>
                <div class="box-topic">Faculty Report</div>
            </b>
            <br>
            <div class="container">
                <div class="row">
                    <div class="column">
                        <label for="studentname">Student Name</label> <br>
                        <input type="text" placeholder="Lastname, Firstname Middlename" name="studentid" id="studentid"
                            required>
                    </div>
                    <div class="column">
                        <label for="studentid">School</label> <br>
                        <input type="text" placeholder="Enter School" name="studentid" id="studentid"
                            style="width: auto;">
                    </div>
                    <div class="column">
                        <label for="studentid">Student ID</label> <br>
                        <input type="number" placeholder="Enter Student ID" name="studentid" id="studentid"
                            style="width: auto;">
                    </div>
                </div>
            </div>
            <!-- <div class="title">Popularity Company </div> -->
            <!-- <div class="title">Student List <div class="icon"><i class="bx bx-user-plus"></i> </div> </div> -->

            <table>
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
                    <td>Performace fully met job requirements. Was able to perform what was expected of
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
                    <td>Performace partially meet the required stantard. Less than satisfactory could be
                        doind better.</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td>Needs Improvement</td>
                    <td>Performance does not meet the required standard. Major improvements needed.</td>
                    <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td> -->

                </tr>
            </table>
            <br>
            <form action="">
                <div class="container">
                    <h3>Evaluation</h3>
                    <p>Please fill in this evaluation form</p>
                    <hr>

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
                            <td>Actively participates in activities and assigned tasks required.</td>
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


                    <button type="submit" class="btn btn-primary">Submit</button>
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


</body>

</html>