<!doctype html>

<?php

$servername="localhost";
$user="root";
$pass= "";
$database= "movies";
$imessage="";
$message="";
$con=mysqli_connect($servername,$user,$pass) or
 die("not connected");

mysqli_select_db($con,$database)or
die("could not select database");

if (isset($_POST['register'])) {
$username=mysqli_real_escape_string($con, $_POST['username']);
$email=  mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$confirmpassword= mysqli_real_escape_string($con,$_POST['confirmpassword']);
$phone= mysqli_real_escape_string($con,$_POST['phone']);
if ($password==$confirmpassword) {

   $result = mysqli_query($con,"SELECT * FROM users WHERE email='$email'") or die(mysqli_error($con));

        if ( $result->num_rows > 0 ) {

       $message= "User with this email already exists!";
}
else {

    $sql="INSERT INTO users(username,email,password,phone)
          VALUES('$username','$email','$password','$phone')";


          $insert= mysqli_query($con,$sql);

          if ($insert) {

           $imessage=" &#10003 registration successful";



            header("location:login.php");
          }
          else {
            $message="<p>Something went wrong: " . mysqli_error($con); + "</p>";
          }
}
}
else {
  $message="Password does not match";
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
		<title>Register</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="container">
				<a href="index.html" class="navbar-brand">Tickosafi</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">

						<li class="nav-item">
							<a href="services.html" class="nav-link">Trailers</a>
						</li
					</ul>
				</div>
			</div>
		</nav>

<section>
		<div class="loginBox" id="loginBox">
			<img src="user.png" class="user">
			<h2>Register</h2>
			<form action="register.php" method="post">
				<div class="alert-message">
								<p id="success"> <?php echo $imessage; ?> </p>
								<p id="error"> <?php echo $message; ?> </p>
				</div>
        <p>Username</p>
				<input type="text" name="username" placeholder="Enter username " required>
        <p>Email</p>
				<input type="email" name="email" placeholder="Enter Email" required>
				<p>Phone number</p>
				<input type="number" name="phone" placeholder="Enter phone number" required>
				<p>Password</p>
				<input type="password" name="password" placeholder="password" required>
        <p>Confirm Password</p>
				<input type="password" name="confirmpassword" placeholder="Re-enter password" required>
				<input type="submit" name="register" value="Register">
				<a href="#">Already have an account?  <a href="login.html" class="btn btn-success">Login</a> </a>
			</form>
		</div>
<section>


		<script src="js/jquery.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	</body>
</html>
