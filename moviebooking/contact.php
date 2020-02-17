
<?php
session_start();

 ?>

<?php
/*
$servername="localhost";
$user="root";
$pass= "";
$database= "movies";
$text="";
//$message="";
$con=mysqli_connect($servername,$user,$pass) or
 die("not connected");

mysqli_select_db($con,$database)or
die("could not select database");

if(isset($_POST['submit'])){
$fname=mysqli_real_escape_string($con, $_POST['fname']);
$email=  mysqli_real_escape_string($con,$_POST['email']);
$lname= mysqli_real_escape_string($con,$_POST['lname']);
$message= mysqli_real_escape_string($con,$_POST['message']);
$phone= mysqli_real_escape_string($con,$_POST['phone']);

if (empty($fname)|| empty($lname) || empty($email)||empty($phone) ||empty($message)){
  die();
}
else{
$sql="INSERT INTO comments(fname,lname,email,phone,message)
      VALUES('$fname','$lname', '$email','$phone','$message')";

  $query=mysqli_query($con,$sql);


if ($query) {
  $text=" &#10003 Thank you for your feedback";
}
else {
  $text="Please enter again";
}
}
}*/
 ?>









<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>con</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/slick.css">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="home.php" class="navbar-brand">Tickosafi</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="home.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="cinema\cinema.php" class="nav-link">Cinemas schedule</a>
          </li>
          <li class="nav-item">
            <a href="trailers.php" class="nav-link">Trailers</a>
          </li>

          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">

              <i class="fas fa-user-circle fa-2x"></i>
            <?php
           //echo $_SESSION['username'];

          echo $_SESSION['Nish18'];
          echo"<sup><font color='green' align='right'><b>Active</b></font> </sup>";

           ?>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item btn btn-danger" href="login.php">Log out</a>

          </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Contact Us</h1>
          <p></p>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-3">
      <form method="post" action="contact.php">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p></p>
              <h4>Address</h4>
              <p>727,Maua</p>
              <h4>Email</h4>
              <p>info@tickosafi.com</p>
              <h4>Phone</h4>
              <p>0706783609</p>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card p-4">
            <div class="">
              <?php echo "<font color='green'><b>$text</b></font> ";
               ?>
            </div>
            <div class="card-body">
              <h3 class="text-center">Please fill out this form to contact us</h3>
              <hr>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name" required name="fname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" required name="lname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required name="email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" class="form-control" placeholder="Phone Number" required name="phone">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message" name="message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn btn-outline-danger btn-block" name="submit">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </form>
  </section>




  <footer id="main-footer" class="text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright 2018 &copy; Tickosafi</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
