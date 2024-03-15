<?php 
include('databases.php');
$obj= new query();
$id= $_GET['id'];
// echo '<pre>';
//  print_r($id);
//  die();
$condition_arr=array('id'=>$id);

$check=$obj->getData('post','*',$condition_arr,'','');
$conditionnn_arr=array('post_id'=>$id);

$comment=$obj->getData('comment','*',$conditionnn_arr,'','');
// echo '<pre>';
//  print_r($comment);
//  die();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>View Post</title>
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
    <?php foreach($check as $post) { ?> 

    <div id="intro" class="p-5 text-center ">
      <h1 class="mb-0 h4"><?php echo $post['title']; ?></h1>
    </div>

    <main class="mt-4 mb-5">
    <div class="container d-flex justify-content-center">
      <!--Grid row-->
     
        <!--Grid column-->
        <div class="col-md-8 mb-4 align-items-center">
          <!--Section: Post data-mdb-->
          <section class="border-bottom mb-4">
            <img src="<?php echo $post['media']; ?>"
              class="img-fluid shadow-2-strong rounded-5 mb-4" alt="" />

            <div class="row align-items-center mb-4">
              <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-5 shadow-1-strong me-2"
                  height="35" alt="" loading="lazy" />
                <span> Published <u>15.07.2020</u> by</span>
                <a href="" class="text-dark"><?php echo $post['owner_name']; ?></a>
              </div>

              <div class="col-lg-6 text-center text-lg-end">
                <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
                  <i class="fab fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #0082ca;">
                  <i class="fab fa-linkedin"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1">
                  <i class="fas fa-comments"></i>
                </button>
              </div>
            </div>
          </section>
          <!--Section: Post data-mdb-->

          <!--Section: Text-->
          <section>
            <p>
            <?php echo $post['body']; ?>
            </p>

            <p><strong><?php echo $post['title2']; ?></strong></p>

            <p>
            <?php echo $post['body2']; ?>
            </p>

           

            
          </section>
          <?php } ?>

          <!--Section: Text-->

          <!--Section: Share buttons-->
          <!-- <section class="text-center border-top border-bottom py-4 mb-4">
            <p><strong>Share with your friends:</strong></p>

            <button type="button" class="btn btn-primary me-1" style="background-color: #3b5998;">
              <i class="fab fa-facebook-f"></i>
            </button>
            <button type="button" class="btn btn-primary me-1" style="background-color: #55acee;">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-primary me-1" style="background-color: #0082ca;">
              <i class="fab fa-linkedin"></i>
            </button>
            <button type="button" class="btn btn-primary me-1">
              <i class="fas fa-comments me-2"></i>Add comment
            </button>
          </section> -->
          <!--Section: Share buttons-->

          <!--Section: Author-->
          <section class="border-bottom border-top m-4 p-4">
            <div class="row">
              <div class="col-3">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(23).jpg"
                  class="img-fluid shadow-1-strong rounded-10" alt="" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Anna Maria Doe</strong></p>
                <a href="" class="text-dark"><i class="fab fa-facebook-f me-1"></i></a>
                <a href="" class="text-dark"><i class="fab fa-twitter me-1"></i></a>
                <a href="" class="text-dark"><i class="fab fa-linkedin me-1"></i></a>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                  inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                  Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                </p>
              </div>
            </div>
          </section>
          <!--Section: Author-->

          <!--Section: Comments-->
          
          <section class="border-bottom mb-3">
            <p class="text-center"><strong>Comments: 3</strong></p>

            <?php 
            if($comment){
            
            foreach($comment as $tiger){?>
            <!-- Comment -->
            <div class="row mb-4">
              <div class="col-2">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
                  class="img-fluid shadow-1-strong rounded-5" alt="" />
              </div>

              <div class="col-10">
                <p class="mb-2"><strong><?php  echo $tiger['username']; ?></strong></p>
                <p>
                <?php echo $tiger['comment']; ?>
                </p>
              </div>
            </div>
            <?php } } ?> 


       

            <!-- Comment -->
            
          </section>
          <!--Section: Comments-->

          <!--Section: Reply-->
       
          <!--Section: Reply-->
        

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
