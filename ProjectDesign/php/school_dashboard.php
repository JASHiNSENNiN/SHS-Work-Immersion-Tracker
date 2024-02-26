<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/school_dashboard.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/school_dashboard.css"> -->
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <div class="sidebar">
        <div class="logo-details">

            <a href="#" class="active" style='text-decoration:none'>
                <i><img src="logo.png" alt="Logo" height="50" style="margin-left:5px;">
                </i>

            </a>
            <span class="logo_name" id="logo_name" style="color:#fff;">Workify</span>

        </div>
        <br>
        <ul class="nav-links">
            <li>
                <a href="#" class="link" id="#dash">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" id="#student">
                    <i class='bx bxs-graduation'></i>
                    <span class="links_name">Student</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" id="#company">
                    <i class='bx bx-building'></i>
                    <span class="links_name">Company</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" id="#reports">
                    <i class='bx bxs-report'></i>
                    <span class="links_name">Reports</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" id="#analytics">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
                </a>
            </li>

            <li>
                <a href="#" class="link" id="#setting">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn' onclick="toggle();"></i>
                <span class="dashboard"></span>
                <span class="dashboard"> </span>
                <span class="dashboard">School Dashboard</span>
                <!-- <div class="logo">
            <img src="../logo.jpg" alt="Logo">
            <h1>\</h1>
            <h1>Vorkify</h1>
        </div> -->
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <img src="images/profile.jpg" alt="">
                <span class="admin_name">Prem Shahi</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>



        <div class="home-content">


            <div id="content_container">
                <div id="dash" class="content active">

                    <div class="home-content">
                        <div class="overview-boxes" style="padding: 0px;">
                            <div class="box" style="width: 100%;">
                                <div class="box-topic">Strand</div>
                            </div>
                        </div>

                        <div class="overview-boxes">
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">HUMMS</div>
                                    <div class="number">100</div>
                                    <div class="indicator">
                                        <i class='bx bx-up-arrow-alt'></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <!-- <i class='bx bx-cart-alt cart'></i> -->
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">GAS</div>
                                    <div class="number">150</div>
                                    <div class="indicator">
                                        <i class='bx bx-up-arrow-alt'></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <!-- <i class='bx bxs-cart-add cart two' ></i> -->
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">STEM</div>
                                    <div class="number">160</div>
                                    <div class="indicator">
                                        <i class='bx bx-up-arrow-alt'></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <!-- <i class='bx bx-cart cart three' ></i> -->
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">TECHVOC</div>
                                    <div class="number">170</div>
                                    <div class="indicator">
                                        <i class='bx bx-down-arrow-alt down'></i>
                                        <span class="text">Down From Today</span>
                                    </div>
                                </div>
                                <!-- <i class='bx bxs-cart-download cart four' ></i> -->
                            </div>
                        </div>


                        <div class="sales-boxes">
                            <div class="recent-sales box">
                                <div class="title">Popularity Company </div>
                                <div id="chart_div"></div>
                                <div class="button">
                                    <a href="#">See All</a>
                                </div>
                            </div>
                            <div class="top-sales box">
                                <div class="title">Top Company </div>
                                <ul class="top-sales-details">
                                    <li>
                                        <a href="#">
                                            <img src="" alt="">
                                            <span class="product">NIA</span>
                                        </a>
                                        <span class="price">100%</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="" alt="">
                                            <span class="product">Jollibee </span>
                                        </a>
                                        <span class="price">90%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div id="student" class="content active">

                    <div class="home-content ">

                        <div class="overview-boxes" style="padding: 0px;">
                            <div class="box" style="width: 100%; ">
                                <div class="box-topic">Strand</div>
                            </div>
                        </div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

                        <div class="overview-boxes">
                            <div class="box" id="#humss">
                                <div class="right-side">
                                    <div class="box-topic">HUMSS</div>
                                    <div class="number">100</div>
                                    <div class="indicator">
                                        <!-- <i class='bx bx-up-arrow-alt'></i> -->
                                        <span class="text">Total of Student</span>
                                    </div>

                                </div>
                                <i class='bx bxs-graduation'
                                    style="margin-top: 20px; margin-left: 20px; color:#333A73; font-size:3em; "></i>
                            </div>

                            <div class="box" id="#gas">
                                <div class="right-side">
                                    <div class="box-topic">GAS</div>
                                    <div class="number">150</div>
                                    <div class="indicator">
                                        <!-- <i class='bx bx-up-arrow-alt'></i> -->
                                        <span class="text">Total of Student</span>
                                    </div>
                                </div>
                                <i class='bx bxs-graduation'
                                    style="margin-top: 20px; margin-left: 20px; color:#387ADF; font-size:3em; "></i>
                            </div>
                            <div class="box" id="#stem">
                                <div class="right-side">
                                    <div class="box-topic">STEM</div>
                                    <div class="number">160</div>
                                    <div class="indicator">
                                        <!-- <i class='bx bx-up-arrow-alt'></i> -->
                                        <span class="text">Total of Student</span>
                                    </div>
                                </div>
                                <i class='bx bxs-graduation'
                                    style="margin-top: 20px; margin-left: 20px; color:#50C4ED; font-size:3em; "></i>
                            </div>
                            <div class="box" id="#techvoc">
                                <div class="right-side">
                                    <div class="box-topic">TECHVOC</div>
                                    <div class="number">170</div>
                                    <div class="indicator">
                                        <!-- <i class='bx bx-down-arrow-alt down'></i> -->
                                        <span class="text">Total of Student</span>
                                    </div>
                                </div>
                                <i class='bx bxs-graduation'
                                    style="margin-top: 20px; margin-left: 20px; color:#40679E; font-size:3em; "></i>
                            </div>

                        </div>
                        <div id="content_container">
                            <div id="humss" class="contents active">

                                <div class="sales-boxes">
                                    <div class="recent-sales box" style="width: 100%; margin-bottom:20px;">
                                        <div class="title">
                                            <h3>Student List: HUMSS</h3>
                                        </div>

                                        <table style="width:100%">
                                            <tr>
                                                <th>#</th>
                                                <th>School ID</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Start Date</th>
                                                <th>Start End</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2024-17</td>
                                                <td>Joshua Rivera</td>
                                                <td>NIA</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2024-18</td>
                                                <td>Ivan Diaz</td>
                                                <td>PNP</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2024-19</td>
                                                <td>Angel Diaz</td>
                                                <td>Municipal</td>
                                                <td>Pending</td>
                                                <td>00/00/00</td>
                                                <td>00/00/00</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2024-20</td>
                                                <td>Alex Doe</td>
                                                <td>LTO</td>
                                                <td>Deployed</td>
                                                <td>03/22/24</td>
                                                <td>04/22/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div id="gas" class="contents active">
                                <div class="sales-boxes">
                                    <div class="recent-sales" style="width: 100%; margin-bottom:20px;">
                                        <div class="title">
                                            <h3>Student List: GAS</h3>
                                        </div>
                                        <table style="width:100%">
                                            <tr>
                                                <th>#</th>
                                                <th>School ID</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Start Date</th>
                                                <th>Start End</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2024-21</td>
                                                <td>Joshua Rivera</td>
                                                <td>Bank</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2024-22</td>
                                                <td>Ivan Diaz</td>
                                                <td>Finance</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2024-23</td>
                                                <td>Angel Diaz</td>
                                                <td>BDO</td>
                                                <td>Pending</td>
                                                <td>00/00/00</td>
                                                <td>00/00/00</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2024-24</td>
                                                <td>Alex Doe</td>
                                                <td>Land Bank</td>
                                                <td>Deployed</td>
                                                <td>03/22/24</td>
                                                <td>04/22/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div id="stem" class="contents active">
                                <div class="sales-boxes">
                                    <div class="recent-sales" style="width: 100%; margin-bottom:20px;">
                                        <div class="title">
                                            <h3>Student List: STEM</h3>
                                        </div>
                                        <table style="width:100%">
                                            <tr>
                                                <th>#</th>
                                                <th>School ID</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Start Date</th>
                                                <th>Start End</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2024-25</td>
                                                <td>Joshua Rivera</td>
                                                <td>NIA</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2024-26</td>
                                                <td>Ivan Diaz</td>
                                                <td>PNP</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2024-27</td>
                                                <td>Angel Diaz</td>
                                                <td>Municipal</td>
                                                <td>Pending</td>
                                                <td>00/00/00</td>
                                                <td>00/00/00</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2024-28</td>
                                                <td>Alex Doe</td>
                                                <td>LTO</td>
                                                <td>Deployed</td>
                                                <td>03/22/24</td>
                                                <td>04/22/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div id="techvoc" class="contents active">
                                <div class="sales-boxes">
                                    <div class="recent-sales" style="width: 100%; margin-bottom:20px;">
                                        <div class="title">
                                            <h3>Student List: TECHVOC</h3>
                                        </div>
                                        <table style="width:100%">
                                            <tr>
                                                <th>#</th>
                                                <th>School ID</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Start Date</th>
                                                <th>Start End</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2024-29</td>
                                                <td>Joshua Rivera</td>
                                                <td>Deped</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2024-30</td>
                                                <td>Ivan Diaz</td>
                                                <td>IT</td>
                                                <td>Deployed</td>
                                                <td>01/02/24</td>
                                                <td>02/02/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2024-31</td>
                                                <td>Angel Diaz</td>
                                                <td>Developer</td>
                                                <td>Pending</td>
                                                <td>00/00/00</td>
                                                <td>00/00/00</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2024-32</td>
                                                <td>Alex Doe</td>
                                                <td>Assistant</td>
                                                <td>Deployed</td>
                                                <td>03/22/24</td>
                                                <td>04/22/24</td>
                                                <!-- <td><button type="button" class="btn btn-success">Apply</button>
                                                    <button type="button" class="btn btn-primary">Details</button>
                                                </td> -->

                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>


                </div>

                <div id="company" class="content active">
                    <div class="corner">
                        <img id="LOGO" src="image/NIA.png" alt="">
                        <h3>NIA-Guimba</h3>
                        <p>NATIONAL IRRIGATION ADMINISTRATION</p>
                        <br>
                        <p>Guimba, Nueva Ecija <br>
                            Help Desk & IT Support (Information & Communication Technology)</p>

                    </div>
                    <div class="corner">
                        <img id="LOGO" src="image/Jollibee.png" alt=""><br>
                        <h3>Jollibee-Guimba</h3>
                        <p>Jollibee Foods Corporation</p>
                        <br>
                        <p> <b> JOB QUALIFICATION:</b>

                            <br>Graduate of any 4-year course, preferably Business
                            <br> Fresh graduates are welcome to apply
                            <br>No experience required but with experience is an advantage
                            <br>With basic knowledge administrative processes in the organization
                            <br>Knowledgeable in MS tools.
                        </p>

                    </div>


                </div>

                <div id="reports" class="content active">
                    <div class="sales-boxes">
                        <div class="recent-sales box" style="width: 100%; margin-top:50px">
                            <div class="title">
                                <h3>Student List: HUMSS</h3>
                            </div>

                            <table style="width:100%">
                                <tr>
                                    <th>#</th>
                                    <th>Company </th>
                                    <th>School ID</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>NIA</td>
                                    <td>2024-17</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jollibee</td>
                                    <td>2024-18</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>PNP</td>
                                    <td>2024-19</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Minicipal</td>
                                    <td>2024-20</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Details</button>
                                    </td>

                                </tr>
                            </table>
                        </div>

                    </div>

                </div>


            </div>

            <div id="analytics" class="content active">


            </div>


            <div id="setting" class="content">
                <div class="title">Wallpapers</div>
                <div class="description">Wallpapers description</div>
            </div>

        </div>




        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }

    </script>
    <script>
        let toggle = () => {

            let element = document.getElementById("logo_name");
            let hidden = element.getAttribute("hidden");

            if (hidden) {
                element.removeAttribute("hidden");
            } else {
                element.setAttribute("hidden", "hidden");
            }
        }
    </script>
    <script type="text/javascript" src=" ../js/analytics_school_dashboard.js"></script>

    <script>
        $(".link").click(function (e) {
            e.preventDefault();
            $(".content").removeClass("active");
            var content_id = $(this).attr("id");
            $(content_id).addClass("active");
        });
    </script>

    <script>
        $(".box").click(function (e) {
            e.preventDefault();
            $(".contents").removeClass("active");
            var content_id = $(this).attr("id");
            $(content_id).addClass("active");
        });
    </script>

</body>

</html>