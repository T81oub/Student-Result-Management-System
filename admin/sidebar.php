
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu | CodingLab </title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Administration</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="messagesectionadmin.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        
      </li>
      <li>
        <div class="iocn-link">
          <a href="adminhome.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Add class</span>
          </a> 
        </div>
      </li>
      <li>
        <div class="iocn-link">
          <a href="adminhome.php">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Add student</span>
          </a>
          
        </div>
      </li>
      <li>
        <a href="sendmsgadmin.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Send messages</span>
        </a>
        
      </li>
     
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Administration</div>
        <div class="job">Admin</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      
    </div>
  </section>

  <script src="script.js"></script>

</body>
</html>
