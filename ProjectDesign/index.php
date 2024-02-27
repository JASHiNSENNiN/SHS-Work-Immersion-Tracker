<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search Portal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Logo">
            <h1>\</h1>
            <h1>Vorkify</h1>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="./php/contact.php">Contact</a>
            <a href="./php/aboutUs.php">About Us</a>
            <a href="./faq.php">FAQ</a>
        </nav>
        <div class="css-1ld7x2h eu4oa1w0"></div>
        <button class="login-btn">Log In</button>
    </header>

    <section>
        <h2>Search Jobs</h2>
        <form action="#" method="get">
            <input type="text" name="keywords" placeholder="Immerssion  / Keywords / Company">
            <input type="text" name="location" placeholder="Location">
            <input type="submit" value="Search">
        </form>
    </section>

    <section class="job-listings">
        <h2>Job Listings</h2>
        <div class="job-listing">
            <h3>Software Engineer</h3>
            <p>Company: ABC Tech</p>
            <p>Location: City, Country</p>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
        <!-- Add more job listings as needed -->
    </section>

    <section class="company-section">
        <h2>Featured Companies</h2>
        <div class="featured-company">
            <h3>ABC Tech</h3>
            <p>Industry: Technology</p>
            <p>Location: City, Country</p>
            <p>Description: A leading technology company...</p>
        </div>
        <!-- Add more featured companies as needed -->
    </section>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        <!-- <p>Date: <span id="currentDate"></span></p> -->
    </footer>

    <!-- JavaScript to display the current date -->
    <script>
    document.getElementById("currentDate").innerHTML = new Date().getFullYear();
    </script>

</body>

</html>