<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 
    <title>Welcome - <?php  $_SESSION['username']?> </title>
  </head>
  <style>
    h1{
      text-align: center;
    }
    h2{
      text-align: center;
    }
    .container2{
      width: 50%;
    }
  </style>
  <body>
    <?php require "partials/_nav.php"?>
   
    <div class="container my-4">
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> Welcome - <?php echo $_SESSION['username']?></h4>
  <p>Aww yeah, you successfully logged in.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to logout with this button <br><a href="/Login sys/logout.php"><button type="button" class="btn btn-primary btn-sm">Logout</button></a></p>
</div>
    </div>
    <br>
    <br>
    <h1>About me</h1>
    <hr>
    <br>
    <div class="container"> <h2>I like to reinvent myself</h2>
     <p>Now when I had mastered the language of this water and had come to know every trifling feature that bordered the great river as familiarly as I knew the letters of the alphabet, I had made a valuable acquisition.</p>
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/Login sys/partials/th.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/Login sys/partials/2.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <p>I still keep in mind a certain wonderful sunset which I witnessed when and steamboating was new to me. A broad expanse of the river was turned too blood in the middle distance the red hue brightened into gold, through which a solitary log came floating, black and conspicuous in one place a long calm slanting mark lay sparkling upon the water in another the surface was broken by boiling, tumbling rings, that were as many-tinted as an opal where the ruddy flush was faintest, was a smooth spot that was covered with graceful circles and radiating lines.</p>
</div></div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>