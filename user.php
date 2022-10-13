<?php

    require "database_connector.php";
    require "functions.php";
    require "core.php";

  //OPERATION OF THE LOGOUT BUTTON
  if(array_key_exists('logout', $_POST)) {
  header("Location: ./logout.php");
  }

  //OPERATION OF THE USER BUTTON
  if(array_key_exists('user', $_POST)) {
  header("Location: user.php");
  }

  //OPERATION OF THE UPDATE BUTTON
  if(array_key_exists('update', $_POST)) {
    header("Location: userUpdate.php");
  }

  //OPERATION OF THE PASSWORD BUTTON
  if(array_key_exists('password', $_POST)) {
    header("Location: userChangePassword.php");
  }

  //OPERATION OF THE PASSWORD BUTTON
  if(array_key_exists('appointments', $_POST)) {
    header("Location: userappointments.php");
  }


  if(loggedin()){

    $username = getfield('user_login','username','user_id',$con);

    $user_id = getfield('userdetail','user_id','user_id',$con);


    $query="SELECT * FROM `userdetail` WHERE `user_id`= $user_id";


    if($query_run = mysqli_query($con,$query)){

            /*  FETCHING THE DATA FROM THE DATABASE */ 
          while ($row = mysqli_fetch_assoc($query_run)){
            $user_id= $row['user_id'];
              $phone = $row['phone_number'];
              $district = $row['district'];
              $fname = $row['firstname'];
              $lname = $row['lastname'];
              $gender = $row['gender'];
              $address = $row['address'];
              $email = $row['email'];
              $image = $row['profile_pic'];
              
          }


    }else{
        echo 'Error in the query';
    }



}else{
    header("Location: HomePage.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="HomePage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="userdashboard.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
  <div>
    <nav class="navbar navbar-expand-lg shadow p-3 mb-5 bg-white rounded "  >
        <div class="container mt-2 mb-2"  >
          <a href="HomePage.php" class="navbar-brand" >
            <!-- Logo Image -->
            <img src="logo.png" width="65vw" height="50vw" alt="" class="d-inline-block align-middle mr-2 ">
            <!-- Logo Text -->
            <span class="text-uppercase font-weight-bold" style="color: #00a8dd;">BE A HOME</span>
          </a>
      
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span>
   
          </button>

      

      
          <div id="navbarSupportedContent" class="collapse navbar-collapse" style="padding-left: 52%;">
            <ul class="navbar-nav ml-auto ">
             
            <li class="nav-item " ><a href="About.php" class="nav-link"><span class="navColor">About</span></a></li>
              <li class="nav-item"><a href="Services.php" class="nav-link"><span class="navColor">Services</span></a></li>
              <li class="nav-item"><a href="ContactUs.php" class="nav-link"><span class="navColor">Contact</span></a></li>
            </ul>
            <!-- <a href="login_form.php"><input class='btn btn-primary rounded-pill  btn-main-w ms-3'  type='button' name='login'   value='Login' /></a>
            <a href="registration_form.php"><input class='btn btn-primary rounded-pill btn-main-w ms-3' type='button' name='login' class='button' value='Register' /></a> -->
            
               

            <form method='post' >

              <button class='btn    ms-3 navButton buttonOutline'  type='submit' name='user' style='width:4vw;height:5vw;'><img src='userIcon.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:-2vw;margin-left:-2vw;'></button>

            </form>
            
            <form method='post'>
              <button class='btn   ms-3  buttonOutline'  type='submit' name='logout' style='width:4vw;height:5vw;' ><img src='logout.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:5vw;margin-left:-2vw;'></button>

            </form>

                
                 
          </div>
        </div>
      </nav>
    </div>

   

    
    <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center" >
        <div class="col-xl-10 col-md-12">
  <div class="card user-card-full">
    <div class="row m-l-0 m-r-0">
      <div class="col-sm-4 bg-c-lite-green user-profile">
        <div class="card-block text-center text-white">
          <div class="m-b-25">
            <img src="<?php echo $image; ?>" class="img-radius" alt="User-Profile-Image">
          </div>
          <h6 class="f-w-600 user-name-size"><?php echo $username; ?></h6>
          <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="card-block">
          <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
          <div class="row">
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">First Name</p>
              <h6 class="text-muted f-w-400"><?php echo $fname; ?></h6>
            </div>
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">Last Name</p>
              <h6 class="text-muted f-w-400"><?php echo $lname; ?></h6>
            </div>
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">Email</p>
              <h6 class="text-muted f-w-400"><?php echo $email; ?></h6>
            </div>
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">Phone</p>
              <h6 class="text-muted f-w-400">0<?php echo $phone; ?></h6>
            </div>
          </div>
            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Other</h6>
            <div class="row">
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Gender</p>
                <h6 class="text-muted f-w-400"><?php echo $gender; ?></h6>
              </div>
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Address</p>
                <h6 class="text-muted f-w-400"><?php echo $address; ?></h6>
              </div>
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Living District</p>
                <h6 class="text-muted f-w-400"><?php echo $district; ?></h6>
              </div>
            </div> <br/><br/>
            <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
              
                <a href = "updateDetail.php?id=<?php echo $user_id; ?>" class="btn btn-primary buttonText">Update details </a>
                </br>
              </div>

              <div class="col-sm-6">
                <a href = "updateUserPassword.php?id=<?php echo $user_id; ?>" class="btn btn-primary buttonText">Update Password </a>
                </br>
              </div>

          
              </div>

              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
        </div>
          </div>
  </div> 
<section >

<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted shadow p-3 " >
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>BE A HOME
          </h6>
          <p>
          <img src="LOGO.png" alt="LOGO" style="width:8vw;height:7vw;">
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
              OUR VISION
          </h6>
          
          <p>
          Our vision is to save the lives of the homeless and unwanted companion animals of Sri Lanka.

          </p>
         
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Our Web Site
          </h6>
          <p>
            <a href="About.php" class="text-reset footerText">About</a>
          </p>
          <p>
            <a href="Services.php" class="text-reset footerText">Services</a>
          </p>
          <p>
            <a href="ContactUs.php" class="text-reset footerText">Contact Detail</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Premananda MW, Madiha, Matara</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            beAHome@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 076 52 59 905</p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color:#8bc53f ;color: white;">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="" style="text-decoration: none;">Kulathunga.com</a>
  </div>
  
</footer>
<!-- Footer -->

<!-- #8bc53f -->
<!-- rgba(0, 0, 0, 0.05) -->


</section>
   
</body>
</html>