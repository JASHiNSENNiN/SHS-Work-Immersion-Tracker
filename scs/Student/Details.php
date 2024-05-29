<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/Details.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

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
                        class="badge">2</span></a>
                <div class="dropdowntf-content" id="box">
                    <label for="" class="notif">Notification</label>
                    <hr style="width: 100%;">
                    <div class="notifi-item">
                        <img src="../Company/image/NIA.png" alt="img">
                        <div class="text">
                            <h4>NIA</h4>
                            <p>Welcome to NIA</p>
                        </div>
                    </div>
                    <div class="notifi-item">
                        <img src="../School/image/OLSHCO.png" alt="img">
                        <div class="text">
                            <h4>OLSHCO</h4>
                            <p>Report to the Office</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown" style="float:right;">
                <a href=""><i class='fas fa-user-alt' style='font-size:24px;  margin-top:5px;'></i></a>
                <div class="dropdown-content">
                    <div class="email">natividadma@students.olshco.edu</div>
                    <a href="Profile.php"><i class='fas fa-user-alt' style='font-size:24px; margin-right:10px;'></i> My
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
    <label for="input-file1" class="button-13" role="button"><span class="edit"><i class="fa fa-camera"></i>Edit cover
            photo</span>
        <span class="cam"><i class="fa fa-camera"></i></span></label>
    <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file1" />

    <div class="profile">
        <img id="profile-pic" src="image/me.jpg" alt="">
        <div class="name"> Miguel Von Natividad</div>
        <label class="strand" for="">STEM</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><span class="edit"><i
                        class="fa fa-pencil"></i> Edit
                    profile</span><span class="pen"><i class="fa fa-pencil"></i></span></label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div>
    </div><br><br>
    <hr>
    <div class="logo">

        <nav class="bt" style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Company_area.php"> Company Area</a>
            <a href="Company_Review.php">Company review</a>
            <a href="Narrative_Report.php">Narrative Report</a>
            <a class="activeD" id="#details" href="Details.php">Details</a>



        </nav>
    </div>
    <hr class="line_bottom">
    <div class="wrapper">
        <div class="header1">
            <ul>
                <li class="active form_1_progessbar">
                    <div>
                        <p>1</p>
                    </div>
                </li>
                <li class="form_2_progessbar">
                    <div>
                        <p>2</p>
                    </div>
                </li>
                <li class="form_3_progessbar">
                    <div>
                        <p>3</p>
                    </div>
                </li>
                <li class="form_4_progessbar">
                    <div>
                        <p>4</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Signup Info</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <img class="prof" src="http://via.placeholder.com/150x150" />
                            <input type="file" accept="image/jpeg, image/png, image/gif" id="myfile"
                                style="display:none " />
                        </div>
                        <div class="input_wrap">
                            <label for="password">Name</label>
                            <input type="text" name="Name" class="input" id="Name"
                                placeholder="FirstName MiddleName LastName">
                        </div>
                        <div class="input_wrap">
                            <label for="strand">Strand</label>
                            <input type="text" name="strand" class="input" id="strand" placeholder="Strand">
                        </div>
                    </div>
                </form>
            </div>
            <div class="form_2 data_info" style="display: none;">
                <h2>Personal Info</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="CT">Cellphone / Telephone #</label>
                            <input type="number" name="CT" min="0" class="input" id="CT" placeholder="+6312345678">
                        </div>
                        <div class="input_wrap">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" class="input" id="Email" placeholder="sample@gmail.com">
                        </div>
                        <div class="input_wrap">
                            <label for="Address">Address</label>
                            <input type="text" name="Address" class="input" id="Address"
                                placeholder="Municipality / Province">
                        </div>
                    </div>
                </form>
            </div>
            <div class="form_3 data_info" style="display: none;">
                <h2>Education</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="ES">Elementary School</label>
                            <input type="number" class="input year" min="1900" max="2099" step="1"
                                placeholder="2000 - 2000" />
                            <input type="text" name="ES" class="input" id="ES" placeholder="School">

                        </div>
                        <div class="input_wrap">
                            <label for="JS">Junior High School</label>
                            <input type="number" class="input year" min="1900" max="2099" step="1"
                                placeholder="2000 - 2000" />
                            <input type="text" name="JS" class="input" id="JS" placeholder="School">
                        </div>
                        <div class="input_wrap">
                            <label for="SH">Senior High School</label>
                            <input type="number" class="input year" min="1900" max="2099" step="1"
                                placeholder="2000 - 2000" />
                            <input type="text" name="SH" class="input" id="SH" placeholder="School">
                        </div>
                        <div class="input_wrap">
                            <label for="Co">College</label>
                            <input type="number" class="input year" min="1900" max="2099" step="1"
                                placeholder="2000 - 2000" />
                            <input type="text" name="Co" class="input" id="Co" placeholder="School">
                        </div>
                    </div>
                </form>

                <h2 class="EX">Language / Dialect</h2>
                <form>
                    <div class="form_container">
                        <div class="input_wrap" id="addLanguage">
                            <input type="text" class="input language" placeholder="Language" />
                            <input type="number" name="per" min="0" class="input percent" id="per" placeholder="%">
                        </div>
                        <div class="button-37" id="LanguageAdd">Add</div>
                    </div>
                </form>
            </div>
            <div class="form_4 data_info" style="display: none;">
                <h2>Career Objective</h2>
                <form>
                    <div class="form_container">
                        <!-- <div class="input_wrap">
                            <label for="company">Current Company</label>
                            <input type="text" name="Current Company" class="input" id="company">
                        </div> -->
                        <!-- <div class="input_wrap">
                            <label for="experience">Total Experience</label>
                            <input type="text" name="Total Experience" class="input" id="experience">
                        </div> -->
                        <div class="input_wrap">
                            <!-- <label for="designation">Designation</label> -->
                            <textarea name="" id="" placeholder="Career Objective"></textarea>
                            <!-- <input type="text" name="Designation" class="input" id="designation"> -->

                        </div>
                    </div>
                </form>

                <h2 class="EX">Work Experience</h2>
                <form>
                    <div class="form_container">
                        <!-- <div class="input_wrap">
                            <label for="company">Current Company</label>
                            <input type="text" name="Current Company" class="input" id="company">
                        </div> -->
                        <div class="input_wrap" id="location">
                            <input type="number" class="input Position" min="1900" max="2099" step="1"
                                placeholder="2000 - 2000" />
                            <input type="text" name="" class="input" id="Position" placeholder="Position">
                            <textarea type="text" name="" class="input" id="Description"
                                placeholder="Position Description"></textarea>

                        </div>
                        <div class="button-37" id="locationAlternate">Add</div>

                        <!-- <div class="input_wrap">
                            <label for="designation">Designation</label>
                            <input type="text" name="Designation" class="input" id="designation">

                        </div> -->
                    </div>
                </form>

                <h2 class="EX">Reference</h2>
                <form>
                    <div class="form_container">
                        <!-- <div class="input_wrap">
                            <label for="company">Current Company</label>
                            <input type="text" name="Current Company" class="input" id="company">
                        </div> -->
                        <div class="input_wrap" id="addReference">
                            <input type="text" name="" class="input" id="name" placeholder="Name">
                            <textarea type="text" name="" class="input" id="Description"
                                placeholder="Position Description"></textarea>

                        </div>
                        <div class="button-37" id="ReferenceAdd">Add</div>

                        <!-- <div class="input_wrap">
                            <label for="designation">Designation</label>
                            <input type="text" name="Designation" class="input" id="designation">

                        </div> -->
                    </div>
                </form>
            </div>
        </div>
        <div class="btns_wrap">
            <div class="common_btns form_1_btns">
                <button type="button" class="btn_next">Next <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_2_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span>Back</button>
                <button type="button" class="btn_next">Next <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_3_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span>Back</button>
                <button type="button" class="btn_next">Next <span class="icon">
                        <ion-icon name="arrow-forward-sharp"></ion-icon>
                    </span></button>
            </div>
            <div class="common_btns form_4_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon">
                        <ion-icon name="arrow-back-sharp"></ion-icon>
                    </span>Back</button>
                <button type="button" class="btn_done">Done</button>
            </div>

        </div>
    </div>

    <div class="modal_wrapper">
        <div class="shadow"></div>
        <div class="success_wrap">
            <span class="modal_icon">
                <ion-icon name="checkmark-sharp"></ion-icon>
            </span>
            <p>You have successfully completed the process.</p>
        </div>
    </div>

    <script type="text/javascript" src="Resume.js"></script>


    <br>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $('#locationAlternate').on('click', function() {

        $('#location').append(
            '<div class="input_wrap" id="altloc">  <input type = "number" class = "input Position" min = "1900" max = "2099" step = "1" placeholder = "2000 - 2000" / > <input type = "text" name = "" class = "input" id = "Position" placeholder = "Position"> <textarea type = "text" name = "" class = "input" id = "Description" placeholder = "Position Description"> </textarea> </div>'
        );

    });
    </script>

    <script>
    $('#LanguageAdd').on('click', function() {

        $('#addLanguage').append(
            '<div class="input_wrap" id="addL"> <input type = "text" class = "input language" placeholder = "Language" / > <input type = "number" name = "per" min = "0" class = "input percent" id = "per" placeholder = "%" ></div>'
        );

    });
    </script>

    <script>
    $('#ReferenceAdd').on('click', function() {

        $('#addReference').append(
            '<div class="input_wrap" id="addR"> <input type="text" name="" class="input" id="name" placeholder="Name"> <textarea type="text" name="" class="input" id="Description" placeholder="Position Description"></textarea></div>'
        );

    });
    </script>
</body>

</html>