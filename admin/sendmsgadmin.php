<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu | CodingLab </title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    

           
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
   </head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="http://www.eniso.rnu.tn/fr/">
        <img src="Eniso.png" style="padding:0 40 0 0;" width="30" height="30" class="d-inline-block align-top" alt="">
École nationale d'ingénieurs de Sousse 
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <i class="fas fa-home  nav-link links"><a href="" class="text-light">admin</a></i>
        </li>                
        <li class="nav-item">
            <i class="fas fa-user-circle  nav-link"><a href="https://fr.wikipedia.org/wiki/%C3%89cole_nationale_d%27ing%C3%A9nieurs_de_Sousse" class="text-light">About</a></i>
        </li>                
        <li class="nav-item">
            <i class="fas fa-sign-out nav-link"><a href="logout.php" class="text-light">Logout</a></i>
        </li>
    </ul>
</div>    
</nav>
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
          <a href="addstudentadmin.php">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Add student</span>
          </a>
          
        </div>
      </li>
      <li>
        <div class="iocn-link">
          <a href="addtacheradmin.php">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Add teacher</span>
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
        <img src="admin.png" alt="profileImg">
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
    <?php require_once 'process.php'; ?> 
<?php

     
    $id="1";
    
    $mysqli = new mysqli('localhost','root','', 'user1') or die(mysqli_error($mysqli));
    $message = $mysqli->query("SELECT * FROM message WHERE  receiver='$id' ") or die($mysqli->error);
    
       
       
       
    ?>
    <h2 class="text-center text-decoration-underline">MESSAGES</h2>

   <center>
<div class="row justify-content-center" style ="width:700px" >
    <form action="#" method="post"> 
        <input type="hidden" name ="id" value="<?php echo $id; ?>">
        <div class="form-floating">
            <input type="text" name="idsend" class="form-control" id="floatingInputGrid" value="<?php echo $id; ?>">
            <label for="from">from:</label>
        </div>
        <div class="form-floating">
            <input type="text" name="idrec" class="form-control" id="floatingInputGrid"  >
            <label for="senditto">Send it to</label>
        </div>
        <div class="form-floating">
            <input type="text" name="object" class="form-control" id="floatingInputGrid"  >
            <label for="senditto">Object</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="msg" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <br>
        <div class="form-group">

            <button type="submit" class="btn btn-primary" name="send">Send</button>
    
        </div>
    </form>
</div>
</center>
   </div>
  </section>

  <script src="script.js"></script>

</body>
</html>
