<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Work Immersion</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">

    </head>
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
        
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <!-- <div class="section-title">
      <h2>Get in Touch</h2>
     
    </div> -->

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
</section>
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