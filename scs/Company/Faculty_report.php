<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/Faculty_report.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>


</head>

<body>

    <header class="nav-header">
        <div class="logo">
            <a href="#">
                <img src="image/logov3.jpg" alt="Logo">
            </a>
        </div>

        <nav class="by">
            <a href=""><i class='fas fa-comment-alt' style='font-size:24px; margin-top:5px;'></i></a>
            <a href=""><i class='fas fa-bell' style='font-size:24px; margin-top:5px;'></i></a>

            <div class="dropdown" style="float:right;">
                <a href=""><i class='fas fa-user-alt' style='font-size:24px;  margin-top:5px;'></i></a>
                <div class="dropdown-content">
                    <div class="email">upriis.division6@nia.gov.ph</div>
                    <a href="#"><i class='fas fa-user-alt' style='font-size:24px; margin-right:10px;'></i> My
                        Profile</a>
                    <a href="#"> <i class='fas fa-comment-alt' style='font-size:24px;margin-right:10px;'></i>My
                        Reviews</a>
                    <a href="Settings.php"><i class="fa fa-gear" style="font-size:24px"></i> Settings</a>
                    <hr>
                    <div class="foot">&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer
                        Society Students
                    </div>
                    <hr>
                    <a class="logout" href="#"> Log out</a>
                </div>
            </div>
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <!-- <a class="login-btn" href="#" style="margin-left: 20px;">Log out</a> -->
        </nav>
    </header>


    <img class="logoimg" id="cover-pic" src="image/background.jpg" alt="" height="300" width="200">
    <label for="input-file1" class="button-13" role="button"><i class="fa fa-camera"></i>Edit cover photo</label>
    <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file1" />

    <div class="profile">
        <img src="image/NIA.png" id="profile-pic" alt="">
        <div class="name">National Irrigation Administration</div>
        <label class="strand" for="">NIA</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><i class="fa fa-pencil"></i> Edit
                profile</label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div><br>
    </div>
    <hr>
    <div class="logo">

        <nav class="bt" style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Job_ads.php"> Job Ads</a>
            <a href="Job_request.php">Job Request</a>
            <a class="active" href="Faculty_report.php">Faculty Report</a>
            <a href="Details.php">Details</a>


        </nav>
    </div>
    <hr class="line_bottom">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <form action="" method="POST" class="form">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <b>
                    <div class="box-topic">Faculty Report</div>
                </b>
                <br>
                <div class="container">

                    <div class="info">
                        <label for=" studentname">Student Name</label>
                        <input type="text" placeholder="Lastname, Firstname Middlename" name="studentname" id="studentname" required>
                    </div>
                    <div class="info">
                        <label for="studentid">School</label>
                        <input type="text" placeholder="Enter School" name="studentid" id="studentid" style="width: auto;">
                    </div>
                    <div class="info">
                        <label for="studentid">Student ID</label>
                        <input type="number" placeholder="Enter Student ID" name="studentid" id="studentid" style="width: auto;">
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
                    <div class="container1">
                        <h1>Evaluation</h1>
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


                        <button type="submit" onclick="validation();" class="button-9">Submit</button>
                    </div>



                </form>
                <!-- <div class="button">
                        <a href="#">See All</a>
                    </div> -->
            </div>

        </div>
    </form>

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

    <script>
        $(document).ready(function validation() {
            $('.form').on('submit', function validation() {
                Swal.fire({
                    title: "Successfully send!",
                    text: "You clicked the button!",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 2500
                });
            });
        });
    </script>


    <script>
        let profilePic1 = document.getElementById("cover-pic");
        let inputFile1 = document.getElementById("input-file1");

        inputFile1.onchange = function() {
            profilePic1.src = URL.createObjectURL(inputFile1.files[0]);
        }
    </script>

    <script>
        let profilePic2 = document.getElementById("profile-pic");
        let inputFile2 = document.getElementById("input-file2");

        inputFile2.onchange = function() {
            profilePic2.src = URL.createObjectURL(inputFile2.files[0]);
        }
    </script>


    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
    </footer>


</body>

</html>