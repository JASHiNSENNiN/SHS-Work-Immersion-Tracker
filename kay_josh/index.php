<?php
include_once "php/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Workify | Log In</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background: url('sample.jpg') center / cover no-repeat;">
<header>
        <nav class="navbar">
            <a href="#" class="logo">
                <img src="logo.jpg" alt="logo">
                <h2>Workify</h2>
            </a>
            <!-- <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li>|</li>
            </ul> -->
            <button class="btn btn-outline-primary" id="myBtn">LOG IN</button>
         
        </nav>
    </header>
    <!-- <button class="login-btn" id="myBtn">LOG IN</button> -->
    <link rel="stylesheet" href="css/login.css">
    <div id="myModal" class="modal">
    <div class="modal-content">
    <div class="row" >
    <span class="close"></span>
        <div class="colm-logo">
        
            <h1>Workify</h1>
            <h2>
                Streamlining Senior High School Work Immersion Management
                System with Data Analytics
            </h2>
        </div>
        <div id="login-form" class="colm-form" >
            <div class="form-container">
                <input autocomplete="email" type="text" placeholder="Email address" id="login-email" name="login-email"
                    required>
                <input autocomplete="current-password" type="password" placeholder="Password" id="login-password"
                    name="login-password" required>
                <button class="btn-login" onclick="login()">Login</button>
                <button class="btn-new" id="switch-to-register" onclick="showLoginForm()">Create New
                    Account</button>
            </div>
        </div>
        <div id="register-form" class="colm-form" >
            <div class="form-container">
                <input type="text" for="email" name="email" id="email" placeholder="Email address" required>
                <input type="password" placeholder="Password" id="password" name="confirm-password" required>
                <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password"
                    required>
                <select id="account-type" name="account-type" required onchange="toggleFields()">
                    <option value class="null-type">Account Type:</option>
                    <option value="student">Student</option>
                    <option value="school">School</option>
                    <option value="organization">Partner Organization</option>
                </select>
                <div id="student-fields" style="display: none;">
                    <input type="text" placeholder="First Name" id="first-name" name="first-name">
                    <input type="text" placeholder="Middle Name" id="middle-name" name="middle-name">
                    <input type="text" placeholder="Last Name" id="last-name" name="last-name">
                    <select name="grade-level" id="grade-level">
                        <option value class="null-type">Grade Level:</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select name="strand" id="strand">
                        <option value class="null-type">Strand:</option>
                        <option value="stem">STEM</option>
                        <option value="humss">HUMSS</option>
                        <option value="abm">ABM</option>
                        <option value="gas">GAS</option>
                        <option value="tvl">TVL</option>
                    </select>
                </div>
                <div id="school-fields" style="display: none;">
                    <input type="text" placeholder="School Name" id="school-name" name="school-name">
                </div>
                <div id="partner-fields" style="display: none;">
                    <input type="text" placeholder="Organization Name" id="organization-name" name="organization-name">
                    <select name="strand-focus" id="strand-focus">
                        <option value class="null-type">Strand:</option>
                        <option value="stem">STEM</option>
                        <option value="humss">HUMSS</option>
                        <option value="abm">ABM</option>
                        <option value="gas">GAS</option>
                        <option value="tvl">TVL</option>
                    </select>
                </div>
                <button class="btn-login" onclick="validateForm()">Register</button>
                <button class="btn-new" id="switch-to-login" onclick="showLoginForm()">
                    Log in to Existing Account
                </button>
            </div>
        </div>
        <script src="js/login.js"></script>
    </div>
    </div>

</div>
</body>

</html>
<script>
function printCookies() {
    const cookies = document.cookie.split(";")
        .map(cookie => cookie.trim());

    console.log("Cookies:");
    cookies.forEach(cookie => {
        console.log(cookie);
    });
}


window.onload = printCookies;
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
<script src="/SHS-Work-Immersion-Tracker/js/session_handler.js"></script>