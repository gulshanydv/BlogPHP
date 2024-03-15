<?php

session_start();  
include 'databases.php'; 
$obj= new query();  

if(isset($_POST['email'])&&($_POST['password'])){
$email=$_POST['email'];
$password=$_POST['password'];
// $_SESSION['']=$
$result= $obj->login($email,$password);
$numRows=mysqli_fetch_array($result);

// print_r($numRows);
// die();

// if($numRows !== 1){
//   $num=mysqli_fetch_array($result);
// }else{
//   $Message = "You have not confirmed your account yet. Please check your inbox and verify your email id.";
//   header("Location:login.php?Message=".$Message);
//   exit;
// }

// var_dump(count($num));die;

// if($num['status']==0){

  // echo "<script>alert('You have not confirmed your account yet. Please check your inbox and verify your email id.');</script>";
  // echo "<script>window.location.href='login.php'</script>";
// }
if($numRows>0)
{
  $_SESSION['logged_in']= TRUE;
  $_SESSION['user_id']=$numRows['id'];
  $_SESSION['user_name']=$numRows['username'];
  $_SESSION['user_email']=$numRows['email'];

// For success
echo "<script>window.location.href='homeprofile.php'</script>";
}
else
{
// Message for unsuccessfull login
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='login.php'</script>";
}
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <!-- MDB icon -->
    <link rel="icon" type="image/x-icon" href="./joker/favicon.ico">
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <style>
      #intro {
        background-image: url(./joker/bright-colorful-pop-landscape.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>
  </head>
  <body>
    <!-- Start your project here-->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="">
          <img
          src="./joker/Group 12.png"
          height="30"
          alt="MDB Logo"
          loading="lazy"
        />
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="homepage.php" rel="nofollow"
                target="_blank">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="homepage.php" target="_blank">Blog</a>
            </li>
          </ul>

          <ul class="navbar-nav list-inline">
            <!-- Icons -->
            
            <li class="">
              <button type="button" class="btn btn-outline-light mt-1"><a  href="signup.php" class="text-light">Sign Up</a></button>
            </li>
            <li class="">
              <a class="nav-link" href="https://www.facebook.com" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://twitter.com" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-8">
                  <form class="bg-white  rounded-5 shadow-5-strong p-5" method="POST" >
                      <?php 
                      if(isset($_GET['Message'])) {
                        echo $_GET['Message'];
                      }

                      ?>
                  <h3 class="text-center mb-3"><strong>Log In</strong></h3>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <input type="email" id="email" name="email"  class="form-control" />
                    <label class="form-label" for="form1Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="form1Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                    </div>

                    <div class="col text-center">
                        <!-- Simple link -->
                        <a href="#!"></a>
                    </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>

                    
                    <p class="text-center text-muted mt-5 mb-0">Don't have an account yet? <a href="signup.php"
                    class="fw-bold text-body"><u>Sign Up here</u></a></p>
                </form>
                </div>
            </div>
            </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class="bg-dark text-lg-start">

    <hr class="m-0" />


    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-light" href="#">PixelPerfect.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>

