
<?php
session_start();
 ?>

<<?php
$total="";
$imessage="";
$movie="";
$time="";
$seats="";
$_SESSION['moviename']="";
if (isset($_POST['calculate'])) {
  $seats=$_POST['seat'];


$total=$seats*400;
$_SESSION['amount']=$total;
$_SESSION['seat']=$seats;
$imessage="<a href='payment.php' class='btn btn-success'align='center'>Proceed to check out </a>";
 echo $_SESSION['moviename'];
 echo "stored the movie name in a session";

}
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>book with us</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>book movie tickets</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda|Merienda+One" rel="stylesheet">
  </head>



  <body id="many">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="home.php" class="navbar-brand">Tickosafi</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="cinema\cinema.php" class="nav-link">Cinemas schedule</a>
            </li>
            <li class="nav-item">
              <a href="trailers.php" class="nav-link">Trailers</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link ml-5"></a>
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
<style media="screen" rel="text/stylesheet">
#contu{
width: 500px;
}
#many{
  background-image: url('img/back3.png');
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}
</style>
<center>
    <div id="contu">
<br>
<br>
<br>
<br>
<br>
<h3>Each ticket cost Ksh:400</h3>
<p>Name of movie: <?php if (isset($_POST['buy1'])) {
  $_SESSION['moviename']=$_SESSION['movie1'];
  $time=$_SESSION['time1'];
}
elseif (isset($_POST['buy2'])) {
$_SESSION['moviename']=$_SESSION['movie2'];
$time=$_SESSION['time2'];
}
elseif (isset($_POST['buy3'])) {
$_SESSION['moviename']=$_SESSION['movie3'];
$time=$_SESSION['time3'];
}
elseif (isset($_POST['buy4'])) {
$_SESSION['moviename']= $_SESSION['movie4'];
$time=$_SESSION['time4'];
}


echo $_SESSION['moviename'];


 ?></p>
<p>Time: <?php echo $time;
$_SESSION['movietime']=$time;
?> </p>

<?php echo $_SESSION['moviename'];
echo $time; ?>
    <form method="post" action="book.php">
      <div class="form-group">
        <label for="seats">Enter number of seats:</label>
        <input type="number" name="seat"  placeholder="" required class="form-control">
      </div>
      <input type="submit" name="calculate" value="check total" class="btn btn-success btn-block">
    <P> Total amount payable:<?php echo $total; ?></p>
<div class="">
  <?php echo $imessage; ?>
</div>
    </form>

</div>
</center>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
