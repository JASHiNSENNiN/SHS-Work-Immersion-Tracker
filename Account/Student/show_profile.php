<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/php/session_handler.php';

$firstName = $student_profile['first_name'];
$middleName = $student_profile['middle_name'];
$lastName = $student_profile['last_name'];
$school = $student_profile['school'];
$gradeLevel = $student_profile['grade_level'];
$strand = $student_profile['strand'];
$stars = $student_profile['stars'];
$currentWork = $student_profile['current_work'];
$email = $_SESSION['email'];

$profile_div = '<header class="nav-header">
        <div class="logo">
            <a href="image/index.php">
                <img src="image/logov3.jpg" alt="Logo">
            </a>
        </div>
        <nav class="by">
            <a href=""><i class="fas fa-comment-alt" style="font-size:24px; margin-top:5px;"></i></a>

            <div class="dropdowntf" style="float:right;">
                <a href="" class="notification"><i class="fas fa-bell" style="font-size:24px;"></i><span
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
                <a href=""><i class="fas fa-user-alt" style="font-size:24px;  margin-top:5px;"></i></a>
                <div class="dropdown-content">
                    <div class="email">' . $email . '</div>
                    <a href="Profile.php"><i class="fas fa-user-alt" style="font-size:24px; margin-right:10px;"></i> My
                        Profile</a>
                    <a href="#"> <i class="fas fa-comment-alt" style="font-size:24px;margin-right:10px;"></i>My
                        Reviews</a>
                    <a href="Settings.php"><i class="fa fa-gear" style="font-size:24px"></i> Settings</a>
                    <hr>
                    <div class="foot">&copy; 2024 WorkifyPH. All rights reserved. | Junior Philippines Computer
                        Society Students
                    </div>
                    <hr>
                    <a class="logout" href="' . '/backend/php/logout.php' . '"> Log out</a>
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
        <img src="image/me.jpg" alt="">
        <div class="name">' . $firstName . ' ' . $middleName . ' ' . $lastName . '</div>
        <label class="strand" for="">' . $strand . '</label>

        <div class="Settings"><label for="input-file2" class="button-12" role="button"><span class="edit"><i
                        class="fa fa-pencil"></i> Edit
                    profile</span><span class="pen"><i class="fa fa-pencil"></i></span></label>
            <input type="file" accept="image/jpeg, image/png, image/gif" id="input-file2" />
        </div>
    </div>';