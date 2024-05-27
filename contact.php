<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Workify </title>
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<header class="nav-header">
    <div class="logo">
        <a href="index.php">
            <img src="./img/logov3.jpg" alt="Logo">
        </a>
        <nav>
            <a href="index.php">Home</a>
            <a href="job_list.php">Company review</a>
            <a class="active-header" href="contact.php">Contact</a>
        </nav>
    </div>
    <nav>
        <a class="login-btn" href="./php/login_form.php" style="margin-left: 20px;">Sign in</a>
        <div class="css-1ld7x2h eu4oa1w0"></div>
        <a href="post_work_Immersion.php">Post Work Immersion</a>
    </nav>
</header>

<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="./img/joblisting.jpg" style="width:100%">

        <h1 class="text-slide-container">Contact Us</h1>
    </div>


</div>
<div class="video-contact">
    <video class="jpcs-vid" width="800" autoplay loop muted>
        <source src="./img/video-con.mp4" type="video/mp4">


    </video>

</div>

<section class="contact-section">


    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Afan Salvador St, </div>
                    <div class="text-two"> Guimba, Nueva Ecija</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+0098 9893 5647</div>
                    <div class="text-two">+0096 3434 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">Jpcs@gmail.com</div>
                    <div class="text-two">BSIT@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>Thank you for considering Workify for your work immersion. We are committed to providing a valuable
                    and informative experience to all our applicants. Please feel free to contact us if you have any
                    questions or would like to learn more about our website.</p>
                <form onsubmit="sendEmail(); reset(); return false ">
                    <div class="input-box">
                        <input type="text" id="name" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="text" id="email" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box">
                        <textarea id="message" placeholder="Enter your message"></textarea>
                    </div>
                    <div>
                        <button class="sub-button" type="submit">Send Now</button>
                        <!-- <input type="button" value="Send Now"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>


<footer>
    <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>

</footer>

<!-- JavaScript to display the current date -->
<script>
    document.getElementById("currentDate").innerHTML = new Date().getFullYear();
</script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendEmail() {
        // Email.send({
        //     SecureToken: "945bffad-2ab2-4791-b83f-68371930b242",
        //     To: 'aldeakel27@gmail.com',
        //     From: document.getElementById("email").value,
        //     Subject: "New Contact Form Enquiry",
        //     Body: "Name" + document.getElementById("name").value +
        //         "<br> Email: " + document.getElementById("email").value +
        //         "<br> Message : " + document.getElementById("message").value
        // }), then(
        //     message => alert("Message Sent Successfully")
        // );
        Email.send({
            SecureToken: "945bffad-2ab2-4791-b83f-68371930b242",
            To: 'aldeakel27@gmail.com',
            From: document.getElementById("email").value,
            Subject: "New Contact Form Enquiry",
            Body: "Name :" + document.getElementById("name").value +
                "<br> Email : " + document.getElementById("email").value +
                "<br> Message : " + document.getElementById("message").value
        }).then(
            message => alert(message)
        );
    }
</script>

</body>

</html>