<?php
session_start();  

include('databases.php');

if(!isset($_SESSION['logged_in'])){
	header('location:login.php');
	die();
}

$obj= new query();
$id= $_GET['id'];
// echo '<pre>';
//  print_r($id);
//  die();
$condition_arr=array('id'=>$id);

$check=$obj->getData('post','*',$condition_arr,'','');
// echo '<pre>';
//  print_r($check);
//  die();
$conditionnn_arr=array('post_id'=>$id);

$comment=$obj->getData('comment','*',$conditionnn_arr,'','');
// echo '<pre>';
// print_r($comment);die;
if(isset($_POST['postcomment'])){
  $comment =$obj->get_safe_str($_POST['comment']);
  $postid =$obj->get_safe_str($_POST['id']);
  $userid= $_SESSION['user_id'];
  $username= $_SESSION['user_name'];

  $condition_arr=array('comment'=>$comment,'post_id'=>$postid,'user_id'=>$userid,'username'=>$username);

  $obj->insertData('comment',$condition_arr);

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
    <!--  -->
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
            <a class="dropdown-item" href="profile.php"><?php  echo  $_SESSION['user_name'];?></a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
      </div>
    </nav>
  
    <?php foreach($check as $post) { ?> 
    <div id="intro" class="p-5 text-center ">
      <h1 class="mb-0 h4"><strong><?php echo $post['title']; ?></strong></h1>
    </div>

    <main class="mt-4 mb-5">
    <div class="container text-dark d-flex justify-content-center">
      <!--Grid row-->
     
        <!--Grid column-->
        <div class="col-md-8 mb-4 align-items-center">
          <!--Section: Post data--->
          <section class="border-bottom mb-4">
            <img src="<?php echo $post['media']; ?>"
              class="img-fluid shadow-2-strong rounded-5 mb-4" alt="" />

            <div class="row align-items-center mb-4">
              <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                <img src="./joker/FjU2lkcWYAgNG6d.jpg" class="rounded-5 shadow-1-strong me-2"
                  height="35" alt="" loading="lazy" />
                <span> Published <u>21.03.2023</u> by</span>
                <a href="profile.php" class="text-dark"><?php echo $post['owner_name']; ?></a> 
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
          <!--Section: Post data--->

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

          <!--Section: Comments-->
          <section class="border-bottom mb-3">
            <p class="text-center"><strong>Comments: </strong></p>
            
            <?php 
            if($comment){
            
            foreach($comment as $tiger){?>
            <!-- Comment -->
            <div class="row mb-4">
              <div class="col-2">
                <img src="./joker/FjU2lkcWYAgNG6d.jpg"
                  class="img-fluid shadow-1-strong rounded-5" alt="" />
              </div>

              <div class="col-10">
                <p class="mb-2"><strong><?php echo $tiger['username']; ?></strong></p>
                <p>
                <?php echo $tiger['comment']; ?>
                </p>
              </div>
            </div>  
          </section>
          <?php } } ?>

          <!--Section: Comments-->

          <!--Section: Reply-->
          <section>
            <p class="text-center"><strong>Leave a reply</strong></p>

            <form method="POST">
            
              <div class="form-outline mb-4">
                <input type="hidden" name="id" value=<?php echo $id; ?> >
                <textarea  name="comment"  class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label"for="form4Example3">Text</label>
              </div>

           

              <!-- Submit button -->
              <button type="submit" name="postcomment" class="btn btn-primary btn-block mb-4">
                Comment
              </button>
            </form>
          </section>
          <!--Section: Reply-->
        
    </div>
    </main>
    <?php } ?>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>

