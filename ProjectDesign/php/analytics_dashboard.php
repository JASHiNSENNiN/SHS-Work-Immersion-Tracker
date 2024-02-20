<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/school_dashboard.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Guardians of the Galaxy');
      data.addColumn('number', 'The Avengers');
      data.addColumn('number', 'Transformers: Age of Extinction');

      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 69.5, 32.4],
        [3,  25.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  11.9, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);

      var options = {
        chart: {
          title: 'Box Office Earnings in First Two Weeks of Opening',
          subtitle: 'in millions of dollars (USD)'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
    
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      
      <a href="#" class="active" style='text-decoration:none'>
      <i><img src="logo.png" alt="Logo" height="50" style="margin-left:5px; margin-top:30px;">
      <span class="logo_name" id="logo_name" style="color:#fff;" >Workify</span></i>
      
      </a>
      
    </div>
    
      <ul class="nav-links">
        <li>
          <a href="school_dashboard.php" class="active-logo">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="student_dashboard.php">
            <i class='bx bxs-graduation' ></i>
            <span class="links_name">Student</span>
          </a>
        </li>
        <li>
          <a href="analytics_dashboard.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
          
        <li>
          <a href="settings_dashboard.php">
            <i class='bx bx-cog' ></i>
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
        <span class="dashboard">Dashboard</span>
        <!-- <div class="logo">
            <img src="../logo.jpg" alt="Logo">
            <h1>\</h1>
            <h1>Vorkify</h1>
        </div> -->
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box" style="background-color: aquamarine;">
          <div class="box-topic">ANALYTICS</div>
            </div>
          </div>
      <div class="sales-boxes">
        <div class="recent-sales box" style="width: 100%;">
        <div id="line_top_x"></div>
        </div>

      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

</script>


</body>
</html>