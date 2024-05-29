<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link rel="shortcut icon" type="x-icon" href="image/W.png">
    <link rel="stylesheet" type="text/css" href="css/Details.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

            <div class="dropdowntf" style="float:right;">
                <a href="" class="notification"><i class='fas fa-bell' style='font-size:24px;'></i><span
                        class="badge">1</span></a>
                <div class="dropdowntf-content" id="box">
                    <label for="" class="notif">Notification</label>
                    <hr style="width: 100%;">
                    <div class="notifi-item">
                        <img src="../Student/image/me.jpg" alt="img">
                        <div class="text">
                            <h4>Miguel Von Natividad</h4>
                            <p>Sent Request</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown" style="float:right;">
                <a href=""><i class='fas fa-user-alt' style='font-size:24px;  margin-top:5px;'></i></a>
                <div class="dropdown-content">
                    <div class="email">upriis.division6@nia.gov.ph</div>
                    <a href="Profile.php"><i class='fas fa-user-alt' style='font-size:24px; margin-right:10px;'></i> My
                        Profile</a>
                    <a href=""><i class='fas fa-bookmark' style='font-size:24px; margin-right:10px;'></i> My Jobs</a>
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
    <label for="input-file1" class="button-13" role="button"><span class="edit"><i class="fa fa-camera"></i>Edit cover
            photo</span>
        <span class="cam"><i class="fa fa-camera"></i></span></label>
    <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file1" />


    <div class="profile">
        <img id="profile-pic" src="image/NIA.png" alt="">
        <div class="name">National Irrigation Administration</div>
        <label class="strand" for="">NIA</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><span class="edit"><i
                        class="fa fa-pencil"></i> Edit
                    profile</span><span class="pen"><i class="fa fa-pencil"></i></span></label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div>

    </div><br>
    <hr>
    <div class="logo">

        <nav class="bt" style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Job_ads.php"> Job Ads</a>
            <a href="Job_request.php">Job Request</a>
            <a href="Faculty_report.php">Faculty Report</a>
            <a href="Question.php">Questions</a>
            <a class="active" href="Details.php">Snapshot</a>


        </nav>
    </div>
    <hr class="line_bottom">
    <div class="bgc">

        <div class="snapshot_container">
            <label style="font-size: .75rem; color: #595959;">National Irrigation Administration Careers and
                Employment</label>
            <h1 style="font-size: 1.75rem; margin:0%; margin: bottom 20px; margin-block-end: 1rem;">About the company
            </h1>


            <!-- <div class="api_card">
                <div class="api_details">
                    <span class="api_title">Ceo</span></br>
                    <span class="api_details_one">Robert Victor G. Seares, Jr.</span></br>
                    <div class="rating">62%</div></br>
                    <span class="api_details_two">approve of Robert Victor G. Seares, Jr. performance</span></br>


                </div>

            </div> -->
            <div class="section-wrap">
                <div class="api_card_half">
                    <div class="api_details">
                        <p class="api_title">Ceo</p></br>
                        <span class="api_details_one">Robert Victor G. Seares, Jr.</span>
                    </div>

                </div>

            </div>

            <div class="section-wrap">
                <div class="api_card_half">
                    <div class="api_details">
                        <p class="api_title">Headerquarters</p></br>
                        <span class="api_details_one">Quezon City, Metro Manila</span>
                    </div>

                </div>

            </div>
            <div class="section-wrap">
                <div class="api_card_half">
                    <div class="api_details">
                        <p class="api_title">Link</p></br>
                        <a class="api_details_one" style="color: #2557a7;" href="https://www.nia.gov.ph/">NIA
                            Philippines <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                                class=" css-1jtd2m7 eac13zx0">
                                <title>Opens in a new window</title>
                                <path
                                    d="M14.504 3a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h3.085l-9.594 9.594a.5.5 0 000 .707l.707.708a.5.5 0 00.707 0l9.594-9.595V9.5a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-6a.5.5 0 00-.5-.5h-6z">
                                </path>
                                <path
                                    d="M5 3.002a2 2 0 00-2 2v13.996a2 2 0 001.996 2.004h14a2 2 0 002-2v-6.5a.5.5 0 00-.5-.5h-1a.5.5 0 00-.5.5v6.5L5 18.998V5.002L11.5 5a.495.495 0 00.496-.498v-1a.5.5 0 00-.5-.5H5z">
                                </path>
                            </svg></a>
                    </div>

                </div>
            </div>
            <h1 style="font-size: 1.75rem; margin:0%; margin: bottom 20px; margin-block-end: 1rem;">Rating overview</h1>
            <label style="font-size: .75rem; color: #595959;">Rating is calculated based on <span
                    class="total-reviews">0</span> reviews and is evolving.</label>

        </div>
    </div>

    <div class="container-rating">
        <div class="global">
            <span class="global-value">0.0</span>
            <div class="rating-icons">
                <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i></span>
                <span class="two"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
            <!-- <span class="rev-title"> Base on
                <span class="total-reviews">0</span> reviews</span> -->
        </div>
        <div class="chart">
            <div class="rate-box">
                <span class="value">5</span>
                <div class="progress-bar">
                    <span class="progress"></span>
                </div>
                <span class="count">0</span>
            </div>
            <div class="rate-box">
                <span class="value">4</span>
                <div class="progress-bar"><span class="progress"></span></div>
                <span class="count">0</span>
            </div>
            <div class="rate-box">
                <span class="value">3</span>
                <div class="progress-bar"><span class="progress"></span></div>
                <span class="count">0</span>
            </div>
            <div class="rate-box">
                <span class="value">2</span>
                <div class="progress-bar"><span class="progress"></span></div>
                <span class="count">0</span>
            </div>
            <div class="rate-box">
                <span class="value">1</span>
                <div class="progress-bar"><span class="progress"></span></div>
                <span class="count">0</span>
            </div>
        </div>
    </div>

    <section id="testimonials">


        <!--heading--->
        <div class="testimonial-heading">
            <h2>Reviews</h2>

        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profileUser">
                        <!--img---->
                        <div class="user-img">
                            <img src="https://i.postimg.cc/638DNCV2/profile.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Liam mendes</strong>
                            <span>on September 15, 2023</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <!--                     <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div> -->
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Working on this company is a good experience it is because it is related to the course I've taken
                        in college as a Bachelor of Science and Social Work also the company memmber is a hard worker
                        ang responsible for their work in the company. Other than that our relationship as a member of
                        the company is good as we can united at the problem we are facing .</p>
                </div>
            </div>
            <!--BOX-2-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profileUser">
                        <!--img---->
                        <div class="user-img">
                            <img src="https://i.postimg.cc/638DNCV2/profile.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Noah Wood</strong>
                            <span>on September 9, 2020</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <!--                     <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div> -->
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Good in cooperation and research study you will learned to coordinate in the Lgu and other
                        government agencies in the feasibility study sometimes they challenge you to finish investigate
                        the subject area for the proposed irrigation project.</p>
                </div>
            </div>
            <!--BOX-3-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profileUser">
                        <!--img---->
                        <div class="user-img">
                            <img src="https://i.postimg.cc/638DNCV2/profile.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Oliver Queen</strong>
                            <span>on May 31, 2020</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <!--                     <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div> -->
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>National Irirgation Administration is a good environment to work in. The agency has very
                        supportive heads and employees willing to work an extra mile for the benefit of the Filipino
                        farmers.</p>
                </div>
            </div>
            <!--BOX-4-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profileUser">
                        <!--img---->
                        <div class="user-img">
                            <img src="https://i.postimg.cc/638DNCV2/profile.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Barry Allen</strong>
                            <span>on February 11, 2020</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <!--                     <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div> -->
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>I've been working under planning unit. I properly evaluate Program of Works (POW) from 7
                        different divisions in Region III. The most complex part of my former job is when all 7
                        divisions submitted their POW on same date (due date) and not before due date. What I sincerely
                        like in my previous job is there's no gossiping. They merely encourage you to be better.</p>
                </div>
            </div>
        </div>
    </section>
    </div>
    <br>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
    </footer>

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



</body>

</html>