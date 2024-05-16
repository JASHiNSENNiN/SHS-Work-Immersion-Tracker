<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/Company.css">
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>


</head>

<body>

    <header class="nav-header">
        <div class="logo">
            <a href="index.php">
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


    <img class="logoimg" id="cover-pic" src="image/background.jpg" alt="" width="200" height="300">
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
            <a class="link" id="#area" href="Company_Area.php"> Company Area</a>
            <a class="active" id="#review" href="Company_Review.php">Company review</a>
            <a class="link" id="#narrative" href="Narrative_Report.php">Narrative Report</a>

            <a class="link" id="#details">Details</a>
            <!-- <a href="aboutUs.php">About</a> -->

        </nav>
    </div>
    <hr class="line_bottom">



    <br>


    <section class="section-search">

        <h1 class="sfa">Discover a Great Place to Work</h1>
        <p style="color:#595959; padding-bottom: 20px">Get the Inside Scoop on Company Reviews</p>
        <!-- <label>Company name or Work Immersion title</label> -->
        <div class="line-search">
            <div class="searchwork">
                <form action="#" method="get">

                    <div class="search-container">
                        <button type="submit"><i class="fas fa-search"></i></button>
                        <input type="text" placeholder="Company name or Work Immersion title ">

                    </div>

                    <input class="input-find-now" type="submit-find-now" value="Find Now" href="">
            </div>
            </form>
        </div>

    </section>

    <!------------------------------------------POPULAR Companies -------------------------------------------->

    <!-- Homepage: Grid -->
    <section class="section-gutter company-grid">
        <div class="container">
            <div class="section-bg-white section-wrapper company-grid__wrapper">
                <header
                    class="section-wrapper__header section-wrapper__header--has-cta section-wrapper__header--has-bg">
                    <h2 class="h4 company-grid__title">Popular companies</h2>
                    <div class="section-wrapper__header-cta">
                        <a class="link-text" href="/companies">View all <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </header>
                <div class="section-wrapper__content">
                    <div class="company-grid__list">
                        <div class="company-grid__item">
                            <div class="company-card">
                                <div class="company-card__inner">
                                    <a class="company-card__image-wrapper" href="/company" title="Go to Company Name">
                                        <figure class="company-card__figure">
                                            <img class="company-card__image" alt="Company Name"
                                                src="../Company/image/NIA.png">
                                        </figure>
                                    </a>
                                    <div class="company-card__content">
                                        <div class="company-card__block">
                                            <h3 class="company-card__title">
                                                <a class="company-card__title-link" href="/company">NIA</a>
                                            </h3>
                                            <div class="company-card__review">
                                                <div class="review-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="css-hid0zu e1wnkr790">388 reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-card__links">
                                        <a class="company-card__link" href="#">Reviews</a>
                                        <a class="company-card__link" href="#">Question</a>
                                        <a class="company-card__link" href="#">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company-grid__item">
                            <div class="company-card">
                                <div class="company-card__inner">
                                    <a class="company-card__image-wrapper" href="/company" title="Go to Company Name">
                                        <figure class="company-card__figure">
                                            <img class="company-card__image" alt="Company Name"
                                                src="https://via.placeholder.com/150">
                                        </figure>
                                    </a>
                                    <div class="company-card__content">
                                        <div class="company-card__block">
                                            <h3 class="company-card__title">
                                                <a class="company-card__title-link" href="/company">Company
                                                    Name</a>
                                            </h3>
                                            <div class="company-card__review">
                                                <div class="review-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="css-hid0zu e1wnkr790">388 reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-card__links">
                                        <a class="company-card__link" href="#">Reviews</a>
                                        <a class="company-card__link" href="#">Question</a>
                                        <a class="company-card__link" href="#">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company-grid__item">
                            <div class="company-card">
                                <div class="company-card__inner">
                                    <a class="company-card__image-wrapper" href="/company" title="Go to Company Name">
                                        <figure class="company-card__figure">
                                            <img class="company-card__image" alt="Company Name"
                                                src="https://via.placeholder.com/150">
                                        </figure>
                                    </a>
                                    <div class="company-card__content">
                                        <div class="company-card__block">
                                            <h3 class="company-card__title">
                                                <a class="company-card__title-link" href="/company">Company
                                                    Name</a>
                                            </h3>
                                            <div class="company-card__review">
                                                <div class="review-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="css-hid0zu e1wnkr790">388 reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-card__links">
                                        <a class="company-card__link" href="#">Reviews</a>
                                        <a class="company-card__link" href="#">Question</a>
                                        <a class="company-card__link" href="#">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company-grid__item">
                            <div class="company-card">
                                <div class="company-card__inner">
                                    <a class="company-card__image-wrapper" href="/company" title="Go to Company Name">
                                        <figure class="company-card__figure">
                                            <img class="company-card__image" alt="Company Name"
                                                src="https://via.placeholder.com/150">
                                        </figure>
                                    </a>
                                    <div class="company-card__content">
                                        <div class="company-card__block">
                                            <h3 class="company-card__title">
                                                <a class="company-card__title-link" href="/company">Company
                                                    Name</a>
                                            </h3>
                                            <div class="company-card__review">
                                                <div class="review-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="css-hid0zu e1wnkr790">388 reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-card__links">
                                        <a class="company-card__link" href="#">Reviews</a>
                                        <a class="company-card__link" href="#">Question</a>
                                        <a class="company-card__link" href="#">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company-grid__item">
                            <div class="company-card">
                                <div class="company-card__inner">
                                    <a class="company-card__image-wrapper" href="/company" title="Go to Company Name">
                                        <figure class="company-card__figure">
                                            <img class="company-card__image" alt="Company Name"
                                                src="https://via.placeholder.com/150">
                                        </figure>
                                    </a>
                                    <div class="company-card__content">
                                        <div class="company-card__block">
                                            <h3 class="company-card__title">
                                                <a class="company-card__title-link" href="/company">Company
                                                    Name</a>
                                            </h3>
                                            <div class="company-card__review">
                                                <div class="review-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="css-hid0zu e1wnkr790">388 reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-card__links">
                                        <a class="company-card__link" href="#">Reviews</a>
                                        <a class="company-card__link" href="#">Question</a>
                                        <a class="company-card__link" href="#">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company-grid__item">
                            <div class="company-card">
                                <div class="company-card__inner">
                                    <a class="company-card__image-wrapper" href="/company" title="Go to Company Name">
                                        <figure class="company-card__figure">
                                            <img class="company-card__image" alt="Company Name"
                                                src="https://via.placeholder.com/150">
                                        </figure>
                                    </a>
                                    <div class="company-card__content">
                                        <div class="company-card__block">
                                            <h3 class="company-card__title">
                                                <a class="company-card__title-link" href="/company">Company
                                                    Name</a>
                                            </h3>
                                            <div class="company-card__review">
                                                <div class="review-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="css-hid0zu e1wnkr790">388 reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-card__links">
                                        <a class="company-card__link" href="#">Reviews</a>
                                        <a class="company-card__link" href="#">Question</a>
                                        <a class="company-card__link" href="#">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="company-grid__item">
                            <div class="company-card">
                                <div class="company-card__inner">
                                    <a class="company-card__image-wrapper" href="/company" title="Go to Company Name">
                                        <figure class="company-card__figure">
                                            <img class="company-card__image" alt="Company Name"
                                                src="https://via.placeholder.com/150">
                                        </figure>
                                    </a>
                                    <div class="company-card__content">
                                        <div class="company-card__block">
                                            <h3 class="company-card__title">
                                                <a class="company-card__title-link" href="/company">Company
                                                    Name</a>
                                            </h3>
                                            <div class="company-card__review">
                                                <div class="review-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="css-hid0zu e1wnkr790">388 reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-card__links">
                                        <a class="company-card__link" href="#">Reviews</a>
                                        <a class="company-card__link" href="#">Question</a>
                                        <a class="company-card__link" href="#">News</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>By using Workify you agrree to new <a href="#"></a></p> -->

    </footer>

    <script src="../js/job_list.js"></script>
    <!-- JavaScript to display the current date -->
    <script>
    document.getElementById("currentDate").innerHTML = new Date().getFullYear();
    </script>

    <script>
    $(".link").click(function(e) {
        e.preventDefault();
        $(".content").removeClass("active");
        var content_id = $(this).attr("id");
        $(content_id).addClass("active");
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




</body>

</html>