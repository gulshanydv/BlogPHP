<?php
session_start();
include('databases.php');

if(!isset($_SESSION['logged_in'])){
	header('location:login.php');
	die();
}

$obj= new query();
$condition_arr=array('id'=>1);
$check=$obj->getData('users_regis','*',$condition_arr,'','');

$condition_arr=array('id'=>1);


$joker=$obj->getData('post','*','','','');
// echo '<pre>';
//  print_r($check);
//  die();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $filename = $_FILES["media"]["name"];
  $tempname = $_FILES["media"]["tmp_name"];
  //echo $folder;
  $folder = "images/". $filename;
  move_uploaded_file($tempname, $folder);

  $title=$obj->get_safe_str($_POST['title']);
  $body=$obj->get_safe_str($_POST['body']);
  $userid= $_SESSION['user_id'];
  $username= $_SESSION['user_name'];

 
  $condition_arr=array('title'=>$title,'body'=>$body,'media'=>$folder, 'owner_name'=>$username,'owner_id'=>$userid);
  $obj->insertData('post',$condition_arr);


}
// if(strlen($_SESSION['user_id'])==""){
//   header('location:logout.php');
// }else{
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Profile</title>
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

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
      .gradient-custom-2 {
/* fallback for old browsers */
background: #fbc2eb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
}</style>
  </head>
  <body style="background-image: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));">
    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-dark  d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand nav-link" target="_blank" href="homeprofile.php">
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
                <a class="nav-link" aria-current="page" href="homeprofile.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" rel="nofollow"
                  target="_blank">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">Blog</a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center">
        <!-- Icon -->
       
  
        <!-- Notifications -->
        <div class="dropdown">
          <a
            class="link-secondary me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell" style="color:#fff"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="./joker/FjU2lkcWYAgNG6d.jpg"
              class="rounded-circle"
              height="41"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#"><?php  echo  $_SESSION['user_name'];?></a>
            </li>
            <li>
              <a class="dropdown-item" href="profilesetting.php">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
        </div>
      </nav>
  
  <!-- <main class="mt-5"> -->
  <!-- <section class="h-100 gradient-custom-2"> -->
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-7 col-xl-9">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-image: url(./joker/bright-colorful-pop-landscape.jpg); height:250px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 200px;">
              <img src="./joker/FjU2lkcWYAgNG6d.jpg"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 200px; z-index: 1">
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1;">
                Edit profile
              </button>
            </div>
            <?php foreach($check as $post) { ?> 
            <div class="ms-3" style="margin-top: 130px;">
              <h5><?php echo $_SESSION['user_name'] ?></h5>
              <p><?php echo $_SESSION['user_email'] ?></p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1">
              <div>
                <p class="mb-1 h5">253</p>
                <p class="small text-muted mb-0">Photos</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">1026</p>
                <p class="small text-muted mb-0">Followers</p>
              </div>
              <div>
                <p class="mb-1 h5">478</p>
                <p class="small text-muted mb-0">Following</p>
              </div>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">Web Developer</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
</section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <div class="card" style="width: 80rem">
        <div class=" px-0 mt-2">
  

          <div>
            <div class="card shadow-0">
              <div class="card-body border-bottom pb-2">
                <div class="d-flex">
                  <div>
                  <img src="./joker/FjU2lkcWYAgNG6d.jpg" class="rounded-circle"
                    height="50" alt="Avatar" loading="lazy" />
                  </div>
                  <div class="d-flex align-items-center w-100 ps-3">
                    <div class="w-100">
                      <form  method="post" enctype="multipart/form-data" >

                        <input type="text" id="form143" name="title" class="form-control form-status border-1 py-1 px-1 mb-2"
                        placeholder="Title goes here" />
                        <textarea  name="body"  class="form-control" id="form4Example3" rows="4"  placeholder="Content goes here"></textarea>
                      

                      </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                  <ul class="list-unstyled d-flex flex-row ps-3 pt-3" style="margin-left: 50px;">
                    <li>
                      <i class="far fa-image pe-2" style = "position: relative;"><input type="file" name="media" style="opacity: 0;position: absolute;top: 0%;left: 1%;"></i>
                    </li>
                    <!-- <li>
                      <a href=""><i class="fas fa-photo-video px-2"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fas fa-chart-bar px-2"></i></a>
                    </li>
                    <li>DDD
                      <a href=""><i class="far fa-smile px-2"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="far fa-calendar-check px-2"></i></a>
                    </li> -->
                  </ul>
                  <div class="d-flex align-items-center">
                    <button type="submit"  name="submit" value="upload" class="btn btn-primary btn-rounded">Publish</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
            <div>
              <?php foreach($joker as $king) { ?> 
              <div class="d-flex p-3 border-bottom">
                <img src="./joker/FjU2lkcWYAgNG6d.jpg" class="rounded-circle"
                  height="50" alt="Avatar" loading="lazy" />
                <div class="d-flex w-100 ps-3">
                  <div>
                    <a href="">
                      <h6 class="text-body">
                      <?php echo $king['owner_name']; ?>
                      
                        <span class="small text-muted font-weight-normal"> • </span>
                        <span class="small text-muted font-weight-normal">2h</span>
                        <span><i class="fas fa-angle-down float-end"></i></span>
                      </h6>
                    </a>
                    <p style="line-height: 1.2;">
                    <strong><?php echo $king['title']; ?></strong>
                    </p>
                    <p style="line-height: 1.2;">
                    <?php echo $king['body']; ?>

                    </p>
                    
                    <img src="<?php echo $king['media']; ?>"
                      class="img-fluid rounded mb-3" alt="Fissure in Sandstone" />
                    <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-2">
                      <li>
                        <i class="far fa-comment"></i>
                      </li>
                      <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                      <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                      <li>
                        <i class="far fa-share-square"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php } ?>
              <div class="d-flex p-3 border-bottom">
                <img src="./joker/FjU2lkcWYAgNG6d.jpg" class="rounded-circle"
                  height="50" alt="Avatar" loading="lazy" />
                <div class="d-flex w-100 ps-3">
                  <div>
                    <a href="">
                      <h6 class="text-body">
                      <?php echo $post['username']; ?>
                        <span class="small text-muted font-weight-normal">@<?php echo $post['username']; ?></span>
                        <span class="small text-muted font-weight-normal"> • </span>
                        <span class="small text-muted font-weight-normal">7h</span>
                        <span><i class="fas fa-angle-down float-end"></i></span>
                      </h6>
                    </a>
                    <p style="line-height: 1.2;">
                    <?php echo $post['username']; ?> has updated his profile picture
                    </p>
                    <img src="./joker/FjU2lkcWYAgNG6d.jpg"
                      class="img-fluid rounded mb-3" alt="Fissure in Sandstone" />
                    <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                      <li>
                        <i class="far fa-comment"></i>
                      </li>
                      <li><i class="fas fa-retweet"></i><span class="small ps-2">11</span></li>
                      <li><i class="far fa-heart"></i><span class="small ps-2">65</span></li>
                      <li>
                        <i class="far fa-share-square"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>

      </div>
      <!--Section: Content-->


      <!--Section: Content-->
      
      <!--Section: Content-->
    </div>
  </main>
  <hr class="mt-5" />
  </div>
  <footer class="bg-light text-lg-start" style="background-image: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));" >
    
    

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
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>





