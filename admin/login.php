

<?php

$host="localhost";
$user="root";
$password="";
$db="user1";

session_start();


 $data=mysqli_connect($host,$user,$password,$db);

 if($data===false)
 {
 	die("connection error");
 }


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

    
	 $sql="select * from login where username='".$username."'  ";

	 $result=mysqli_query($data,$sql);

	 $row=mysqli_fetch_array($result);
	echo $row["username"];
	echo $row["password"];
    echo $row["usertype"] ;
	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;
		header("location:messagesectionstudents.php");

		// header("location:userhome.php");
	}
    elseif($row["usertype"]=="teacher")
	{
		$_SESSION["username"]=$username;
		
		header("location:messagesectionteacher.php");
	}
	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:messagesectionadmin.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>









<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">     

             
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
            <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css"> 
			<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<div class="container">

    <div class="header">
 		<h1>login</h1>
 	</div>
	
	
	<div class="main">
     <div class="login_bar">
		<form action="#" method="POST" class="form-group">

	<div class="mb-3">
	
		<input type="text"   name="username" placeholder="Username" required>
	</div>
	

	<div class="mb-3">
	
		<input type="password" name="password" placeholder="password" required>
	</div>
	

	<div>
		
		<input type="submit" value="Login" class="btn btn-primary">
	</div>


	</form>


	<br><br>
 </div>
 </div>
</div>

</body>
</html>












