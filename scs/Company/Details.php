<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
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

        <nav>
            <a href=""><i class='fas fa-user-alt' style='font-size:24px; color: black; margin-top:5px;'></i></a>
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <a class="login-btn" href="#" style="margin-left: 20px;">Log out</a>
        </nav>
    </header>


    <img class="logoimg" id="cover-pic" src="image/background.jpg" alt="" height="300" width="200">
    <label for="input-file1" class="button-13" role="button"><i class="fa fa-camera"></i>Edit cover photo</label>
    <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file1" />


    <div class="profile">
        <img id="profile-pic" src="image/NIA.png" alt="">
        <div class="name">National Irrigation Administration</div>
        <label class="strand" for="">NIA</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><i class="fa fa-pencil"></i>
                Edit
                profile</label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div>

    </div><br>
    <hr>
    <div class="logo">

        <nav style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Job_ads.php"> Job Ads</a>
            <a href="Job_request.php">Job Request</a>
            <a href="Faculty_report.php">Faculty Report</a>
            <a class="active" href="Details.php">Details</a>


        </nav>
    </div>
    <hr class="line_bottom">
    <div class="bgc">
        <h1>About the Company</h1>
        <div class="snapshot_container">
            <!-- <span class="snapshot_title"><strong>Snapshots</strong>(Added 7/20 Available)</span> -->
            <span class="snapshot_toggle">Toggle to show snapshot details
                <button class="button-26">+</button>
                <button class="button-14" role="button">MANAGE</button>
            </span>

            <div class="api_card">
                <div class="api_details">
                    <p class="api_title">Branch Manager</p></br>
                    <p class="api_details_one">Payday: 02/01/2021</p></br>
                    <p class="api_details_two">Earnings: 123456</p></br>
                    <p class="api_details_three">Earnings: 123456</p>
                </div>
                <a class="see_more" href="#">See more</a>
            </div>
            <div class="api_card">
                <div class="api_details">
                    <p class="api_title">Paystub</p></br>
                    <p class="api_details_one">Payday: 02/01/2021</p></br>
                    <p class="api_details_two">Earnings: 123456</p></br>
                    <p class="api_details_three">Earnings: 123456</p>
                </div>
                <a class="see_more" href="#">See more</a>
            </div>
            <div class="section-wrap">
                <div class="api_card_half">
                    <div class="api_details">
                        <p class="api_title">Paystub</p></br>
                    </div>
                    <a class="see_more" href="#">See more</a>
                </div>
                <div class="api_card_half">
                    <div class="api_details">
                        <p class="api_title">Paystub</p></br>
                    </div>
                    <a class="see_more" href="#">See more</a>
                </div>
            </div>
        </div>

    </div>
    <br>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
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