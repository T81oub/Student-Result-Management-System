<?php
$host="localhost";
$user="root";
$password="";
$db="user1";

$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $username=$_POST["username"];
   $password=$_POST["password"];
   echo $username ;
   echo $password ;
   $sql="select * from login where username= '".$username."' ";
   $result=mysqli_query($data,$sql);
   $row=mysqli_fetch_array($result);
   echo $row["usertype"] ;
   if($row["usertype"]=="user")
   {
       
    header("location:userhome.php"); /* from login window to userhome window(students window)*/ 
   }
   elseif($row["usertype"]=="admin")
   {
       
       header("location:adminhome.php"); /* from login window to userhome window(students window)*/ 
   }
   else{
       echo "login-error";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">     

             
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css"> 
</head>
<body>
    
        <div>admin_login</div>
    <div class="login_bar">
    <form action="userhome.php" method="POST">
       <div>
           <label>username</label>
           <input type="text" name ="username" required>
        </div>
        <div>
          <label>password</label>
          <input type="password" name ="password" required>
        </div>
        <div>
        
            <input type="submit" value="login">
        </div>
    </form>
    </div> 
<!-- <form  ction="userhome.php" method="POST" style="padding:200px 580px 0 580px" class=" form-group" > 
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Password">
  </div>
  <div class="mb-3">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Remember me
      </label>
    </div>
  </div>
  <input type="submit" value="login" class="btn btn-primary">
</form> -->

    
</body>
</html>