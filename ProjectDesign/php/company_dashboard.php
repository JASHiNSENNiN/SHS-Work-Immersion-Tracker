<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/company_dashboard.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/school_dashboard.css"> -->
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <div class="sidebar">
        <div class="logo-details">

            <a href="#" class="active" style='text-decoration:none'>
                <i><img src="logo.png" alt="Logo" height="50" style="margin-left:5px;">
                </i>

            </a>
            <span class="logo_name" id="logo_name" style="color:#fff;">Workify</span>

        </div>
        <br>
        <ul class="nav-links">
            <li>
                <a href="#" class="link" id="#job">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Job Ads</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" id="#request">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Job Request</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" id="#report">
                    <i class='bx bxs-graduation'></i>
                    <span class="links_name">Faculty Report</span>
                </a>
            </li>

            <li>
                <a href="#" class="link" id="#setting">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' onclick="toggle();"></i>
                <span class="dashboard"></span>
                <span class="dashboard"> </span>
                <span class="dashboard">Company Dashboard</span>
                <!-- <div class="logo">
            <img src="../logo.jpg" alt="Logo">
            <h1>\</h1>
            <h1>Vorkify</h1>
        </div> -->
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <img src="images/profile.jpg" alt="">
                <span class="admin_name">Prem Shahi</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>



        <div class="home-content">


            <div id="content_container">

                <div id="job" class="content active">
                    <div class="sales-boxes">
                        <div class="recent-sales box">
                            <b>
                                <!-- <div class="box-topic" style="margin-left: 20px;">Post a Job ad for free </div> -->
                            </b>
                            <br>
                            <!-- <div class="title">Popularity Company </div> -->
                            <!-- <div class="title">Student List <div class="icon"><i class="bx bx-user-plus"></i> </div> </div> -->

                            <form action="">
                                <div class="container">
                                    <h1>Post a Job ad for free</h1>
                                    <p>Please fill in this form to create an job.</p>
                                    <hr>

                                    <label for="worktitle"><b>Work Title</b></label>
                                    <input type="text" placeholder="" name="" id="" required>

                                    <label for="date"><b>Expected Job Start date</b></label><br>
                                    <input type="date" placeholder="DD/MM/YY" name="" id="" required><br><br>

                                    <label for="job"><b>Job Description</b></label><br>
                                    <textarea type="textarea" name="" id="textarea"></textarea>
                                    <hr>

                                    <p>By creating job ads you agree to our <a href="#">Terms & Privacy</a>.</p>
                                    <button type="submit" class="registerbtn">Submit</button>
                                </div>

                            </form>
                            <!-- <div class="button">
                        <a href="#">See All</a>
                    </div> -->
                        </div>


                    </div>

                </div>

                <div id="request" class="content">
                    <div class="sales-boxes">
                        <div class="recent-sales box" style="width: 90%;">
                            <b>
                                <div class="box-topic" style="margin-left: 20px;">Job Request</div>
                            </b>
                            <br>
                            <!-- <div class="title">Popularity Company </div> -->
                            <!-- <div class="title">Student List <div class="icon"><i class="bx bx-user-plus"></i> </div> </div> -->

                            <table style="width:100%">
                                <tr>
                                    <th>#</th>
                                    <th>School ID</th>
                                    <th>Name</th>
                                    <th>Strand</th>
                                    <th>School</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2024-11</td>
                                    <td>NIA</td>
                                    <td>HUMSS</td>
                                    <td>OLSHCO</td>
                                    <td>Guimba</td>
                                    <td><button type="button" class="btn btn-success">Accept</button>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2024-12</td>
                                    <td>PNP</td>
                                    <td>GAS</td>
                                    <td>National</td>
                                    <td>Guimba</td>
                                    <td><button type="button" class="btn btn-success">Accept</button>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2024-13</td>
                                    <td>Municipal</td>
                                    <td>STEM</td>
                                    <td>BLUN</td>
                                    <td>Guimba</td>
                                    <td><button type="button" class="btn btn-success">Accept</button>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td>

                                </tr>
                            </table>
                            <!-- <div class="button">
                        <a href="#">See All</a>
                    </div> -->
                        </div>

                    </div>
                </div>

                <div id="report" class="content">
                    <!-- <div class="title">Videos</div>
                    <div class="description">Videos description</div> -->
                    <div class="sales-boxes">
                        <div class="recent-sales box" style="width: 90%;">
                            <b>
                                <div class="box-topic" style="margin-left: 20px;">Faculty Report</div>
                            </b>
                            <br>

                            <label for="studentid">Student ID</label> <br>
                            <input type="number" placeholder="Enter Student ID" name="studentid" id="studentid"
                                required>
                            <!-- <div class="title">Popularity Company </div> -->
                            <!-- <div class="title">Student List <div class="icon"><i class="bx bx-user-plus"></i> </div> </div> -->

                            <table style="width:100%">
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
                                    <h3>Questioner </h3>
                                    <p>Please fill in this survey form to create an job.</p>
                                    <hr>

                                    <table style="width:100%">
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



                </div>
                <div id="setting" class="content">
                    <div class="title">Wallpapers</div>
                    <div class="description">Wallpapers description</div>
                </div>
            </div>




        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }

    </script>
    <script>
        let toggle = () => {

            let element = document.getElementById("logo_name");
            let hidden = element.getAttribute("hidden");

            if (hidden) {
                element.removeAttribute("hidden");
            } else {
                element.setAttribute("hidden", "hidden");
            }
        }
    </script>
    <script type="text/javascript" src=" ../js/analytics_school_dashboard.js"></script>

    <script>
        $(".link").click(function (e) {
            e.preventDefault();
            $(".content").removeClass("active");
            var content_id = $(this).attr("id");
            $(content_id).addClass("active");
        });
    </script>

    // Survey form
    <script>
        $("input:checkbox").on('click', function () {
           
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