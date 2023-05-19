



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    

            <!-- plugins -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once 'process.php'; ?> 
<?php
    $mysqli = new mysqli('localhost','root','', 'user1') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM class") or die($mysqli->error);
    //  $class2=$_POST["nameh"];
     if (array_key_exists("nameh",$_POST))
      {
          $class2=$_POST["nameh"];
      }
      
    ?>
<h1>class:</h1>
<?php echo $class2; ?>
<div class="row justify-content-center  " >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h4>add student</h4>
          <button type="button" class="close" data-dismiss="modal" ><a href="student-list.php"  class="text-light">&times;</a></button>
          
        </div>
        <div class="modal-body">
    
 <form action="student-list.php" method="POST" >
 
    <input type="hidden" name ="id" value="<?php echo $id; ?>">
 <div class="form-group">
    <!-- <input type="text" name="nameb" class="form-control" value="<?php echo $_POST["nameh"]; ?>" placeholder="Enter your name">
    <input type="submit" value="add student" class="btn btn-info btn-lg" name="submit"> -->
    <label>Name</label>
    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Enter your name">
    <label>Surname</label>
    <input type="text" name="surname" class="form-control" value="<?php echo $surname; ?>"  placeholder="Enter your surname">
    <label>Birth date</label>
    <input type="date" name="birthdate" class="form-control"  value="<?php echo $birthdate; ?>">
    <label>email</label>
    <input type="text" name="email" class="form-control"  value="<?php echo $email; ?>" placeholder="email">
    <label>class</label>
    <input type="text" name="class2" class="form-control"  placeholder="class" value="<?php echo $class2; ?>">
    <label>Password</label>
    <input type="password" name="pass" class="form-control"  >
    <label>Image</label>
    <br>
    <input type="file" name="img" class="btn btn-info" value="<?php echo $image; ?>"/>
</div>

    <div class="form-group modal-footer">
        <?php
          if ($update == true):
        ?>
           <button type="submit"  class="btn btn-info btn-lg"  name="update1" >Update</button>
           <?php
          else:
        ?>
    <button type="submit" class="btn btn-primary" name="save1">Save</button>
    <?php
    endif;
    ?>
   </div>
   </form> 
      </div>
    </div>
  </div>
</div>
</body>
</html>