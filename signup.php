<?php
include('databases.php');
$obj= new query();
$msg="";
if(isset($_POST['submit'])){
  $username=$obj->get_safe_str($_POST['username']);
  $email=$obj->get_safe_str($_POST['email']);
  $confirm_pass=$obj->get_safe_str($_POST['confirm_pass']);
  $password=$obj->get_safe_str($_POST['password']);
  $condition_arr=array('email'=>$email);
  
  $check=$obj->getData('users_regis','*',$condition_arr,'email','');
  $otp=rand(1000,9000);

  if($password != $confirm_pass){
    echo "<script>alert('Password must be matched')</script>";

  }

  if(!empty($check)){
    echo "<script>alert('User already register')</script>";
    echo "<script>window.location.href='signup.php'</script>";

    
  }else{
    $condition_arr=array('username'=>$username,'email'=>$email,'confirm_pass'=>$confirm_pass,'password'=> $password,'otp'=>$otp);
    $obj->insertData('users_regis',$condition_arr);
  }
      $msg="We've just sent a verification code to <strong>$email</strong>. Please check your inbox and click on the link to get started.";
  
      $mailHtml="The verification code is <strong>$otp</strong>.<br><br>Please confirm your account registration by clicking the button or link below: <a href='http://localhost/pixelperfect/check.php?id=$otp'>http://localhost/pixelperfect/check.php?id=$otp</a>";
      
      mailer($email,'Verification',$mailHtml);
    //  header('location: otpverify.php');

  ///var_dump($check);


}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sign Up</title>
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
        <a class="navbar-brand nav-link" target="_blank" href="#">
          <img
          src="./joker/Group 12.png"
          height="30"
          alt=""
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
              <button type="button" class="btn btn-outline-light mt-1"><a  href="login.php" class="text-light">Log in</a></button>
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
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" class="form-control" />
                    <label class="form-label" for="form1Example1">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" />
                    <label class="form-label" for="form1Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="form1Example2">Password</label>
                    </div>
                    <div class="form-outline mb-4">
                    <input type="password" id="confirm_pass" name="confirm_pass" class="form-control" />
                    <label class="form-label" for="form1Example2">Confirm password</label>
                    </div>
                   
                    <!-- 2 column grid layout for inline styling -->
                   

                    <!-- Submit button -->
                    <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-block">Sign up</button>

                    <div class="msg mt-3">
                  <?php
                  echo $msg;
                  ?>
                </div>
                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>
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
      <a class="text-light" href="#">Pi.com</a>
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

