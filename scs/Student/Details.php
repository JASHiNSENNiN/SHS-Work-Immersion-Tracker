<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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
            <a class="active" id="#details" href="Details.php">Details</a>



        </nav>
    </div>


    <br>


    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

    </footer>

    <script>
        let profilePic1 = document.getElementById("cover-pic");
        let inputFile1 = document.getElementById("input-file1");

        inputFile1.onchange = function () {
            profilePic1.src = URL.createObjectURL(inputFile1.files[0]);
        }
    </script>

    <script>
        let profilePic2 = document.getElementById("profile-pic");
        let inputFile2 = document.getElementById("input-file2");

        inputFile2.onchange = function () {
            profilePic2.src = URL.createObjectURL(inputFile2.files[0]);
        }
    </script>


</body>

</html>