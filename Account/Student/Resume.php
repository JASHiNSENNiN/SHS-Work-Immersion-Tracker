<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once 'show_profile.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Resume.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Resume</title>
</head>

<body>
    <div class="container">
        <div class="left_Side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="image/me.jpg" alt="">
                </div>
                <h2>Miguel Von Natividad <br> <span>HUMSS</span></h2>
            </div>
            <div class="contactInfo">
                <h3 class="title"> Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text">+639565101932</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text">natividad@gmail.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text">Guimba, Nueva Ecija</span>
                    </li>
                    <!-- <li>
                        <span class="icon"></span>
                        <span class="text">+639565101932</span>
                    </li> -->
                </ul>
            </div>

            <div class="contactInfo education">
                <h3 class="title">Education</h3>
                <ul>
                    <li>
                        <h5>2010 - 2013</h5>
                        <h4>Guimba West Central School</h4>
                        <h4>Junior High School name</h4>
                    </li>
                    <li>
                        <h5>2007 - 2010</h5>
                        <h4>Our Lady Of Sacred Heart College of Guimba Inc.</h4>
                        <h4>Senior High School</h4>
                    </li>

                </ul>
            </div>
            <div class="contactInfo language">
                <h3 class="title">Languages</h3>
                <ul>
                    <li>
                        <span class="text">English</span>
                        <span class="percent">
                            <div style="width: 90%;"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text">Tagalog</span>
                        <span class="percent">
                            <div style="width: 50%;"></div>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right_Side">
            <div class="about">
                <h2 class="title2">Career Objective</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, velit hic sequi, aliquam dolores
                    sit enim iure eos expedita id minus sapiente reprehenderit dolor similique accusantium qui esse!
                    Facere, aliquid?</p>
            </div>
            <div class="about">
                <h2 class="title2">Experience</h2>
                <hr>
                <div class="box">
                    <div class="year_company">
                        <h5>2019 - Present</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Senior UX Designer</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe labore velit eaque voluptas
                            quidem vitae soluta. Sunt cumque nam, mollitia sequi laudantium laboriosam vitae et.
                            Perspiciatis beatae vero ducimus alias.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="year_company">
                        <h5>2016 - 2019</h5>
                        <h5>Company name</h5>
                    </div>
                    <div class="text">
                        <h4>UX / UI Designer</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe labore velit eaque voluptas
                            quidem vitae soluta. Sunt cumque nam, mollitia sequi laudantium laboriosam vitae et.
                            Perspiciatis beatae vero ducimus alias.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="year_company">
                        <h5>2014 - 2016</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Junior UX Designer</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe labore velit eaque voluptas
                            quidem vitae soluta. Sunt cumque nam, mollitia sequi laudantium laboriosam vitae et.
                            Perspiciatis beatae vero ducimus alias.</p>
                    </div>
                </div>
            </div>
            <div class="about skills">
                <h2 class="title2">Professional Skills</h2>
                <hr>
                <div class="box">
                    <h4>HTML</h4>
                    <div class="percent">
                        <div style="width:100%"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>CSS</h4>
                    <div class="percent">
                        <div style="width:80%"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Javascript</h4>
                    <div class="percent">
                        <div style="width:60%"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Photoshop</h4>
                    <div class="percent">
                        <div style="width:40%"></div>
                    </div>
                </div>
            </div>

            <div class="about reference">
                <h2 class="title2">Reference</h2>
                <hr>
                <div class="text prof">
                    <h4 class="Ref">Mrs. Rubelyn Esperon</h4>
                    <p>Our Lady of the Sacred Heart College Inc. <br> (College Dean)
                    </p>
                </div>



            </div>

            <div class="about applicant">
                <h2 class="name"><u>Ronald Diaz</u></h2>
                <h4 class="App">Applicant</h4>

            </div>
        </div>
    </div>
</body>

</html>