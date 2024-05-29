<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dashboard</title>
    <link rel="shortcut icon" type="x-icon" href="image/W.png">
    <link rel="stylesheet" type="text/css" href="css/Reports.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>


</head>

<body>

    <header class="nav-header">
        <!-- <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label> -->
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
                            <p>sent report for Revira, Joshua</p>
                        </div>
                    </div>
                    <div class="notifi-item">
                        <img src="../Company/image/NIA.png" alt="img">
                        <div class="text">
                            <h4>NIA</h4>
                            <p>sent report for Diaz, Ronald</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown" style="float:right;">
                <a href=""><i class='fas fa-user-alt' style='font-size:24px;  margin-top:5px;'></i></a>
                <div class="dropdown-content">
                    <div class="email">olshco@gmail.com</div>
                    <a href="Profile.php"><i class='fas fa-user-alt' style='font-size:24px; margin-right:10px;'></i> My
                        Profile</a>
                    <a href="Dashboard.php"> <i class='fas fa-comment-alt'
                            style='font-size:24px;margin-right:10px;'></i>Company
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
        <img id="profile-pic" src="image/OLSHCO.png" alt="">
        <div class="name">Our Lady of Sacred Heart College of Guimba Inc.</div>
        <label class="strand" for="">OLSHCO</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><span class="edit"><i
                        class="fa fa-pencil"></i> Edit
                    profile</span><span class="pen"><i class="fa fa-pencil"></i></span></label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div>
    </div><br><br>
    <hr>
    <div class="logo">

        <nav class="bt" style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Company.php">Work Immersion List</a>
            <!-- <a href="#.php">Company</a> -->
            <a href="Student.php">Student</a>
            <a href="Dashboard.php">Analytics</a>
            <a class="active" href="Reports.php">Reports</a>
            <a href="Details.php">Details</a>


        </nav>
    </div>
    <hr class="line_bottom">



    <div class="container2">
        <!-- <h1>HUMSS</h1> -->
        <table class="rwd-table">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>Student Name</th>
                    <th>Action</th>

                </tr>
                <tr>
                    <td data-th="#">1</td>
                    <td data-th="Company">NIA</td>
                    <td data-th="Student Name">Joshua Rivera</td>
                    <td data-th="Action">
                        <!-- <a href="#" id="myBtn" class="btn-4d-can"><span>View</span></a> -->
                        <button id="myBtn" class="button-9" role="button">View</button>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="image/evaluation.png" alt="" width="1100" height="1400">
                            </div>

                        </div><br>
                        <button class="button-37" role="button">Archive</button>
                    </td>
                </tr>
                <tr>
                    <td data-th="#">2</td>
                    <td data-th="Company">UPS South Inc.</td>
                    <td data-th="Student Name">Dan Mamaid</td>
                    <td data-th="Action"><button id="myBtn" class="button-9" role="button">View</button>
                        <button class="button-37" role="button">Archive</button>
                    </td>
                </tr>
                <tr>
                    <td data-th="#">3</td>
                    <td data-th="Company">BOX Pro West</td>
                    <td data-th="Student Name">Ronald Diaz</td>
                    <td data-th="Action"><button id="myBtn" class="button-9" role="button">View</button>
                        <button class="button-37" role="button">Archive</button>
                    </td>
                </tr>
                <tr>
                    <td data-th="#">4</td>
                    <td data-th="Company">Pan Providers and Co.</td>
                    <td data-th="Student Name">Raniel Cruz</td>
                    <td data-th="Action"><button id="myBtn" class="button-9" role="button">View</button>
                        <button class="button-37" role="button">Archive</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- <h3>Resize Me</h3> -->
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

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>


</body>

</html>