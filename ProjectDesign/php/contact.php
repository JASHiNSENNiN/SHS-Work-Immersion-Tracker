<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search Portal</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">

    </head>
<body>

    <header>
         <div class="logo">
            <img src="../logo.jpg" alt="Logo">
            <h1>\</h1>
            <h1>Vorkify</h1>
        </div>
        <nav>
            <a href="../index.php">Home</a>
            <a href="contact.php">Contact</a>
            <a href="aboutUs.php">About Us</a>
            <a href="faq.php">FAQ</a>
            
        </nav>
        <!-- <button class="login-btn">Log In</button> -->
         <div class="css-1ld7x2h eu4oa1w0"></div>
        <button class="login-btn">Log In</button>
    </header>

    <section class="contact-section">
        <h2>Contact the Owner</h2>
        <form action="#" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>
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