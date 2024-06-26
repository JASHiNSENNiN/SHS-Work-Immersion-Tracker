<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once 'show_profile.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/Profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Student Dashboard</title>

    <!-- Custom Css -->
    <style>

    </style>

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
</head>

<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>

        <!-- Navbar -->
        <ul>
            <!-- <li>
          <a href="#message">
            <span class="icon-count">29</span>
            <i class="fa fa-envelope fa-2x"></i>
          </a>
        </li>
        <li>
          <a href="#notification">
            <span class="icon-count">59</span>
            <i class="fa fa-bell fa-2x"></i>
          </a>
        </li> -->
            <li>
                <a href="Details.php">
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="image/me.jpg" alt="" width="100" height="100" />

            <div class="name">Miguel Von A. Natividad</div>
            <div class="job">HUMSS</div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align="center" />
            </div>
            <div class="url">
                <a href="Settings.php">Settings</a>
                <hr align="center" />
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">

                <table>
                    <tbody>
                        <tr>
                            <td><b>Name</b></td>
                            <td>:</td>
                            <td>Miguel Von A. Natividad</td>
                        </tr>
                        <tr>
                            <td><b>Strand</b>:</td>
                            <td>:</td>
                            <td>Our Lady Of Sacred Heart College of Guimba Inc.</td>
                        </tr>
                        <tr>
                            <td><b>School</b></td>
                            <td>:</td>
                            <td>Our Lady Of Sacred Heart College of Guimba Inc.</td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td>:</td>
                            <td>natividadma@students.olshco.edu</td>
                        </tr>
                        <tr>
                            <td><b>Address</b></td>
                            <td>:</td>
                            <td>Afan Salavador Street Guimba Nueva Ecija</td>
                        </tr>
                        <tr>
                            <td><b>Contact Number</b></td>
                            <td>:</td>
                            <td>0917-8830311</td>
                        </tr>
                        <tr>
                            <td><b>Guardians</b></td>
                            <td>:</td>
                            <td>N/A</td>
                        </tr>
                        <!-- <tr>
                            <td>Skill</td>
                            <td>:</td>
                            <td>PHP, HTML, CSS, Java</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <h2>SOCIAL MEDIA</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div class="social-media">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
    <footer>
        2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students
    </footer>
</body>

</html>