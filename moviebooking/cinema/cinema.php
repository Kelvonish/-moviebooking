<!DOCTYPE HTML>
<?php
session_start();
 ?>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>cinema schedule</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style1.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda|Merienda+One" rel="stylesheet">
	</head>
	<body>

		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
	    <div class="container">
	      <a href="../home.php" class="navbar-brand">Tickosafi</a>
	      <button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
	      <div class="collapse navbar-collapse" id="navbarNav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active">
	            <a href="../home.php" class="nav-link">Home</a>
	          </li>

	          <li class="nav-item">
	            <a href="../trailers.php" class="nav-link">Trailers</a>
	          </li>
	          <li class="nav-item">
	            <a href="../contact.php" class="nav-link">Contact</a>
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
	        		<a class="dropdown-item btn btn-danger" href="../login.php">Log out</a>

	        	</div>
	        	</li>
	        </ul>
	      </div>
	    </div>
	  </nav>




	<div class="fh5co-loader"></div>
	<div id="page">

	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Cinema Schedule</h2>
				</div>
			</div>

			<div class="row animate-box">

				<div class="fh5co-tabs">
					<ul class="fh5co-tab-nav">
						<li class="active"><a href="#" data-tab="1"><span class="visible-xs">S</span><span class="hidden-xs">Sunday</span></a></li>
						<li><a href="#" data-tab="2"><span class="visible-xs">M</span><span class="hidden-xs">Monday</span></a></li>
						<li><a href="#" data-tab="3"><span class="visible-xs">T</span><span class="hidden-xs">Tuesday</span></a></li>
						<li><a href="#" data-tab="4"><span class="visible-xs">W</span><span class="hidden-xs">Wednesday</span></a></li>

						<li><a href="#" data-tab="5"><span class="visible-xs">Th</span><span class="hidden-xs">Thursday</span></a></li>
						<li><a href="#" data-tab="6"><span class="visible-xs">F</span><span class="hidden-xs">Friday</span></a></li>
						<li><a href="#" data-tab="7"><span class="visible-xs">S</span><span class="hidden-xs">Saturday</span></a></li>
					</ul>

					<!-- Tabs -->

					<div class="fh5co-tab-content-wrap">
						<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="7">
							<ul class="class-schedule">
                  <form class="" action="../book.php" method="post">

								<li class="text-center">
									<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
										<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time']="8:00AM-10:30AM"; ?>
                    </span>
									<h4>Deadpool II <?php  $_SESSION['movie']="Deadpool II";  ?> <p class="btn btn-danger">3D</p> </h4>
                <a href="../book.php" class="btn btn-primary">Buy ticket  </a>

										</li>
                    </form>

                      <form class="" action="../book.php" method="post">
								<li class="text-center">
									<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
									<span class="time">12:00 AM -1:30PM
                  <?php     $_SESSION['time']="12:00PM-1:30PM"; ?></span>
									<h4>Jurassic Park
                    <?php  $_SESSION['movie']="Jurassic Park";  ?><p class="btn btn-danger">3D</p></h4>
									<a href="../book.php" class="btn btn-primary">  <input type="submit" name="buy" value="Buy ticket"></a>
                </form>
								</li>
								<li class="text-center">
									<img src="images/payday.png" height="350px" width="250px" alt="">
									<span class="time">6:00 PM - 8:00AM</span>
									<h4>Payday <p class="btn btn-danger">3D</p></h4>
									<a href="#" class="btn btn-primary">Buy Ticket</a>

								</li>
								<li class="text-center">
									<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
									<span class="time">9:00 AM - 11:00PM</span>
									<h4>Maze runner II <p class="btn btn-danger">3D</p></h4>
									<a href="#" class="btn btn-primary">Buy Ticket</a>

								</li>
						</div>









<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="1" >
	<ul class="class-schedule">
<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
					<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time1']="8:00AM-10:30AM"; ?></span>
			<h4>Deadpool II  <?php  $_SESSION['movie1']="Deadpool II"; ?><p class="btn btn-danger">3D</p> </h4>
	    <input type="submit" name="buy1" value="Buy ticket" class="btn btn-primary btn-block">
				</li>
</form>

<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
			<span class="time">12:00 PM - 2:00PM
      <?php $_SESSION['time2']="12:00PM-2:00PM"; ?></span>
			<h4>Jurassic Park  <?php  $_SESSION['movie2']="Jurassic park";?><p class="btn btn-danger">3D</p></h4>
	 <input type="submit" name="buy2" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
    </form>

    <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/payday.png" height="350px" width="250px" alt="">
			<span class="time">5:00 PM - 7:30PM
      <?php $_SESSION['time3']="5:00PM-7:30PM"; ?></span>
			<h4>Payday
         <?php  $_SESSION['movie3']="Pay Day";?><p class="btn btn-danger">3D</p></h4>
		 <input type="submit" name="buy3" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
  </form>
  <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
			<span class="time">8:00 PM - 10:00PM
      <?php $_SESSION['time4']="8:00PM-10:00PM"; ?></span>
			<h4>Maze runner II
 <?php  $_SESSION['movie4']="Maze runner II";?>
        <p class="btn btn-danger">3D</p></h4>
			 <input type="submit" name="buy4" value="Buy ticket" class="btn btn-primary btn-block">
</li>
  </form>
</div>


<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="2">
	<ul class="class-schedule">
<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
					<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time1']="8:00AM-10:30AM"; ?></span>
			<h4>Deadpool II  <?php  $_SESSION['movie1']="Deadpool II"; ?><p class="btn btn-danger">3D</p> </h4>
	    <input type="submit" name="buy1" value="Buy ticket" class="btn btn-primary btn-block">
				</li>
</form>

<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
			<span class="time">12:00 PM - 2:00PM
      <?php $_SESSION['time2']="12:00PM-2:00PM"; ?></span>
			<h4>Jurassic Park  <?php  $_SESSION['movie2']="Jurassic park";?><p class="btn btn-danger">3D</p></h4>
	 <input type="submit" name="buy2" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
    </form>

    <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/payday.png" height="350px" width="250px" alt="">
			<span class="time">5:00 PM - 7:30PM
      <?php $_SESSION['time3']="5:00PM-7:30PM"; ?></span>
			<h4>Payday
         <?php  $_SESSION['movie3']="Pay Day";?><p class="btn btn-danger">3D</p></h4>
		 <input type="submit" name="buy3" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
  </form>
  <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
			<span class="time">8:00 PM - 10:00PM
      <?php $_SESSION['time4']="8:00PM-10:00PM"; ?></span>
			<h4>Maze runner II
 <?php  $_SESSION['movie4']="Maze runner II";?>
        <p class="btn btn-danger">3D</p></h4>
			 <input type="submit" name="buy4" value="Buy ticket" class="btn btn-primary btn-block">
</li>
  </form>
</div>

<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="3">
	<ul class="class-schedule">
<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
					<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time1']="8:00AM-10:30AM"; ?></span>
			<h4>Deadpool II  <?php  $_SESSION['movie1']="Deadpool II"; ?><p class="btn btn-danger">3D</p> </h4>
	    <input type="submit" name="buy1" value="Buy ticket" class="btn btn-primary btn-block">
				</li>
</form>

<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
			<span class="time">12:00 PM - 2:00PM
      <?php $_SESSION['time2']="12:00PM-2:00PM"; ?></span>
			<h4>Jurassic Park  <?php  $_SESSION['movie2']="Jurassic park";?><p class="btn btn-danger">3D</p></h4>
	 <input type="submit" name="buy2" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
    </form>

    <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/payday.png" height="350px" width="250px" alt="">
			<span class="time">5:00 PM - 7:30PM
      <?php $_SESSION['time3']="5:00PM-7:30PM"; ?></span>
			<h4>Payday
         <?php  $_SESSION['movie3']="Pay Day";?><p class="btn btn-danger">3D</p></h4>
		 <input type="submit" name="buy3" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
  </form>
  <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
			<span class="time">8:00 PM - 10:00PM
      <?php $_SESSION['time4']="8:00PM-10:00PM"; ?></span>
			<h4>Maze runner II
 <?php  $_SESSION['movie4']="Maze runner II";?>
        <p class="btn btn-danger">3D</p></h4>
			 <input type="submit" name="buy4" value="Buy ticket" class="btn btn-primary btn-block">
</li>
  </form>
</div>

<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="4">
	<ul class="class-schedule">
<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
					<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time1']="8:00AM-10:30AM"; ?></span>
			<h4>Deadpool II  <?php  $_SESSION['movie1']="Deadpool II"; ?><p class="btn btn-danger">3D</p> </h4>
	    <input type="submit" name="buy1" value="Buy ticket" class="btn btn-primary btn-block">
				</li>
</form>

<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
			<span class="time">12:00 PM - 2:00PM
      <?php $_SESSION['time2']="12:00PM-2:00PM"; ?></span>
			<h4>Jurassic Park  <?php  $_SESSION['movie2']="Jurassic park";?><p class="btn btn-danger">3D</p></h4>
	 <input type="submit" name="buy2" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
    </form>

    <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/payday.png" height="350px" width="250px" alt="">
			<span class="time">5:00 PM - 7:30PM
      <?php $_SESSION['time3']="5:00PM-7:30PM"; ?></span>
			<h4>Payday
         <?php  $_SESSION['movie3']="Pay Day";?><p class="btn btn-danger">3D</p></h4>
		 <input type="submit" name="buy3" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
  </form>
  <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
			<span class="time">8:00 PM - 10:00PM
      <?php $_SESSION['time4']="8:00PM-10:00PM"; ?></span>
			<h4>Maze runner II
 <?php  $_SESSION['movie4']="Maze runner II";?>
        <p class="btn btn-danger">3D</p></h4>
			 <input type="submit" name="buy4" value="Buy ticket" class="btn btn-primary btn-block">
</li>
  </form>
</div>
<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="5">
	<ul class="class-schedule">
<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
					<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time1']="8:00AM-10:30AM"; ?></span>
			<h4>Deadpool II  <?php  $_SESSION['movie1']="Deadpool II"; ?><p class="btn btn-danger">3D</p> </h4>
	    <input type="submit" name="buy1" value="Buy ticket" class="btn btn-primary btn-block">
				</li>
</form>

<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
			<span class="time">12:00 PM - 2:00PM
      <?php $_SESSION['time2']="12:00PM-2:00PM"; ?></span>
			<h4>Jurassic Park  <?php  $_SESSION['movie2']="Jurassic park";?><p class="btn btn-danger">3D</p></h4>
	 <input type="submit" name="buy2" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
    </form>

    <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/payday.png" height="350px" width="250px" alt="">
			<span class="time">5:00 PM - 7:30PM
      <?php $_SESSION['time3']="5:00PM-7:30PM"; ?></span>
			<h4>Payday
         <?php  $_SESSION['movie3']="Pay Day";?><p class="btn btn-danger">3D</p></h4>
		 <input type="submit" name="buy3" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
  </form>
  <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
			<span class="time">8:00 PM - 10:00PM
      <?php $_SESSION['time4']="8:00PM-10:00PM"; ?></span>
			<h4>Maze runner II
 <?php  $_SESSION['movie4']="Maze runner II";?>
        <p class="btn btn-danger">3D</p></h4>
			 <input type="submit" name="buy4" value="Buy ticket" class="btn btn-primary btn-block">
</li>
  </form>
</div>

<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="6">
	<ul class="class-schedule">
<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
					<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time1']="8:00AM-10:30AM"; ?></span>
			<h4>Deadpool II  <?php  $_SESSION['movie1']="Deadpool II"; ?><p class="btn btn-danger">3D</p> </h4>
	    <input type="submit" name="buy1" value="Buy ticket" class="btn btn-primary btn-block">
				</li>
</form>

<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
			<span class="time">12:00 PM - 2:00PM
      <?php $_SESSION['time2']="12:00PM-2:00PM"; ?></span>
			<h4>Jurassic Park  <?php  $_SESSION['movie2']="Jurassic park";?><p class="btn btn-danger">3D</p></h4>
	 <input type="submit" name="buy2" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
    </form>

    <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/payday.png" height="350px" width="250px" alt="">
			<span class="time">5:00 PM - 7:30PM
      <?php $_SESSION['time3']="5:00PM-7:30PM"; ?></span>
			<h4>Payday
         <?php  $_SESSION['movie3']="Pay Day";?><p class="btn btn-danger">3D</p></h4>
		 <input type="submit" name="buy3" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
  </form>
  <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
			<span class="time">8:00 PM - 10:00PM
      <?php $_SESSION['time4']="8:00PM-10:00PM"; ?></span>
			<h4>Maze runner II
 <?php  $_SESSION['movie4']="Maze runner II";?>
        <p class="btn btn-danger">3D</p></h4>
			 <input type="submit" name="buy4" value="Buy ticket" class="btn btn-primary btn-block">
</li>
  </form>
</div>


<div class="fh5co-tab-content tab-content active mg-auto" data-tab-content="7">
	<ul class="class-schedule">
<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/deadpool.jpg"class="img-rounded" height="350px" width="250px" alt="">
					<span class="time">8:00 AM - 10:30AM
            <?php         $_SESSION['time1']="8:00AM-10:30AM"; ?></span>
			<h4>Deadpool II  <?php  $_SESSION['movie1']="Deadpool II"; ?><p class="btn btn-danger">3D</p> </h4>
	    <input type="submit" name="buy1" value="Buy ticket" class="btn btn-primary btn-block">
				</li>
</form>

<form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/Jurassic.jpg"  class="img-rounded"alt="" height="350px" width="250px">
			<span class="time">12:00 PM - 2:00PM
      <?php $_SESSION['time2']="12:00PM-2:00PM"; ?></span>
			<h4>Jurassic Park  <?php  $_SESSION['movie2']="Jurassic park";?><p class="btn btn-danger">3D</p></h4>
	 <input type="submit" name="buy2" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
    </form>

    <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/payday.png" height="350px" width="250px" alt="">
			<span class="time">5:00 PM - 7:30PM
      <?php $_SESSION['time3']="5:00PM-7:30PM"; ?></span>
			<h4>Payday
         <?php  $_SESSION['movie3']="Pay Day";?><p class="btn btn-danger">3D</p></h4>
		 <input type="submit" name="buy3" value="Buy ticket" class="btn btn-primary btn-block">

		</li>
  </form>
  <form class="" action="../book.php" method="post">
		<li class="text-center">
			<img src="images/maze runner.jpg" height="350px" width="250px" alt="">
			<span class="time">8:00 PM - 10:00PM
      <?php $_SESSION['time4']="8:00PM-10:00PM"; ?></span>
			<h4>Maze runner II
 <?php  $_SESSION['movie4']="Maze runner II";?>
        <p class="btn btn-danger">3D</p></h4>
			 <input type="submit" name="buy4" value="Buy ticket" class="btn btn-primary btn-block">
</li>
  </form>
</div>


					</div>

				</div>
			</div>
		</div>
	</div>




	<center>
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Suscribe for Cinema membership</h2>
					<p>Suscribe to cinema membership and watch unlimited movies everytime and anytime you want.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">BASIC</h2>
							<div class="price"><sup class="currency">$</sup>2000 KSH<small>/month</small></div>
							<ul class="classes">
								<li>10 3D movies</li>

								<li>1 ticket per movie</li>

							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>





					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">UNLIMITED PRO</h2>
							<div class="price"><sup class="currency">$</sup>6000 KSH<small>/month</small></div>
							<ul class="classes">
								<li>unlimited 3D movies</li>

								<li>4 tickets per movie</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</center>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>


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
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		</body>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>



	</body>
</html>
