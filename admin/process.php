<?php
// session_start();
$mysqli = new mysqli('localhost' ,'root', '', 'user1') or die(mysqli_error($mysqli));
$id=0;
$update = false;
$update2 = false;
$name = '';
$username = '';
$surname = '';
$birthdate = '';
$email = '';
$class2 = '';
$image='';
$name1= '';
$studentid='';
$student = '';
$subject = '';
$ds = '0';
$ex = '0';
$tt = '0';
global $b;

if (isset($_POST['save'])){
    $name = $_POST['name'];
    if($name != '')
    {
    $mysqli->query("INSERT INTO class (name) VALUES ('$name')") or
            die($mysqli->error);
    }
    //header('location:adminhome.php');
}
if (isset($_GET['delete']))
{
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM class WHERE id=$id") or
    die($mysqli->error);
    
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update=true;
    $result= $mysqli->query("SELECT * FROM class WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
       $name = $row['name'];
      
   
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    
    $mysqli->query("UPDATE class SET name= '$name' WHERE id=$id") or
            die($mysqli->error);
   //header('location:adminhome.php');
}
if (isset($_GET['class'])){
    $id = $_GET['class'];
    $open=true;
    $result= $mysqli->query("SELECT * FROM class WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
       $name1 = $row['name'];
      
       
}
if (isset($_GET['classres'])){
    $name = $_GET['classres'];
    $open=true;
    $result= $mysqli->query("SELECT * FROM class WHERE name='$name'") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
       $name1 = $row['name'];
      
       
}

if (isset($_POST['save1'])){
    $name = $_POST['username'];
    $surname=$_POST['surname'];
    $date=$_POST['birthdate'];
    $email=$_POST['email'];
    $name1=$_POST['class2'];
    $password=$_POST['pass'];
    $image=$_POST['img'];
   
    $mysqli->query("INSERT INTO login (username,surname,date,email,class,password,image) VALUES ('$name','$surname','$date','$email','$name1',' $password','$image')") or
            die($mysqli->error);
   
    
}
if (isset($_GET['delete1']))
{
    $id = $_GET['delete1'];
    $result= $mysqli->query("SELECT * FROM login WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
       $name1 = $row['class'];
    $mysqli->query("DELETE FROM login WHERE id=$id") or
    die($mysqli->error);
    
    
}
if (isset($_GET['edit1'])){
    $id = $_GET['edit1'];
    $update=true;
    $result= $mysqli->query("SELECT * FROM login WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
      $username=$row['username'];
      $surname = $row['surname'];
      $birthdate = $row['date'];
      $email = $row['email'];
      $class2 = $row['class'];
      $image=$row['image'];
      
   
}
if (isset($_POST['update1'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $surname=$_POST['surname'];
    $date=$_POST['birthdate'];
    $email=$_POST['email'];
    $class=$_POST['class2'];
    $password=$_POST['pass'];
    $image=$_POST['img'];
    $mysqli->query("UPDATE login SET username= '$username',surname= '$surname' , date='$date' , email ='$email' , class='$class', password='$password' ,image='$image' where id ='$id' ") or
            die($mysqli->error);
            $result= $mysqli->query("SELECT * FROM login WHERE id=$id") or
            die($mysqli->error);
            $row = $result->fetch_array();
            $name1=$row['class'];
}
if (isset($_GET['result']))
{
    $id = $_GET['result'];
    $studentid=$_GET['result'];;
    
    
}





if (isset($_POST['savea'])){
    $studentid = $_POST['studentid'];
    $subject=$_POST['subject'];
    $ds=$_POST['DS'];
    $ex=$_POST['EX'];
    $tt=$_POST['TT'];
   
    $mysqli->query("INSERT INTO result (studentid,subject,DS,EX,TT) VALUES ('$studentid','$subject','$ds','$ex','$tt')") or
            die($mysqli->error);
            $subject = '';
            $ds = '0';
            $ex = '0';
            $tt = '0';
                 
}
if (isset($_GET['editb'])){
    $id = $_GET['editb'];
    $update=true;
    $result= $mysqli->query("SELECT * FROM result WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
       $studentid = $row['studentid'];
       $subject = $row['subject'];
       $ds = $row['DS'];
       $ex = $row['EX'];
       $tt = $row['TT'];
       
      
   
}
if (isset($_POST['updatea'])){
    $id = $_POST['id'];
    $studentid = $_POST['studentid'];
    $subject=$_POST['subject'];
    $ds=$_POST['DS'];
    $ex=$_POST['EX'];
    $tt=$_POST['TT'];
    $mysqli->query("UPDATE result SET studentid= '$studentid',subject= '$subject' , DS='$ds' , EX ='$ex' , TT='$tt' where id ='$id' ") or
            die($mysqli->error);
    $update=false;
    $subject = '';
    $ds = '0';
    $ex = '0';
     $tt = '0';
}
if (isset($_GET['deleteb']))
{
    $id = $_GET['deleteb'];
    $result= $mysqli->query("SELECT * FROM result WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
       $studentid = $row['studentid'];
    $mysqli->query("DELETE FROM result WHERE id=$id") or
    die($mysqli->error);
    
    
}
if (isset($_POST['send'])){
    $idrec = $_POST['idrec'];
    $idsend = $_POST['idsend'];
    $object = $_POST['object'];
    $text = $_POST['msg'];
    
    $mysqli->query("INSERT INTO message (receiver,sender,text,object) VALUES ('$idrec','$idsend','$text','$object')") or
    die($mysqli->error);
    
    
}
if (isset($_GET['deleted']))
{
    $id = $_GET['deleted'];

    $mysqli->query("DELETE FROM message WHERE idm=$id") or
    die($mysqli->error);
    
}
if (isset($_POST['savet'])){
    $name = $_POST['username'];
    $surname=$_POST['surname'];
    $date=$_POST['birthdate'];
    $email=$_POST['email'];
    $name1=$_POST['class2'];
    $subject=$_POST['subject'];
    $password=$_POST['pass'];
    $image=$_POST['img'];
    if($name != '')
       $mysqli->query("INSERT INTO login (username,surname,date,email,class,subject,password,image,usertype) VALUES ('$name','$surname','$date','$email','$name1','$subject',' $password','$image','teacher')") or
            die($mysqli->error);
    $name='' ;
    
}
if (isset($_GET['deletet']))
{
    $id = $_GET['deletet'];
    $result= $mysqli->query("SELECT * FROM login WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
       $name1 = $row['class'];
    $mysqli->query("DELETE FROM login WHERE id=$id") or
    die($mysqli->error);
    
    
}
if (isset($_GET['editt'])){
    $id = $_GET['editt'];
    $update=true;
    $result= $mysqli->query("SELECT * FROM login WHERE id=$id") or
    die($mysqli->error);
    
   
       $row = $result->fetch_array();
      $username=$row['username'];
      $surname = $row['surname'];
      $birthdate = $row['date'];
      $email = $row['email'];
      $class2 = $row['class'];
      $subject=$row['subject'];
      $image=$row['image'];

      
   
}
if (isset($_POST['updatet'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $surname=$_POST['surname'];
    $date=$_POST['birthdate'];
    $email=$_POST['email'];
    $class=$_POST['class2'];
    $password=$_POST['pass'];
    $subject=$_POST['subject'];
    $image=$_POST['img'];
    $mysqli->query("UPDATE login SET username= '$username',surname= '$surname' ,subject='$subject', date='$date' , email ='$email' , class='$class', password='$password' ,image='$image' where id ='$id' ") or
            die($mysqli->error);
            $result= $mysqli->query("SELECT * FROM login WHERE id=$id") or
            die($mysqli->error);
            $row = $result->fetch_array();
            $name1=$row['class'];
}
if (isset($_POST['saveteacher'])){
    $id = $_POST['id'];
    
   
    $ds=$_POST['DS'];
    $ex=$_POST['EX'];
    $tt=$_POST['TT'];
    $mysqli->query("UPDATE result SET  DS='$ds' , EX ='$ex' , TT='$tt' where id ='$id' ") or
            die($mysqli->error);
    $update=false;
    
}
?>
