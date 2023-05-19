
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
        <img src="Eniso.png" style="padding:0 0 0 40;" width="30" height="30" class="d-inline-block align-top" alt="">
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
    <form action="#" method="post">
    <div class="container">
   <?php require_once 'process.php'; ?> 
    <?php
    $mysqli = new mysqli('localhost','root','', 'user1') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM class") or die($mysqli->error);
     //pre_r($result);
    ?>
    <div class="container-fluid py-5">
    <table class="table  table-striped text-center">
        <thead>
            <tr>
                <th >Name</th>
                
               <th>Action</th>
            </tr>
        </thead>
   <?php
   while ($row = $result->fetch_assoc()):
   ?>
   <tr>
     <td ><a class="navbar-brand" href="student-list.php?class=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td> 
   
    <td>
    <a href="adminhome.php?edit=<?php echo $row['id']; ?>"
  class="btn btn-info">Edit</a>
  <a href="adminhome.php?delete=<?php echo $row['id']; ?>"
  class="btn btn-danger">Delete</a>
    </td>
    
</tr>
<?php endwhile; ?>
    </table>
</div>

    
    <div class="row justify-content-center" style ="width:200px" >
    <form action="student-list.php" method="post"> 
    <input type="hidden" name ="id" value="<?php echo $id; ?>">
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $name ; ?>" placeholder="Enter your name">
    </div>
    
    <div class="form-group">
        <?php
          if ($update == true):
        ?>
           <button type="submit" class="btn btn-info" name="update">Update</button>
           <?php
          else:
        ?>
    <button type="submit" class="btn btn-primary" name="save">Save</button>
    <?php
    endif;
    ?>
    </div>
</form>
</div>
</div>


   
  </section>

  <script src="script.js"></script>

</body>
</html>
