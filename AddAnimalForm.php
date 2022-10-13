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
  $user_id = getfield('userdetail','user_id','user_id',$con);


  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Animal</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="HomePage.css?v=<?php echo time(); ?>">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
<div>
<nav class="navbar navbar-expand shadow p-3 mb-5 bg-white rounded "  >
        <div class="container mt-2 mb-2"  >
          <a href="HomePage.php" class="navbar-brand" >
            <!-- Logo Image -->
            <img src="logo.png" width="65vw" height="50vw" alt="" class="d-inline-block align-middle mr-2 ">
            <!-- Logo Text -->
            <span class="text-uppercase font-weight-bold" style="color: #00a8dd;">BE A HOME</span>
          </a>
      
          

      

      
          
            <!-- <a href="login_form.php"><input class='btn btn-primary rounded-pill  btn-main-w ms-3'  type='button' name='login'   value='Login' /></a>
            <a href="registration_form.php"><input class='btn btn-primary rounded-pill btn-main-w ms-3' type='button' name='login' class='button' value='Register' /></a> -->
            <?php
                  if(loggedin()){

                    echo "
                   
 
                   
 
                    <div id='navbarSupportedContent' class='collapse navbar-collapse navSize navReSize' >
                    <ul class='navbar-nav ml-auto' >
                  
                      <li class='nav-item'  ><a href='About.php' class='nav-link'><span class='navColor'>About</span></a></li>
                      <li class='nav-item'><a href='Services.php' class='nav-link'><span class='navColor'>Services</span></a></li>
                      <li class='nav-item'><a href='ContactUs.php' class='nav-link'><span class='navColor'>Contact</span></a></li>
                    </ul>
 
                    <a href ='AddAnimalForm.php'><button type='button' class='btn btn-primary btn-main btn-main-w ms-3 navButton'   >Add Animal</button></a>
                    <form method='post' >

                      <button class='btn    ms-3 navButton buttonOutline'  type='submit' name='user' style='width:4vw;height:5vw;'><img src='userIcon.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:-2vw;margin-left:-2vw;'></button>
                    
                    </form>
                    <form method='post'>
                    <button class='btn   ms-3  buttonOutline'  type='submit' name='logout' style='width:4vw;height:5vw;' ><img src='logout.png'  class='rounded-circle' style='width:4vw;height:3.5vw;margin-right:5vw;margin-left:-2vw;'></button>
                    
                   </form>
                    </div>
                    </div>";
 
                   }else{
                      echo "
                      
                      <div id='navbarSupportedContent' class='collapse navbar-collapse' style='padding-left: 42vw;'>
                    <ul class='navbar-nav ml-auto' >
                  
                      <li class='nav-item'  ><a href='About.php' class='nav-link'><span class='navColor'>About</span></a></li>
                      <li class='nav-item'><a href='Services.php' class='nav-link'><span class='navColor'>Services</span></a></li>
                      <li class='nav-item'><a href='ContactUs.php' class='nav-link'><span class='navColor'>Contact</span></a></li>
                    </ul> 
                      
                      <form method='post'>
                          <input class='btn btn-primary rounded-pill  btn-main-w ms-3' type='submit' name='login' class='button' value='Login' />
                      </form>
                      <form method='post'>
                           <input class='btn btn-primary rounded-pill  btn-main-w ms-3' type='submit' name='register' class='button' value='Register' />
                     </form>
                     </div>
                     </div>";
                  }
                  ?>
          
        </div>
      </nav>
    </div>


<section>
<!-- Registration Form -->
<div class="container" style="height:2rem">
        </div>
        <div class="container text-center mt-3">
            <h1 class="text-secondary">Add Animal</h1>
          </div>
          
            <div class="container mt-3 mb-5 shadow" style="width:800px">

        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-petowner" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

            <form action="AddAnimal.php?id='<?php echo $user_id; ?>'" method="POST" enctype="multipart/form-data" autocomplete="off">

                            <div class="mb-3">
                                <label for="gender" class="form-label">Animal Category</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="dog" value="Dog" checked>
                                    <label class="form-check-label" for="dog">Dog</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="cat" name="category" value="Cat">
                                    <label class="form-check-label" for="cat">Cat</label>
                                </div>
                            </div>

                      <div class="mb-3">

                        <label for="district" class="form-label">Select District :</label>
                        <select class="form-select " name="district" >
                            <option value="Matara">Matara</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Matale">Matale</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Vavuniya">Vavuniya</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Galle">Galle</option>
                        </select>
                    
                    </div>


                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea type="address" rows="2" name="address" id="address" class="form-control" value="<?php if(isset($address)){ echo $address; } ?>" required></textarea>
                            </div>

                   
                    <div class="mb-3">
                        <label for="phone" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="phone" placeholder="mobile number" aria-describedby="phone" type="tel" placeholder="0713456789" pattern="[0-9]{10}" name="phone" value="<?php if(isset($phone)){ echo $phone; } ?>" required>
                    </div>

                    <div class="mb-3">
                       <label for="propic" class="form-label">Profile Picture</label> 
                       <input type="file" id="propic" name="propic" class="form-control" required>
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



</section>
<script>
  function showhide() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var y = document.getElementById("Cpassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

function showhidep() {
  var x = document.getElementById("hpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var y = document.getElementById("hCpassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

</body>
</html>