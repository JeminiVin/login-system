<?php
$err = false;
$showerr=false;
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
     include 'partials/_dbconnect.php';
     $username = $_POST["username"];
     $password = $_POST["password"];
     $cpassword = $_POST["cpassword"];
     //$exist=true;
     
     $existsSql = "SELECT * FROM `users2` WHERE username='$username'";
     $result = mysqli_query($conn, $existsSql);
     $numRows= mysqli_num_rows($result);
     if($numRows >0){
      // $exist=true;
       $showerr = "password do not matched or username already exists";
     }
     else{
       $exist=false;
     if(($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users2` (`srno.`, `username`, `password`) VALUES ( '$srno', '$username', '$password');";
        $result = mysqli_query($conn, $sql);
        if($reuslt= true){
          $err = true; 
        }
     }
     else{
       $showerr = "password do not matched or username already exists";
     }
    }

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Sign Up!</title>
  <style>
      h1{
          font-size: 43px;
          
          text-align:center;
      }
  </style>  
  </head>
  <body>
   <?php require 'partials/_nav.php' ?>
   <?php 
   
   if($err){
  echo '
  <div class="alert alert-success" role="alert">
  <strong>&#128077;</strong> <strong> Success!</strong> Your account has now created you have all set to go .
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>';
   }

   if($showerr){
    echo '
    <div class="alert alert-danger" role="alert">
    <strong>&#128078; Failed!</strong> Your account has not created i am sorry or username already exists password do not match; 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
     </div>';
     }
  ?> 

    <div class="container">
        <h1 class="text-center">Sign up to our portal</h1>
        <form action="/login sys/signup.php" method="post">
  <div class="form-group">
    <label for="Email address"></label>
    <input type="text" maxlength="11" class="form-control" id="username" name="username"aria-describedby="emailHelp" placeholder="Enter Your Email Address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Password"></label>
    <input type="password" maxlength="11" class="form-control" id="password" name="password" placeholder="Enter you Password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Confirm Password"></label>
    <input type="password"  maxlength="11" class="form-control" id="cpassword" name="cpassword" placeholder="Please Confirm your password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">signup</button>
</form>
    </div>
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