<?php
   require './core.php';
   require './database_connector.php';
   require './functions.php';

    $user_id=$_GET['id'];     

    //OPERATION OF THE LOGIN BUTTON
      if(array_key_exists('login', $_POST)) {
        header("Location: ./login_form.php");
      }

    //OPERATION OF THE REGISTER BUTTON
      if(array_key_exists('register', $_POST)) {
        header("Location: ./registration_form.php");
      }

    //OPERATION OF THE LOGOUT BUTTON
      if(array_key_exists('logout', $_POST)) {
        header("Location: ./logout.php");
      }

    //OPERATION OF THE USER BUTTON
      if(array_key_exists('user', $_POST)) {
        header("Location: ./user.php");
      }

      $query="SELECT * FROM `userdetail` WHERE `user_id`= $user_id";
     

      if($query_run = mysqli_query($con,$query)){

        while ($row = mysqli_fetch_assoc($query_run)){
            $user_id = $row['user_id'];
            $phone_number = $row['phone_number'];
            $district = $row['district'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $address = $row['address'];
            $email = $row['email'];
            $profile_pic = $row['profile_pic'];
            
            
        }


  }else{
    echo "<script type='text/javascript'>alert('Database Error');</script>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliver Animal Form</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="HomePage.css?v=<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
            <?php
                  if(loggedin()){

                   echo "<form method='post' >

                   <button class='btn    ms-3 navButton buttonOutline'  type='submit' name='user' style='width:4vw;height:5vw;'><img src='userIcon.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:-2vw;margin-left:-2vw;'></button>
                 
                 </form>
                 <form method='post'>
                 <button class='btn   ms-3  buttonOutline'  type='submit' name='logout' style='width:4vw;height:5vw;' ><img src='logout.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:5vw;margin-left:-2vw;'></button>
                 
                </form>";

                  }else{
                     echo " <form method='post'>
                         <input class='btn btn-primary rounded-pill  btn-main-w ms-3' type='submit' name='login' class='button' value='Login' />
                     </form>
                     <form method='post'>
                          <input class='btn btn-primary rounded-pill  btn-main-w ms-3' type='submit' name='register' class='button' value='Register' />
                    </form>";
                  }
                  ?>
          </div>
        </div>
      </nav>
    </div>


<section>
<!-- Registration Form -->
<div class="container" style="height:2rem">
        </div>
        <div class="container text-center mt-3">
            <h1 class="text-secondary">Update User Detail </h1>
          </div>
          
            <div class="container mt-3 mb-5 shadow" style="width:800px">


        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-petowner" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

            <form action="AddUpdateDetail.php?id='<?php echo $user_id; ?>'" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    <div class="mb-3">
                                        <label for="userID" class="form-label">User ID</label>
                                        <input class="form-control" id="userID"  type="text" name="userID"  value="<?php echo $user_id; ?>"  READONLY>
                                    </div>
                        <div class="row">
                                <div class="col-md mt-3">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">First Name</label>
                                        <input class="form-control" id="firstname" aria-describedby="firstname" type="text" name="firstname" placeholder="first name " value="<?php print $firstname; ?>" required >
                                    </div>
                                </div>
                                <div class="col-md mt-3">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Last Name</label>
                                        <input class="form-control" id="lastname" aria-describedby="username" type="text" name="lastname" placeholder="last name " value="<?php echo $lastname; ?>" required >
                                    </div>
                                </div>
                        </div>  

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" value="<?php echo $email;?>" required >
                            </div>

                    
            


                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="female" name="gender" value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="district" class="form-label">District</label>
                                <input type="text" class="form-control" id="district" name="district" placeholder="district" aria-describedby="district" value="<?php echo $district;?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea type="address" rows="2" name="address" id="address" class="form-control" value="" required><?php echo $address;?></textarea>
                            </div>

                   

                    <div class="mb-3">
                        <label for="phone" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="phone" placeholder="mobile number" aria-describedby="phone" type="tel"  pattern="[0-9]{10}" name="phone" value="0<?php echo $phone_number;?>" required>
                    </div>

                    <div class="mb-3">
                       <label for="propic" class="form-label">Profile Picture</label> 
                       <input type="file" id="propic" name="propic" class="form-control" value="<?php echo $profile_pic;?>" required>
                    </div>
            
              <input type="submit" class="btn btn-primary btn-main mb-3 mt-3" value="Submit">
              <input type="reset" class="btn btn-secondary mb-3 mt-3 ms-3" style="border-radius:30px" value="Reset">
              <a href="login_form.php" class="ms-3">Login</a>
            </form>
          </div>
        </div>

  

</section>


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
