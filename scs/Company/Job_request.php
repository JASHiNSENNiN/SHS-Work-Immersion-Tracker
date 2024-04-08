<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/job_request.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->


    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet '>


</head>

<body>

    <header class="nav-header">
        <div class="logo">
            <a href="#">
                <img src="image/logov3.jpg" alt="Logo">
        </div>

        <nav>
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <a class="login-btn" style="margin-left: 20px; border-radius: 5px;">Log out</a>
        </nav>
    </header>


    <img class="logoimg" src="image/background.jpg" alt="" height="300" width="200">

    <div class="profile">
        <img src="image/NIA.png" alt="">
        <div class="name">National Irrigation Administration</div>
        <label class="strand" for="">NIA</label>
        <div class="Settings"><button><i class="fa fa-pencil"></i> Edit profile</button></div>
    </div><br>
    <hr>
    <div class="logo">

        <nav style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Job_ads.php"> Job Ads</a>
            <a class="active" href="Job_request.php">Job Request</a>
            <a href="Faculty_report.php">Faculty Report</a>
            <a href="Details.php">Details</a>


        </nav>
    </div>
    <hr class="line_bottom">


    <div class="sales-boxes">
        <div class="recent-sales box">

            <b>
                <div class="box-topic">Job Request</div>
            </b>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>

            <br>
            <!-- <div class="title">Popularity Company </div> -->
            <!-- <div class="title">Student List <div class="icon"><i class="bx bx-user-plus"></i> </div> </div> -->

            <table id="tbl">
                <tr>
                    <th>#</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Strand</th>
                    <th>School</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2024-11</td>
                    <td>Miguel Natividad</td>
                    <td>HUMSS</td>
                    <td>OLSHCO</td>
                    <td>Guimba</td>
                    <td><button type="button" class="button-9">Accept</button>
                        <button type="button" class="button-4">Details</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2024-12</td>
                    <td>Russel Requina</td>
                    <td>GAS</td>
                    <td>National</td>
                    <td>Guimba</td>
                    <td><button type="button" class="button-9">Accept</button>
                        <button type="button" class="button-4">Details</button>
                    </td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>2024-13</td>
                    <td>Josh Cinense</td>
                    <td>STEM</td>
                    <td>BLUN</td>
                    <td>Guimba</td>
                    <td><button type="button" class="button-9">Accept</button>
                        <button type="button" class="button-4">Details</button>
                    </td>

                </tr>
            </table>
            <!-- <div class="button">
                        <a href="#">See All</a>
                    </div> -->
        </div>

    </div>


    <!-- <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
     

    </footer> -->
    
    <div class="sub-footer">
        2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students
    </div>


</body>

</html>