<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/Student.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- -------------font--------- -->
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>


</head>

<body>

    <header class="nav-header">
        <div class="logo">
            <img src="image/logov3.jpg" alt="Logo">
        </div>

        <nav>
            <div class="css-1ld7x2h eu4oa1w0"></div>
            <a class="login-btn" href="#" style="margin-left: 20px;">Log out</a>
        </nav>
    </header>


    <img class="logoimg" src="image/background.jpg" alt="" height="300" width="200">

    <div class="profile">
        <img src="image/OLSHCO.png" alt="">
        <div class="name">Our Lady of Sacred Heart College of Guimba Inc.</div>
        <label class="strand" for="">OLSHCO</label>
        <div class="Settings"><button> Edit Profile</button></div>
    </div><br>
    <hr>
    <div class="logo">

        <nav style="position:relative; margin-left:auto; margin-right:auto;">
        <a href="Dashboard.php">Analytics</a>
            <a href="Student.php">Student</a>
            <a href="Company.php">Work Immersion List</a>
            <a href="Reports.php">Reports</a>
            <a href="Details.php">Details</a>


        </nav>
    </div>
    <hr class="line_bottom">


    <br>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <div class="container">
        <div class="box" id="#humss">
            <span class="material-symbols-outlined">
                balance
            </span>
            <p>Humss</p>
        </div>
        <div class="box" id="#stem">
            <span class="material-symbols-outlined">
                experiment
            </span>
            <p>Stem</p>
        </div>
        <div class="box" id="#gas">
            <span class="material-symbols-outlined">
                menu_book
            </span>
            <p>Gas</p>
        </div>
        <div class="box" id="#techvoc">
            <span class="material-symbols-outlined">
                construction
            </span>
            <p>TechVOc</p>
        </div>
    </div>

    <div id="content_container">
        <div id="humss" class="content active">
            <div class="container2">
                <h1>HUMSS</h1>
                <table class="rwd-table">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>Start End</th>
                        </tr>
                        <tr>
                            <td data-th="#">UPS5005</td>
                            <td data-th="Name">UPS</td>
                            <td data-th="Company">ASDF19218</td>
                            <td data-th="Status">06/25/2016</td>
                            <td data-th="Start Date">12/25/2016</td>
                            <td data-th="Start End">$8,322.12</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">UPS3449</td>
                            <td data-th="Supplier Name">UPS South Inc.</td>
                            <td data-th="Invoice Number">ASDF29301</td>
                            <td data-th="Invoice Date">6/24/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$3,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">BOX5599</td>
                            <td data-th="Supplier Name">BOX Pro West</td>
                            <td data-th="Invoice Number">ASDF43000</td>
                            <td data-th="Invoice Date">6/27/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$45,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">PAN9999</td>
                            <td data-th="Supplier Name">Pan Providers and Co.</td>
                            <td data-th="Invoice Number">ASDF33433</td>
                            <td data-th="Invoice Date">6/29/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$12,335.69</td>
                        </tr>
                    </tbody>
                </table>
                <h3>Resize Me</h3>
            </div>
        </div>

        <div id="stem" class="content">
            <div class="container2">
                <h1>STEM</h1>
                <table class="rwd-table">
                    <tbody>
                        <tr>
                            <th>Supplier Code</th>
                            <th>Supplier Name</th>
                            <th>Invoice Number</th>
                            <th>Invoice Date</th>
                            <th>Due Date</th>
                            <th>Net Amount</th>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">UPS5005</td>
                            <td data-th="Supplier Name">UPS</td>
                            <td data-th="Invoice Number">ASDF19218</td>
                            <td data-th="Invoice Date">06/25/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$8,322.12</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">UPS3449</td>
                            <td data-th="Supplier Name">UPS South Inc.</td>
                            <td data-th="Invoice Number">ASDF29301</td>
                            <td data-th="Invoice Date">6/24/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$3,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">BOX5599</td>
                            <td data-th="Supplier Name">BOX Pro West</td>
                            <td data-th="Invoice Number">ASDF43000</td>
                            <td data-th="Invoice Date">6/27/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$45,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">PAN9999</td>
                            <td data-th="Supplier Name">Pan Providers and Co.</td>
                            <td data-th="Invoice Number">ASDF33433</td>
                            <td data-th="Invoice Date">6/29/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$12,335.69</td>
                        </tr>
                    </tbody>
                </table>
                <h3>Resize Me</h3>
            </div>
        </div>

        <div id="gas" class="content">
            <div class="container2">
                <h1>GAS</h1>
                <table class="rwd-table">
                    <tbody>
                        <tr>
                            <th>Supplier Code</th>
                            <th>Supplier Name</th>
                            <th>Invoice Number</th>
                            <th>Invoice Date</th>
                            <th>Due Date</th>
                            <th>Net Amount</th>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">UPS5005</td>
                            <td data-th="Supplier Name">UPS</td>
                            <td data-th="Invoice Number">ASDF19218</td>
                            <td data-th="Invoice Date">06/25/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$8,322.12</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">UPS3449</td>
                            <td data-th="Supplier Name">UPS South Inc.</td>
                            <td data-th="Invoice Number">ASDF29301</td>
                            <td data-th="Invoice Date">6/24/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$3,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">BOX5599</td>
                            <td data-th="Supplier Name">BOX Pro West</td>
                            <td data-th="Invoice Number">ASDF43000</td>
                            <td data-th="Invoice Date">6/27/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$45,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">PAN9999</td>
                            <td data-th="Supplier Name">Pan Providers and Co.</td>
                            <td data-th="Invoice Number">ASDF33433</td>
                            <td data-th="Invoice Date">6/29/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$12,335.69</td>
                        </tr>
                    </tbody>
                </table>
                <h3>Resize Me</h3>
            </div>
        </div>

        <div id="techvoc" class="content">
            <div class="container2">
                <h1>TECVOC</h1>
                <table class="rwd-table">
                    <tbody>
                        <tr>
                            <th>Supplier Code</th>
                            <th>Supplier Name</th>
                            <th>Invoice Number</th>
                            <th>Invoice Date</th>
                            <th>Due Date</th>
                            <th>Net Amount</th>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">UPS5005</td>
                            <td data-th="Supplier Name">UPS</td>
                            <td data-th="Invoice Number">ASDF19218</td>
                            <td data-th="Invoice Date">06/25/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$8,322.12</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">UPS3449</td>
                            <td data-th="Supplier Name">UPS South Inc.</td>
                            <td data-th="Invoice Number">ASDF29301</td>
                            <td data-th="Invoice Date">6/24/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$3,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">BOX5599</td>
                            <td data-th="Supplier Name">BOX Pro West</td>
                            <td data-th="Invoice Number">ASDF43000</td>
                            <td data-th="Invoice Date">6/27/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$45,255.49</td>
                        </tr>
                        <tr>
                            <td data-th="Supplier Code">PAN9999</td>
                            <td data-th="Supplier Name">Pan Providers and Co.</td>
                            <td data-th="Invoice Number">ASDF33433</td>
                            <td data-th="Invoice Date">6/29/2016</td>
                            <td data-th="Due Date">12/25/2016</td>
                            <td data-th="Net Amount">$12,335.69</td>
                        </tr>
                    </tbody>
                </table>
                <h3>Resize Me</h3>
            </div>
        </div>
    </div>


    <script>
    $(".box").click(function(e) {
        e.preventDefault();
        $(".content").removeClass("active");
        var content_id = $(this).attr("id");
        $(content_id).addClass("active");
    });
    </script>
    <br>
    <!-- <footer>
        <p>&copy; 2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students</p>
        
    </footer> -->
    
  <div class="sub-footer">
    2024 Your Website. All rights reserved. | Junior Philippines Computer Society Students
  </div>


</body>

</html>