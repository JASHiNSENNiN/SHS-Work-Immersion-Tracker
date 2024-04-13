<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/Reports.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
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
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <a class="login-btn" href="#" style="margin-left: 20px;">Log out</a>
        </nav>
    </header>


    <img class="logoimg" id="cover-pic" src="image/background.jpg" alt="" height="300" width="200">
    <label for="input-file1" class="button-13" role="button"><i class="fa fa-camera"></i>Edit cover photo</label>
    <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file1" />

    <div class="profile">
        <img id="profile-pic" src="image/OLSHCO.png" alt="">
        <div class="name">Our Lady of Sacred Heart College of Guimba Inc.</div>
        <label class="strand" for="">OLSHCO</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><i class="fa fa-pencil"></i> Edit
                profile</label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div>
    </div><br><br>
    <hr>
    <div class="logo">

        <nav style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Company.php">Work Immersion List</a>
            <!-- <a href="#.php">Company</a> -->
            <a href="Student.php">Student</a>
            <a href="Dashboard.php">Analytics</a>
            <<<<<<< HEAD <a class="active" href="Reports.php">Reports</a>
                <!-- <a href="Details.php">Details</a> -->
                =======
                <a class="active" href="Reports.php">Reports</a>
                <a href="Details.php">Details</a>
                >>>>>>> 528679d5d02812567ee1825a7d9d30cb84805079


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
                    <td data-th="Action"><a href="#" class="btn-4d-can"><span>View</span></a>
                        <a href="#" class="btn-3d-can"><span>Delete</span></a>
                    </td>
                </tr>
                <tr>
                    <td data-th="#">2</td>
                    <td data-th="Company">UPS South Inc.</td>
                    <td data-th="Student Name">Dan Mamaid</td>
                    <td data-th="Action"><a href="#" class="btn-4d-can"><span>View</span></a>
                        <a href="#" class="btn-3d-can"><span>Delete</span></a>
                    </td>
                </tr>
                <tr>
                    <td data-th="#">3</td>
                    <td data-th="Company">BOX Pro West</td>
                    <td data-th="Student Name">Ronald Diaz</td>
                    <td data-th="Action"><a href="#" class="btn-4d-can"><span>View</span></a>
                        <a href="#" class="btn-3d-can"><span>Delete</span></a>
                    </td>
                </tr>
                <tr>
                    <td data-th="#">4</td>
                    <td data-th="Company">Pan Providers and Co.</td>
                    <td data-th="Student Name">Raniel Cruz</td>
                    <td data-th="Action"><a href="#" class="btn-4d-can"><span>View</span></a>
                        <a href="#" class="btn-3d-can"><span>Delete</span></a>
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


</body>

</html>