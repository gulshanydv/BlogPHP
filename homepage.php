<?php
session_start();
include('databases.php');
$obj= new query();
$check=$obj->getData('post','*','','','');



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PixelPerfect</title>
    <!-- favicon -->
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
      /* Carousel styling */
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 100vh;
      }

      .carousel-item:nth-child(1) {
        background-image: url('./joker/roman-bozhko-PypjzKTUqLo-unsplash\ \(1\).jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(2) {
        background-image: url('./joker/wallpaperflare.com_wallpaper.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(3) {
        background-image: url('./joker/christopher-gower-m_HRfLhgABo-unsplash.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
      
      #a>section>div:nth-child(odd) {
      display:flex;
      flex-direction:row;
      }
      #a>section>div:nth-child(even) {
      display:flex;
      flex-direction:row-reverse;
      }
      
      </style>
  </head>
  <body>
    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="">
          <img
          src="./joker/Group 12.png"
          height="30"
          alt=" Logo"
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
              <button type="button" class="btn btn-outline-light mt-1"><a  href="login.php" class="text-light">Log in</a></button>
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

    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>Hi. I’m Prithiviraj Kh, nice to meet 
                      you. Please take a look 
                      around!</h2>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.);">
          
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center " >
              <H1 class="display-1 fw-bold fw-100 ">Not Your <br>
                  Average<br>
                  Software<br>
                  Engineer</H1>
              </div>
        </div>
      </div>
        </div>
      <!-- Inner -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel wrapper -->
 
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container" id="a">
      <!--Section: Content-->
      <section>
        <?php foreach($check as $post) { 
          
          // echo '<pre>';
          // print_r($post);
          // die();?> 
        <div class="row mt-3">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="<?php echo $post['media']; ?>" class="img-fluid" />
              <a href="view4common.php?id=<?php echo $post['id']; ?>" >
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
          <div class="col-md-6 gx-5 mb-4">
            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
            <h4><strong><?php echo $post['title']; ?></strong></h4>
            <p class="text-muted">
            <?php echo $post['body']; ?>
            </p>
          </div>
        </div>
        
        <?php } ?>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section>
<div class="row gx-lg-5">
<?php foreach($check as $post) { ?> 
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <!-- News block -->
    
      <!-- Featured image -->
      <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
        <img src="<?php echo $post['media']; ?>" class="img-fluid" />
        <a href="view4common.php?id=<?php echo $post['id']; ?>">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>

      <!-- Article data -->
      <div class="row mb-3">
        <div class="col-6">
          <a href="" class="text-info">
            <i class="fas fa-plane"></i>
            Travels
          </a>
        </div>

        <!-- <div class="col-6 text-end">
          <u> 15.07.2020</u>
        </div> -->
      </div>

      <!-- Article title and description -->
      <a href="view4profile.php?id=<?php echo $post['id']; ?>" class="text-dark">
        <h5><strong><?php echo $post['title']; ?></strong></h5>

        <p>
        <?php echo $post['body']; ?>
        </p>
      </a>

    </div> 
    <?php }?><!-- News block -->
  </div>



  
</div>
</section>
      <!--Section: Content-->

      
      <!--Section: Content-->
      
      <div class="container">
          <hr class="my-5" />
          <!--Section: Content-->
          <section class="text-center text-md-start">
            <h4 class="mb-5"><strong>Latest posts</strong></h4>
    
            <!-- Post -->
            <?php 
        foreach($check as $post) { ?> 
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                  <img src="<?php echo $post['media']; ?>" class="img-fluid" />
                  <a href="view4common.php?id=<?php echo $post['id']; ?>">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>
    
              <div class="col-md-8 mb-4">
                <h5><?php echo $post['title']; ?></h5>
                <p>
                <?php echo $post['body']; ?>
                </p>
    
                <button type="button" class="btn btn-primary"><a class="text-decoration-none text-light" href="view4profile.php?id=<?php echo $post['id']; ?>">Read</a></button> 
              </div>
            </div>
            <?php } ?>
            <!-- Post -->
            <!-- Post -->
          </section>
      <hr class="my-5" />
      <section class="text-center">
<h4 class="mb-5"><strong>Hot Issues</strong></h4>

<div class="row">
<?php 
        foreach($check as $post) { ?> 
  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card" style="height:40vw;">
      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img src="<?php echo $post['media']; ?>" class="img-fluid" style="min-height:14vw;" />
        <a href="view4common.php?id=<?php echo $post['id']; ?>">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $post['title']; ?></h5>
        <p class="card-text">
        <?php echo $post['body']; ?>
        </p>
        <a href="view4profile.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Read</a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
</section>
    <!--Section: Content-->
    <!-- Pagination -->
    <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
      <!--Section: Content-->
</main>
<!--Main layout-->
<!--Footer-->
<footer class="bg-light text-lg-start">
    <hr class="m-0" />
    <div class="text-center py-4 align-items-center">
      <p>Follow <strong>PixelPerfect</strong> on social media</p>
      <a href="#" class="btn btn-primary m-1" role="button"
        rel="nofollow" target="_blank">
        <i class="fab fa-youtube"></i>
    </a>
    <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow"
    target="_blank">
    <i class="fab fa-facebook-f"></i>
</a>
<a href="#" class="btn btn-primary m-1" role="button" rel="nofollow"
target="_blank">
<i class="fab fa-twitter"></i>
</a>
<a href="#" class="btn btn-primary m-1" role="button" rel="nofollow"
target="_blank">
<i class="fab fa-github"></i>
</a>
</div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="homeprofile.php">PixelPerfect</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>


