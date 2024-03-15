<?php
include('databases.php');
$id=$_GET['id'];
$obj= new query;
$condition_arr=array('status'=>1);

$check=$obj->updateData('users_regis',$condition_arr,'status','otp');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Verify</title>
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
              <a class="nav-link" href="#" rel="nofollow"
                target="_blank">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Blog</a>
            </li>
          </ul>

          <ul class="navbar-nav list-inline">
            <!-- Icons -->
            <li class="mx-3">
              <button type="button" class="btn btn-outline-light mt-1"><a  href="login.php" class="text-light">Log In</a></button>
            </li>
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
                <form class="bg-white  rounded-5 shadow-5-strong p-5" method="POST">
                    <!-- Email input -->
                    <h2 class="text-uppercase text-center mb-5">congratulation !</h2>
                    <h4 class="text-secondary text-center mb-5">   Your account is verified !</h4>
                    <div class="joker mb-3" style="text-align: center">
                    <img src="./joker/istockphoto-1208857817-612x612-removebg-preview.png" height="150" alt="">
                    </div>
                    <!-- Submit button -->
                    <button type="" name="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-lg "><a class="text-decoration-none text-dark" href="login.php">Login<a/></button>
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
      © 2020 Copyright:
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