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
            <a href="index.php">
                <img src="img/logov3.jpg" alt="Logo">
            </a>

        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="./php/job_list.php">Find a Work Immerssion</a>
            <a href="./php/contact.php">Contact</a>

        </nav>
        <a class="login-btn" href="#" style="margin-left: 20px;">Sign in</a>
        <a class="login-btn" href="#">Post Work Immersion</a>
    </header>

    <section>
        <h2 class="sfa">Search, Find and Apply!</h2>
        <div class="searchwork">
            <form action="#" method="get">
                <input type="text" name="keywords" placeholder="Immerssion  / Keywords / Company">
                <input type="text" name="location" placeholder="Location">
                <input type="submit" value="Find Now!">

            </form>
        </div>
    </section>
    <script>
        document.getElementById("currentDate").innerHTML = new Date().getFullYear();
    </script>

</body>
<style>

</style>

</html>