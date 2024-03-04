<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Work Immersion</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    </head>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    .container {
    width: 85%;
    background: #fff;
    border-radius: 6px;
    padding: 20px 60px 30px 40px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.container .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.container .content .left-side {
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
}

.content .left-side::before {
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
}

.content .left-side .details {
    margin: 14px;
    text-align: center;
}

.content .left-side .details i {
    font-size: 30px;
    color: #3e2093;
    margin-bottom: 10px;
}

.content .left-side .details .topic {
    font-size: 18px;
    font-weight: 500;
}

.content .left-side .details .text-one,
.content .left-side .details .text-two {
    font-size: 14px;
    color: #afafb6;
}

.container .content .right-side {
    width: 75%;
    margin-left: 75px;
}

.content .right-side .topic-text {
    font-size: 23px;
    font-weight: 600;
    color: #3e2093;
}

.right-side .input-box {
    height: 50px;
    width: 100%;
    margin: 12px 0;
}

.right-side .input-box input,
.right-side .input-box textarea {
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F0F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
}

.right-side .message-box {
    min-height: 110px;
}

.right-side .input-box textarea {
    padding-top: 6px;
}

.right-side .button {
    display: inline-block;
    margin-top: 12px;
}

.right-side .button input[type="button"] {
    color: #fff;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background: #3e2093;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button input[type="button"]:hover {
    background: #5029bc;
}

@media (max-width: 950px) {
    .container {
        width: 90%;
        padding: 30px 40px 40px 35px;
    }
    .container .content .right-side {
        width: 75%;
        margin-left: 55px;
    }
}

@media (max-width: 820px) {
    .container {
        margin: 40px 0;
        height: 100%;
    }
    .container .content {
        flex-direction: column-reverse;
    }
    .container .content .left-side {
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .container .content .left-side::before {
        display: none;
    }
    .container .content .right-side {
        width: 100%;
        margin-left: 0;
    }
}</style>
<body>

    <header>
         <div class="logo">
         <a href="index.php">
         <img src="../img/logov3.jpg" alt="Logo">
           </a>
        </div>
        <nav>
            <a href="../index.php">Home</a>
            <a href="job_list.php">Find a Work Immerssion</a>
            <a href="contact.php">Contact</a>
            <a href="aboutUs.php">About</a>
            
        </nav>
        <!-- <button class="login-btn">Log In</button> -->
         <!-- <div class="css-1ld7x2h eu4oa1w0"></div>
        <button class="login-btn">Log In</button> -->
        <a class="login-btn" href="#" style="margin-left: 20px;" >Register</a>
        <a class="login-btn" href="#">Log in</a>
    </header>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="../img/joblisting.jpg" style="width:100%">
            <!-- <div class="text">Get Your Work Immersion</div> -->
            <h1 class="text-slide-container">Contact Us</h1>
        </div>


    </div>

    <section class="contact-section">
        <!-- <h2>Contact the Owner</h2>
        <form action="#" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form> -->
        
<!-- <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4 >Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 55s</p>
          </div>

          
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.7007677556635!2d120.76506947509104!3d15.660914950239507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33912cdb2318296d%3A0xe4e2117e97dfc92e!2sOur%20Lady%20of%20The%20Sacred%20Heart%20College!5e0!3m2!1sen!2sph!4v1709356304485!5m2!1sen!2sph"  frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>


      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section> -->

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
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
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message"></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>

    </section>

    
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <p>By using Workify you agrree to new <a href="#"></a></p>
    </footer>

    <!-- JavaScript to display the current date -->
    <script>
        document.getElementById("currentDate").innerHTML = new Date().getFullYear();
    </script>

</body>
</html>