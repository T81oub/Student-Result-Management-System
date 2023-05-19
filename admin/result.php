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
    $mysqli = new mysqli('localhost','root','', 'user1') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM result WHERE studentid='$studentid'") or die($mysqli->error);
     //pre_r($result);
    ?>
<div class="container py-4">
  <h2 class="text-center text-decoration-underline">RESULT</h2>
  <label>Name : </label>
    <?php echo $studentid ; ?>
</div>
  <div class="container-fluid py-5">
<form action="" method="POST" >
  <table class="table table-success table-striped text-center table-hover ">
        <thead>
          <tr>
            <th scope="col">Subject</th>
            <th scope="col">DS</th>
            <th scope="col">EX</th>
            <th scope="col">TT</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
           while ($row = $result->fetch_assoc()):
        ?>
          <tr>
              <td scope="col"><?php echo $row['subject']; ?></td>
              <td scope="col"><?php echo $row['DS']; ?></td>
              <td scope="col"><?php echo $row['EX']; ?></td>
              <td scope="col"><?php echo $row['TT']; ?></td>
              <td scope="col">
                 <a href="result.php?editb=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
    
                <a href="result.php?deleteb=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
    </td>
            
          </tr>
  <?php endwhile; ?> 
           
        </tbody>
      </table>
      

  </div> 
  </div>


  <div class="container-fluid py-5">

    <table class="table  table-striped text-center ">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Subject</th>
            <th scope="col">DS</th>
            <th scope="col">EX</th>
            <th scope="col">TT</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
          <input type="hidden" name ="id" value="<?php echo $id; ?>">
          <td>
                  <div class="form-group">
                       <label>id</label>
                       <input type="text" name="studentid" class="form-control" value="<?php echo $studentid ; ?>" placeholder="Enter ex">
                  </div>
            </td>
            <td>
           
                  <div class="form-group">
                       <label>Subject</label>
                       <input type="text" name="subject" class="form-control" value="<?php echo $subject ; ?>" placeholder="Enter subject name">
                  </div>
            </td>
            <td>
                  <div class="form-group">
                       <label>DS</label>
                       <input type="text" name="DS" class="form-control" value="<?php echo $ds ; ?>" placeholder="Enter ds">
                  </div>
            </td>
            <td>
                  <div class="form-group">
                       <label>EX</label>
                       <input type="text" name="EX" class="form-control" value="<?php echo $ex ; ?>" placeholder="Enter ex">
                  </div>
            </td>
            <td>
                  <div class="form-group">
                       <label>TT</label>
                       <input type="text" name="TT" class="form-control" value="<?php echo $tt ; ?>" placeholder="Enter tt">
                  </div>
            </td>
          </tr>
          
        </tbody>
      </table>
  </div>
  <div class="form-group">
        <?php
          if ($update == true):
        ?>
           <button type="submit" class="btn btn-info" name="updatea">Update</button>
           <?php
          else:
        ?>
    <button type="submit" class="btn btn-primary" name="savea">Save</button>
    <?php
    endif;
    ?>
    </div>
  </form>
</body>
</html>