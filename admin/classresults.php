<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
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
    $username= $_SESSION["username"];
    echo $username;
    $mysqli = new mysqli('localhost','root','', 'user1') or die(mysqli_error($mysqli));
    $student = $mysqli->query("SELECT * FROM login WHERE class='$name1' AND usertype='user' ") or die($mysqli->error);
    $subject=  $mysqli->query("SELECT * FROM login WHERE class='$name1' AND usertype='teacher' AND username='$username' ") or die($mysqli->error);
    $row2 = $subject->fetch_array();
   
    ?>
<div class="container py-4">
  <h2 class="text-center text-decoration-underline">RESULT</h2>
  <label>Name : </label>
    <?php echo $name1 ; ?>
</div>
  <div class="container-fluid py-5">
<form action="#" method="POST" >
  <table class="table table-success table-striped text-center table-hover ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Subject</th>
            <th scope="col">DS</th>
            <th scope="col">EX</th>
            <th scope="col">TT</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
         
        <?php
           
           
           while ($row = $student->fetch_assoc()):
              $id=$row['id'];
              $subject=$row2['subject'];
              $result=$mysqli->query("SELECT * FROM result WHERE studentid='$id' AND subject='$subject' ") or die($mysqli->error);
              $row3 = $result->fetch_array();
              
              if ($row3==""){
                $mysqli->query("INSERT INTO result (studentid,subject,DS,EX,TT) VALUES ('$id','$subject','0','0','0')") or
                die($mysqli->error);
              }
        ?>
          <tr>
          <input type="hidden" name ="id" value="<?php echo $row3['id']; ?>">
              <td scope="col"><?php echo $row['id']; ?></td>
              <td scope="col"><?php echo $row['username']; ?></td>
              <td scope="col"><?php echo $row['surname']; ?></td>
              <td scope="col"><?php echo $row2['subject']; ?></td>
              <td scope="col"><input type="text" name="DS" class="form-control" value="<?php echo $row3['DS'] ; ?>"  placeholder="Enter ds"></td>
              <td scope="col"><input type="text" name="EX" class="form-control" value="<?php echo $row3['EX']; ?>" placeholder="Enter ex"></td>
              <td scope="col"><input type="text" name="TT" class="form-control" value="<?php echo $row3['TT'] ; ?>" placeholder="Enter tt"></td>
              <td><button type="submit" class="btn btn-primary" name="saveteacher">Save</button> </td>
          </tr>
  <?php endwhile;
   ?> 
  
         </tbody>
      
  </table>    
</form>   

</body>
</html>