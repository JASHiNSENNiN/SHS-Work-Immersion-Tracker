<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/school_dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/school_dashboard.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
          <a href="#" class="active-logo">
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
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
          
        <li>
          <a href="#">
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
            <div class="box-topic">STRAND</div>
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
        
      <div class="overview-boxes">
      <div class="box" style="background-color: aquamarine; margin-top:20px;">
        <div class="box-topic">SCHOOL</div>
      </div>
    </div>

       <div class="overview-boxes">
        <div class="box" style="margin-left:250px;">
          <div class="right-side">
            <div class="box-topic">Total of Students</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span> -->
            </div>
          </div>
          <!-- <i class='fas fa-user-friends' style="margin-top: 20px; margin-left: 20px;"></i> -->
        </div>
        <div class="box" style="margin-right:250px; ">
          <div class="right-side">
            <div class="box-topic">Partners Industries</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span> -->
            </div>
          </div>
          <!-- <i class='bx bxs-cart-add cart two' style="margin-top: 20px; margin-left: 20px;" ></i> -->
        </div><span class=""></span>
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

</body>
</html>