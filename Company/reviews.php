<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/reviews.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>

</head>

<body>

    <header class="nav-header">
        <div class="logo">
            <a href="index.php">
                <img src="https://i.postimg.cc/bwCDv2SH/logov3.jpg" alt="Logo">
            </a>
            <nav class="dash-middle">
                <a href="index.php">Home</a>
                <a href="job_list.php">Company review</a>
                <a href="contact.php">Contact</a>
            </nav>
        </div>
        <nav>
            <a class="login-btn" href="login.php" style="margin-left: 20px;">Sign in</a>
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <a class="com-btn" href="post_work_Immersion.php">Post Work Immersion</a>
        </nav>
    </header>


    <img class="logoimg" id="cover-pic" src="image/background.jpg" alt="" height="300" width="200">
    <label for="input-file1" class="button-13" role="button"><span class="edit"><i class="fa fa-camera"></i>Edit cover
            photo</span>
        <span class="cam"><i class="fa fa-camera"></i></span></label>
    <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file1" />


    <div class="profile-name">
        <img id="profile-pic" src="image/NIA.png" alt="">
        <div class="name">National Irrigation Administration</div>
        <label class="strand" for="">NIA</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><span class="edit"><i class="fa fa-pencil"></i> Edit
                    profile</span><span class="pen"><i class="fa fa-pencil"></i></span></label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div>

    </div><br>
    <hr>
    <div class="logo">

        <nav class="bt" style="position:relative; margin-left:auto; margin-right:auto;">
            <a href="Details.php">Snapshot</a>
            <a href="About.php">Why Join Us</a>
            <a class="active" href="reviews.php">Reviews</a>
            <a href="questions.php">Questions</a>
            <a href="work-immersion-list.php">Work immersion </a>
            <a href="photos.php">Photos</a>
        </nav>
    </div>
    <hr class="line_bottom">
    <div class="bgc">

        <div class="snapshot_container">
            <h1 style="font-size: 1.2rem; margin:0%; margin: bottom 20px; margin-block-end: 1rem;">About NATIONAL IRRIGATION ADMINISTRATION (NIA)</h1>

        </div>


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

    </script>
</body>

</html>