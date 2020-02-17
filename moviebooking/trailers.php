
<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>trailers</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  </head>



  <body id="trailer" bgcolor="grey">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
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
              <a href="contact.php" class="nav-link">Contact</a>
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

      </div>
    </nav>


    <div class="container" >
      <div class="row">
        <div class="col-sm-8 m-auto">
          <div id="slider3" class="carousel slide mb-5" data-ride="carousel" >
                    <ol class="carousel-indicators">
                      <li class="active" data-target="#slider3" data-slide-to="0"></li>
                      <li data-target="#slider3" data-slide-to="1"></li>
                      <li data-target="#slider3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active" id="carousel">
                        <img class="d-block img-fluid" src="img/movie2.jpg" alt="First Slide">
                      </div>
                      <div class="carousel-item" id="carousel">
                        <img class="d-block img-fluid" src="img/movie6.png" alt="Second Slide">
                      </div>
                      <div class="carousel-item" id="carousel">
                        <img class="d-block img-fluid" src="img/movie4.jpg" alt="Third Slide">
                      </div>
                    </div>
                    <a href="#slider3" class="carousel-control-prev" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>

                    <a href="#slider3" class="carousel-control-next" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>

    </div>
    </div>
    </div>


<section>
<center> <h1>Trailers</h1> </center>
<h3>Stay tuned daily for the latest movie trailers and previews, television series and game teasers, TV spots, clips
  and behind-the-scenes featurettes!</h3>
</section>

    <div class="row mt-4 mb-5">
         <div class="col-md-4" >
   <h3>AVENGERS 4 &#9733;&#9733;&#9733;&#9733;</h3>
           <video width="400" height="350" controls class="pt-0">
             <source src="img/AVENGERS 4- The End Game.mp4" type="video/mp4">

           </video>

         </div>
         <div class="col-md-4 ">
           <h3>THE BOYS&#9733;&#9733;&#9733;&#9733;</h3>
           <video width="400" height="350" controls>
             <source src="img/THE BOYS.mp4" type="video/mp4">

           </video>

                        </div>
         <div class="col-md-4">

            <h3>VENOM &#9733;&#9733;&#9733; </h3>
           <video width="400" height="350" controls>
             <source src="img/VENOM.mp4" type="video/mp4">

           </video>

         </div>

       </div>

       <div class="row mt-4 mb-5">
            <div class="col-md-4" >
       <h3>Three Identical Strangers &#9733;&#9733;&#9733;&#9733;</h3>
              <video width="400" height="350" controls class="pt-0">
                <source src="img/Three Identical Strangers.mp4" type="video/mp4">

              </video>

            </div>
            <div class="col-md-4 ">
              <h3>Captain Marvel &#9733;&#9733;&#9733;&#9733;</h3>
              <video width="400" height="350" controls>
                <source src="img/CAPTAIN MARVEL.mp4" type="video/mp4">

              </video>

                           </div>
            <div class="col-md-4">

               <h3>BUMBLEBEE &#9733;&#9733;&#9733; </h3>
              <video width="400" height="350" controls>
                <source src="img/BUMBLEBEE.mp4" type="video/mp4">

              </video>

            </div>

          </div>

          <div class="row mt-4 mb-5">
               <div class="col-md-4" >
         <h3>Final Score &#9733;&#9733;&#9733;&#9733;</h3>
                 <video width="400" height="350" controls class="pt-0">
                   <source src="img/Final Score.mp4" type="video/mp4">

                 </video>

               </div>
               <div class="col-md-4 ">
                 <h3>Godzilla- King of the Monsters&#9733;&#9733;&#9733;&#9733;</h3>
                 <video width="400" height="350" controls>
                   <source src="img/Godzilla- King of the Monsters.mp4" type="video/mp4">

                 </video>

                              </div>
               <div class="col-md-4">

                  <h3>First Man &#9733;&#9733;&#9733; </h3>
                 <video width="400" height="350" controls>
                   <source src="img/First Man.mp4" type="video/mp4">

                 </video>

               </div>

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
  </body>
</html>
