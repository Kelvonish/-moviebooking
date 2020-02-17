<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>book movie tickets</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">Tickosafi</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="about.html" class="nav-link">Cinemas schedule</a>
          </li>
          <li class="nav-item">
            <a href="services.html" class="nav-link">Trailers</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link"><?php #echo $username; ?> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3"> <b> Black Panth er &#9733; &#9733;&#9733;&#9733; &#9733;</b> </h1>
              <p class="lead"</p>
              <a href="#" class="btn btn-danger btn-lg">Buy Ticket</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
               <h1 class="display-3"> <font color="blue"> <b> Thor &#9733; &#9733; &#9733; &#9733;</b> </font></h1>
              <p class="lead"></p>
              <a href="#" class="btn btn-primary btn-lg">Buy ticket</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
               <h1 class="display-3"> <font color="red" ><b> Deadpool &#9733; &#9733; &#9733; &#9733;</b></font></h1>

              <p class="lead"> </p>
              <a href="#" class="btn btn-danger btn-lg">Buy Ticket</a>
            </div>
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!-- HOME ICON SECTION -->
  <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <i class="fa fa-cog mb-2"></i>
          <h3>Easy and Convinient</h3>
          <p>Get your tickets in advance in an easy and convinient way</p>
        </div>
        <div class="col-md-4 mb-4 text-center">

          <i class="fas fa-glasses fa-3x"></i>
          <h3>All in 3D</h3>
          <p>Movies available in 3D.</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fa fa-cart-plus mb-2"></i>
          <h3>Save time and Money</h3>
          <p>Discounted tickets and easy to buy</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOME HEADING SECTION -->
  <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1>Are You Ready To Get Started?</h1>
            <p class="d-none d-md-block">Navigate to the cinema schedule, choose you favourite movie and the check the time it is airing. Buy the ticket and enjoy the movie!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INFO SECTION -->
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3>Catch up on latest movies</h3>
          <p>“The cinema substitutes for our gaze a world more in harmony with our desires.”<br>
          Be the first to know when a new movie rolls out </p>
          <a href="#" class="btn btn-outline-danger btn-lg">Learn More</a>
        </div>
        <div class="col-md-6">
          <img src="img/cinema.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- PHOTO GALLERY -->
    <section id="gallery" class="py-5">
      <div class="container">
        <h1 class="text-center">Some Popular Movies</h1>
        <p class="text-center"></p>
        <div class="row mb-4">
          <div class="col-md-4">

              <img src="img/dc.jpg" class="img-fluid">
          </div>
          <div class="col-md-4">

              <img src="img/movie4.jpg" class="img-fluid">
          </div>
          <div class="col-md-4">

              <img src="img/movie5.jpg" class="img-fluid">

          </div>
        </div>

          </div>
        </div>
      </div>
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
    <script src="js/main.js"></script>
  </body>
  </html>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
