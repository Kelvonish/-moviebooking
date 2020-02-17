<!doctype html>

<?php
session_start();
$servername="localhost";
$user="root";
$pass= "";
$database= "movies";

$message="";
$imessage="";

$con=mysqli_connect($servername,$user,$pass) or
 die("not connected");

mysqli_select_db($con,$database)or
die("could not select database");


  if (isset($_POST['login'])) {


$username=  mysqli_real_escape_string($con,$_POST['username']);
$password= mysqli_real_escape_string($con,$_POST['password']);


$password=sha1($password);
$_SESSION['Nish18']=$username;

//checking from database;
 $result=mysqli_query($con,"SELECT * FROM users WHERE email OR username= '$username' AND password='$password' ");


if ($result->num_rows>0) {
  $imessage=" &#10003 Login sucessful";
sleep(2);

 header("location:home.php");


}
else{
     $message="Username or password is incorrect" ;

  }
}
 ?>

<html>
	<head>
		<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 	<link rel="stylesheet" href="css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/bootstrap.css">
		<meta charset="utf-8">
		<title>Login page</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/slick-theme.css">
	  <link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
	    <div class="container">
	      <a href="index.html" class="navbar-brand">Tickosafi</a>
	      <button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
	      <div class="collapse navbar-collapse" id="navbarNav">
	        <ul class="navbar-nav ml-auto">


	        </ul>
	      </div>
	    </div>
	  </nav>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Member Login</h2>
			<form action="login.php" method="post">

				<div class="alert-message">
								<p id="success"> <?php echo $imessage; ?> </p>
								<p id="error"> <?php echo $message; ?> </p>
				</div>

				<p>Username or Email</p>
				<input type="text" name="username" placeholder="Enter Username or email" required>
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••" required >
				<input type="submit" name="login" value="Login">
				<a href="#">Don't have an account? <a href="register.php" class="btn btn-success">Register</a> </a>
			</form>
		</div>

		<script src="js/jquery.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	</body>
</html>
